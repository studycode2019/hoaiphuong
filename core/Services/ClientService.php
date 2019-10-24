<?php

namespace Core\Services;

use Core\Repositories\ClientRepositoryContract;

class ClientService implements ClientServiceContract
{
    protected $repository;

    public function __construct(ClientRepositoryContract $repository)
    {
        return $this->repository = $repository;
    }

    public function paginate()
    {
        return $this->repository->paginate();
    }
    
    public function find($id)
    {
        return $this->repository->find($id);
    }

    public function store($data)
    {
        return $this->repository->store($data);
    }

    public function update($id, $data)
    {
        return $this->repository->update($id, $data);
    }

    public function destroy($id)
    {
        return $this->repository->destroy($id);
    }

    public function getList()
    {
        if(UserInfo()->level<3) {
            return redirect()->back();
        }
        return $this->repository->all();
    }

    public function getView($id)
    {
        return $this->repository->getView($id);
    }
}