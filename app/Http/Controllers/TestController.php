<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(Request $request)
    {
        echo 'OKOK';
    }

    public function test(Request $request)
    {
        return view('test.test01');
    }

    public function test2(Request $request, $hrefPram)
    {
        echo $hrefPram;
    }

    public function test3(Request $request, $x, $y)
    {
        return $x + $y;
    }
}
