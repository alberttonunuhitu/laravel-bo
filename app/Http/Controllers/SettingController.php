<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UpdateUserProfile;
use App\Http\Requests\UpdateUserPassword;

class SettingController extends Controller
{
    private $views_directory = 'pages.settings';

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view("{$this->views_directory}.index");
    }

    public function profile()
    {
        return view("{$this->views_directory}.profile", [
            'user' => auth()->user()
        ]);
    }

    public function security()
    {
        return view("{$this->views_directory}.security");
    }

    public function updateProfile(UpdateUserProfile $request)
    {
        $request->user()->fill([
            'name' => $request->input('user_name'),
            'email' => $request->input('user_email')
        ])->save();

        return redirect()->route('settings.profile')
            ->with('success', 'Berhasil memperbaharui profil.');
    }

    public function updatePassword(UpdateUserPassword $request)
    {
        $request->user()->fill([
            'password' => Hash::make($request->input('password'))
        ])->save();

        return redirect()->route('settings.security')
            ->with('success', 'Berhasil mengubah kata sandi.');
    }
}
