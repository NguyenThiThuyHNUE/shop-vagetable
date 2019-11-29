<?php


namespace App\Services\impl;


use App\Repositories\impl\EmployeeRepository;
use App\Services\EmployeeServiceInterface;

class EmployeeService implements EmployeeServiceInterface
{
    private $employeeRepository;

    public function __construct(EmployeeRepository $employeeRepository)
    {
        $this->employeeRepository = $employeeRepository;
    }

    public function getAll()
    {
        return $this->employeeRepository->getAll();
    }

    public function create($request)
    {
        return $this->employeeRepository->create($request);
    }

    public function findById($id)
    {
        return $this->employeeRepository->findById($id);
    }

    public function update($request, $id)
    {
        return $this->employeeRepository->update($request, $id);
    }

    public function delete($id)
    {
        return $this->employeeRepository->delete($id);
    }
}
