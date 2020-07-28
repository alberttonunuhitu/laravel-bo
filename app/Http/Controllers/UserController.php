<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUser;
use App\Http\Requests\UpdateUser;
use Illuminate\Support\Facades\Hash;
use App\Repositories\UserRepositoryInterface;
use App\Repositories\RoleRepositoryInterface;

class UserController extends Controller
{
    private $views_directory = 'pages.users';
    private $user_repository;
    private $role_repository;

    public function __construct(
        UserRepositoryInterface $user_repository_interface,
        RoleRepositoryInterface $role_repository_interface
    ) {
        $this->middleware('auth');
        $this->user_repository = $user_repository_interface;
        $this->role_repository = $role_repository_interface;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("{$this->views_directory}.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("{$this->views_directory}.create", [
            'roles' => $this->role_repository->forOptions()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUser  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUser $request)
    {
        $user = $this->user_repository->create([
            'name' => $request->input('name'),
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'role' => $request->input('role')
        ]);

        return redirect()->route('users.index')->with([
            'success' => 'Berhasil menambahkan data pengguna baru.'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view("{$this->views_directory}.show", [
            'user' => $this->user_repository->getById($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("{$this->views_directory}.edit", [
            'user' => $this->user_repository->getById($id),
            'roles' => $this->role_repository->forOptions()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUser  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUser $request, $id)
    {
        $user = $this->user_repository->update($id, [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'role' => $request->input('role')
        ]);

        return redirect()->route('users.index')->with([
            'success' => 'Berhasil memperbaharui data pengguna.'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->user_repository->delete($id);

        return redirect()->route('users.index')->with([
            'success' => 'Berhasil menghapus data pengguna.'
        ]);
    }
}
