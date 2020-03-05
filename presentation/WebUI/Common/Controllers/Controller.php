<?php

namespace Presentation\WebUI\Common\Controllers;

use App\Common\Repositories\UserRepositoryInterface;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class Controller extends \Illuminate\Routing\Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(UserRepositoryInterface $userRepository)
    {
        return view('webui::index', [
            'user' => $userRepository->find(1)
        ]);
    }
}
