<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        echo "<br> Test en el controlador";
    }

    public function sinMiddleware(){
        echo "<br> Test en el controlador sin middleware";
    }

}
