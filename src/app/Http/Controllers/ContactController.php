<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
  public function index(){
    return view('index');
  }

  public function confirm(ContactRequest $request){
    $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'tel_first', 'tel_second', 'tel_third', 'address', 'building', 'content', 'detail']);
    return view('confirm', compact('contact'));
  }
  public function store(Request $request){
    $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'tel', 'address', 'building', 'content', 'detail']);
    Category::create($contact);
    return view ('thanks');
  }
  
}
