<?php


namespace App\Repositories\impl;


use App\MailUser;
use App\Repositories\MailUserRepositoryInterface;

class MailUserRepository implements MailUserRepositoryInterface
{
    public function getAll()
    {
        return MailUser::all();
    }

    public function create($request)
    {
        return MailUser::create($request->all());
    }

    public function findById($id)
    {
        return MailUser::find($id);
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

    public function edit($id){
        $user = $this->findById($id);
        return $user;
    }
}
