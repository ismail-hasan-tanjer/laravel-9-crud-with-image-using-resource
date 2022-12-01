<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function index()
    {
        return view('backend.info.index');
    }

    public function store(Request $request)
    {
        $request ->validate([
            'username' => 'required | max:255 | lowercase',
            'email' => 'required | unique:infos',
            'password'=> 'required |'

        ]);


        $image = $request->image;

        $info = new Info();
        $info->username = $request->username;
        $info->email    = $request->email;
        $info->password = $request->password;

        if ($image) {
            $folder     = 'db/images/student-images/';
            $imageName  = time() . '.' . $image->getClientOriginalExtension();
            $image->move($folder,$imageName);
            $info->image = $folder . $imageName;
        }

        $info->save();
        return redirect()->back()->with('notify','Info Saved Succesfully!');

    }
}
