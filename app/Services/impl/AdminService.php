<?php


namespace App\Repositories\impl;

use App\Admin;
use App\RoleV2;
use App\Services\AdminServiceInterface;
use App\Repositories\AdminRepositoryInterface;
use App\Services\BillServiceInterface;
use App\Services\MailUserServiceInterface;
use App\Services\ProductServiceInterface;
use App\Services\UserServiceInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Spatie\Permission\Models\Role;

class AdminService implements AdminServiceInterface
{
    /**
     * @var UserServiceInterface
     */
    private $userService;
    private $mailUserService;
    /**
     * @var ProductServiceInterface
     */
    private $productService;
    /**
     * @var BillServiceInterface
     */
    private $billService;
    /**
     * @var AdminRepositoryInterface
     */
    private $adminRepository;
    /**
     * @var EmployeeRepository
     */
    private $employeeRepository;


    public function __construct(UserServiceInterface $userService,
                                ProductServiceInterface $productService,
                                AdminRepositoryInterface $adminRepository,
                                EmployeeRepository $employeeRepository,
                                BillServiceInterface $billService,
                                MailUserServiceInterface $mailUserService)
    {
        $this->userService = $userService;
        $this->productService = $productService;
        $this->billService = $billService;
        $this->adminRepository = $adminRepository;
        $this->employeeRepository = $employeeRepository;
        $this->mailUserService = $mailUserService;
    }

    public function getAll()
    {
        $user = $this->userService->getAll();
        $product = $this->productService->getAll();
        $bill = $this->billService->getAll();
        $employee = $this->employeeRepository->getAll();
        $shipments = $this->getShipments();
        $mailUser = $this->mailUserService->getAll();
        return ['USER' => [$user, 'user'],
            'PRODUCT' => [$product, 'product'],
            'EMPLOYEE' => [$employee, 'employee'],
            'SHIPMENTS' => [$shipments, 'shipment'],
            'BILL' => [$bill, 'bill'],
            'MAILUSER' => [$mailUser, 'mailuser']
        ];

    }

    public function getAdminRoles()
    {
        $roleData = $this->adminRepository->getAdminRoles();
        $idModels = [];
        $idRoles = [];
        foreach ($roleData as $key => $value) {
            array_push($idRoles, $value->role_id);
            array_push($idModels, $value->model_id);
        }

        $admins = $this->getAllAdmin($idModels);
        $roles = $this->getAllRole($idRoles);

        $adminRole = [];
        for ($i = 0; $i < count($admins); $i++) {
            if ($admins[$i] == Auth::user()->name) Session::put('role', $roles[$i]);
            $adminRole[$admins[$i]] = $roles[$i];
        }
        return $adminRole;
    }

    public function getAllAdmin($idModels)
    {
        $admins = [];
        foreach ($idModels as $modelId) {
            $admin = Admin::find($modelId);
            array_push($admins, $admin->name);
        }
        return $admins;
    }

    /**
     * @param array $idRoles
     * @return array
     */
    public function getAllRole(array $idRoles): array
    {
        $roles = [];

        foreach ($idRoles as $id) {
            $role = RoleV2::findById($id);
            $roleName = str_replace("_", " ", strtoupper($role->name));
            array_push($roles, [$roleName, $role->objManage]);
        }

        return $roles;
    }

    public function getAdminRole()
    {
        $roles = $this->adminRepository->getRoles();
        foreach ($roles as $role) {
            $roleName = $this->upperStringRole($role->name);
            if ($roleName == Session::get('role')[0]) Session::put('objManage', $this->upperStringRole($role->objManage));
        }
    }

    public function upperStringRole($string)
    {
        return str_replace("_", " ", strtoupper($string));
    }

    public function getShipments()
    {
        return DB::table('shipments')->get();
    }
}
