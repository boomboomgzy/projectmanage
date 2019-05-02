<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index(){
        return view('layouts.app');
    }
    public function create(){
        return view('article.create');
    }
}
