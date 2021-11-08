<?php

namespace App\Controllers;

class User extends BaseController
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
            'config' => $this->config,
            'title' => 'My Profile',
        ];
        return view('user/index', $data);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }
}
