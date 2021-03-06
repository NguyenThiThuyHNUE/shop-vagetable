<?php


namespace App\Repositories;


interface UserRepositoryInterface extends CRUDRepository
{
    public function getAll();

    public function create($request);

    public function findById($id);

    public function update($request, $id);

    public function delete($id);

    public function edit($id);
}
