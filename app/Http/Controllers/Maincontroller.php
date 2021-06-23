<?php

namespace App\Http\Controllers;

use App\Phonebook;
use Illuminate\Http\Request;

class Maincontroller extends Controller
{
    public function index()
    {

    //$users = Phonebook::all();
      $users = Phonebook::orderBy('name')->paginate(10);
    return view('home',compact('users'));
    }

    public function search(Request $request)
    {
      $s = $request->s;

      $users = Phonebook::where('name', 'LIKE' , "%{$s}%")->orderBy('name')->paginate(10);
      return view('home',compact('users'));


    }

    public function check($id,Request $request)
    {

     $valid = $request->validate([
             'name' => 'required|min:4,max:50',
             'email' => 'required|min:4,max:20',
             'phone' => 'required|min:4,max:20'
     ]);

     $users = new Phonebook();
     $users->name = $request->input('name');
     $users->email = $request->input('email');
     $users->phone = $request->input('phone');

     $users->save();



    return redirect()->route('home')->with('alert','Запис додано');
    }

    public function showOneUser($id)
    {
        $users = Phonebook::find($id);
        return view('new',compact('users'));
    }


    public function deleteUser($id)
    {
     Phonebook::find($id)->delete();
     return redirect()->route('home')->with('alert','Запис видалено');

    }


}
