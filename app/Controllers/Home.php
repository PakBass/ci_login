<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function __construct()
    {
        $this->session = service('session');
        $this->config = config('Auth');
        $this->Auth = service('authentication');
    }

    public function index()
    {
        $data = [
            'config' => $this->config
        ];
        return view('auth/login', $data);
    }
    public function register()
    {
        return view('auth/register');
    }
    public function user()
    {
        return view('user/index');
    }
}
