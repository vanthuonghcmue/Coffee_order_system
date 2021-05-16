<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
class ProfileController extends Controller
{
    public function Index()
    {
        return view('user.profile');
    }

    public function show()
    {
        $users= User::all();
        return view('admin.user.show', compact('users'));
    }

    public function edit()
    {
        return view('user.editInfor');
    }

    public function update(Request $request)
    {
        $user = new User;
        $id = Auth::user()->id;
        $user = User::find($id);
        $user->name = $request->name;
        $user->phone =  $request->phone;
        if ($request->hasFile('avatar')) {
            $user->image = $request->file('avatar')->storeAs('user',$user->id.'.'.time().'.'.$request->file('avatar')->extension());
        }
        $user->save();
        return back()->withInput();
    }
}
