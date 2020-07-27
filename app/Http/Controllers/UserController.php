<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepositoryInterface;

class UserController extends Controller
{
    private $views_directory = 'pages.users';
    private $user_repository;

    public function __construct(
        UserRepositoryInterface $user_repository_interface
    ) {
        $this->middleware('auth');
        $this->user_repository = $user_repository_interface;
    }
}
