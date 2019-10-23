<?php

namespace Core\Services;

use Core\Repositories\TicketRepositoryContract;
use Core\Repositories\TicketStatusRepositoryContract;
use Core\Repositories\TicketLogRepositoryContract;

class TicketService implements TicketServiceContract
{
    protected $repository;
    protected $ticket_status_repository;
    protected $ticket_log_repository;

    public function __construct(TicketRepositoryContract $repository, TicketStatusRepositoryContract $ticket_status_repository, TicketLogRepositoryContract $ticket_log_repository)
    {
        $this->repository = $repository;
        $this->ticket_status_repository = $ticket_status_repository;
        $this->ticket_log_repository = $ticket_log_repository;
        
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
        $data['ticket_status_id'] = 1;
        $ticket = $this->repository->store($data);
        $log['ticket_id'] = $ticket->id;
        $log['staff_id'] = UserInfo()->id;
        $log['content'] = "Đang chờ xử lý.";
        $log['is_public'] = true;
        $this->ticket_log_repository->store($log);
        return $ticket;
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
        if(UserInfo()->level>=3) {
            return $this->repository->all();
        } else {
            return $this->repository->getAllWithoutDone();
        }
    }

    public function setStatusId($id, $ticketstatus_id)
    {
        $data['ticket_status_id'] = $ticketstatus_id;
        return $this->repository->update($id, $data);
    }

    public function getView($id)
    {
        $data['ticket'] = $this->repository->getView($id);
        $data['ticket_statuses'] = $this->ticket_status_repository->all();
        return $data;
    }
}