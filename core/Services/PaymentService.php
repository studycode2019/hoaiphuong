<?php

namespace Core\Services;

use Core\Repositories\PaymentRepositoryContract;

class PaymentService implements PaymentServiceContract
{
    protected $repository;

    public function __construct(PaymentRepositoryContract $repository)
    {
        return $this->repository = $repository;
    }

    public function all()
    {
        return $this->repository->all();
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
        return $this->repository->getList();
    }

    public function getListbyField($field_id)
    {
        return $this->repository->getListbyField($field_id);
    }
}