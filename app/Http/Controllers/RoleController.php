<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\RoleRepositoryInterface;
use App\Repositories\PermissionRepositoryInterface;

class RoleController extends Controller
{
    private $views_directory = 'pages.roles';
    private $role_repository;
    private $permission_repository;

    public function __construct(
        RoleRepositoryInterface $role_repository_interface,
        PermissionRepositoryInterface $permission_repository_interface
    ) {
        $this->middleware('auth');
        $this->middleware('can:access settings');
        $this->role_repository = $role_repository_interface;
        $this->permission_repository = $permission_repository_interface;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = $this->role_repository->getById($id);
        $role_permissions = $role->permissions->map(function ($item) {
            return $item->id;
        })->toArray();
        $permissions = $this->permission_repository->all()->chunk(4)->all();

        return view("{$this->views_directory}.edit", [
            'role' => $role,
            'role_permissions' => $role_permissions,
            'permissions' => $permissions
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->role_repository
            ->syncPermissions($id, $request->input('role_permissions') ?? array());

        return redirect()->route('settings.access');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
