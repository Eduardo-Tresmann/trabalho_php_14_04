<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class UserController extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $data['users'] = $this->userModel->findAll();
        return view('users/index', $data);
    }

    public function create()
    {
        return view('users/create');
    }

    public function store()
    {
        $this->validate([
            'username' => 'required|min_length[3]|max_length[20]',
            'email' => 'required|valid_email',
            'password' => 'required|min_length[6]',
        ]);

        $this->userModel->save([
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
        ]);

        return redirect()->to('/users');
    }

    public function edit($id)
    {
        $data['user'] = $this->userModel->find($id);
        return view('users/edit', $data);
    }

    public function update($id)
    {
        $this->validate([
            'username' => 'required|min_length[3]|max_length[20]',
            'email' => 'required|valid_email',
        ]);

        $this->userModel->update($id, [
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
        ]);

        return redirect()->to('/users');
    }

    public function delete($id)
    {
        $this->userModel->delete($id);
        return redirect()->to('/users');
    }
}