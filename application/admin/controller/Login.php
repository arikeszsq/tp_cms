<?php


namespace app\admin\controller;


use think\Controller;

class Login extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function test()
    {
        var_dump($_REQUEST);;exit;
    }

}