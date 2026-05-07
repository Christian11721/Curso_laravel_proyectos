<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Container\Attributes\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users= new User();
        return view('user.index',compact('users'));
    }

    public function create()
    {
        $user = new User;
        $user->name ='Christian';
        $user->email='melendez.com';
        $user->password= Hash::make('1234');
        $user->age= 23;
        $user->address ='Bugambilias';
        $user->zip_code= 3312;
        $user->save();

        User::create([
            'name'=>'Fernando',
            'email'=>'info@.com',
            'password'=> Hash::make('123456789'),
            'age'=>25,
            'address'=>'tecamac',
            'zio_code'=>20084
        ]);

        User::create([
            'name'=>'Sergio',
            'email'=>'infofinanzas@.com',
            'password'=> Hash::make('139'),
            'age'=>39,
            'address'=>'tecamac',
            'zio_code'=>204
        ]);
        return redirect()->route('user.index');
    }
}
