<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class userController extends Controller
{
    public function editUser($id){
        // dd($id);
        $user = User::find($id);
        return view('edit', ['user' => $user]);
    }
}
