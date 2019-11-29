<?php


namespace App\Repositories\impl;


use App\Employee;
use App\Repositories\EmployeeRepositoryInterface;

class EmployeeRepository implements EmployeeRepositoryInterface
{
    public function getAll()
    {
        return Employee::all();
    }

    public function create($request)
    {
        return Employee::create($request->all());
    }

    public function findById($id)
    {
        return Employee::find($id);
    }

    public function update($request, $id)
    {
        $user = $this->findById($id);
        return $user->update($request->all());
    }

    public function delete($id)
    {
        $user = $this->findById($id);
        return $user->delete();
    }
}
