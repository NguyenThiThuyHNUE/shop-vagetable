<?php


namespace App\Services\impl;


use App\Repositories\MailUserRepositoryInterface;
use App\Services\MailUserServiceInterface;

class MailUserService implements MailUserServiceInterface
{
    public $mailUserRepository;

    public function __construct(MailUserRepositoryInterface $mailUserRepository)
    {
        $this->mailUserRepository = $mailUserRepository;
    }

    public function getAll()
    {
        return $this->mailUserRepository->getAll();
    }

    public function create($request)
    {
        return $this->mailUserRepository->create($request);
    }

    public function findById($id)
    {
        return $this->mailUserRepository->findById($id);
    }

    public function update($request, $id)
    {
        return $this->mailUserRepository->update($request,$id);
    }

    public function delete($id)
    {
        return $this->mailUserRepository->delete($id);
    }

    public function edit($id){
        return $this->mailUserRepository->edit($id);
    }
}
