<?php 

namespace Core\Providers;

use Illuminate\Support\ServiceProvider;
use Core\Repositories\ClientRepository;
use Core\Repositories\ClientRepositoryContract;
use Core\Services\ClientService;
use Core\Services\ClientServiceContract;

class CoreServiceProvider extends ServiceProvider 
{
    public function boot()
    {
        # code...
    }

    public function register()
    {
        $this->app->bind(ClientRepositoryContract::class, ClientRepository::class);
        $this->app->bind(ClientServiceContract::class, ClientService::class);
    }
}
