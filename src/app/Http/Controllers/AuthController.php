<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;

class AuthController extends Controller
{
   public function index(){
    $contacts = Contact::with('category')->get();
    $categories = Category::all();
    return view('admin', compact('contacts', 'categories'));
  }

  public function search(Request $request)
{
  $contacts = Contact::with('category')->CategorySearch($request->category_id)->KeywordSearch($request->keyword)->get();
  $categories = Category::all();
    $contacts = Contact::Paginate(7);
  return view('admin', compact('contacts', 'categories'));
}


    public function register(){
        return view('auth.register');
    }

    public function login(){
        return view('auth.login');
    }
}
