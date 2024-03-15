<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view("contact");
    }
    public function allContact(){
        $allcontact = ContactModel::all();
        dd($allcontact);
        return view("admin");
    }
}
