<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfilesController extends Controller
{
    public function index($user)
    {
        $user = User::findOrFail($user);

        if ($user->profile) {
            return view('home', [
                'user' => $user,
            ]);
        } else {
            return abort(404);
        }
    }
}
