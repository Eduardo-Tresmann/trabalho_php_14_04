<?php

namespace App\Controllers;

use App\Models\TeacherModel;
use CodeIgniter\Controller;

class TeacherController extends BaseController
{
    protected $teacherModel;

    public function __construct()
    {
        $this->teacherModel = new TeacherModel();
    }

    public function index()
    {
        $data['teachers'] = $this->teacherModel->findAll();
        return view('teachers/index', $data);
    }

    public function create()
    {
        return view('teachers/create');
    }

    public function store()
    {
        $this->teacherModel->save([
            'name' => $this->request->getPost('name'),
            'subject' => $this->request->getPost('subject'),
            'email' => $this->request->getPost('email'),
        ]);

        return redirect()->to('/teachers');
    }

    public function edit($id)
    {
        $data['teacher'] = $this->teacherModel->find($id);
        return view('teachers/edit', $data);
    }

    public function update($id)
    {
        $this->teacherModel->update($id, [
            'name' => $this->request->getPost('name'),
            'subject' => $this->request->getPost('subject'),
            'email' => $this->request->getPost('email'),
        ]);

        return redirect()->to('/teachers');
    }

    public function delete($id)
    {
        $this->teacherModel->delete($id);
        return redirect()->to('/teachers');
    }
}