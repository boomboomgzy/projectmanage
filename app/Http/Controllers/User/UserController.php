<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function name(){
        return 'name page';
    }
    public function young(){
        return 'i·m young！';
    }
}
