<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\RoleRepositoryInterface;

class AccessController extends Controller
{
    private $views_directory = 'pages.settings';
    private $role_repository;

    public function __construct(
        RoleRepositoryInterface $role_repository_interface
    ) {
        $this->middleware('auth');
        $this->middleware('can:access settings');
        $this->role_repository = $role_repository_interface;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("{$this->views_directory}.access", [
            'roles' => $this->role_repository->all()
        ]);
    }
}
