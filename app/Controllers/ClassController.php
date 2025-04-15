<?php

namespace App\Controllers;

use App\Models\ClassModel;
use CodeIgniter\Controller;

class ClassController extends BaseController
{
    protected $classModel;

    public function __construct()
    {
        $this->classModel = new ClassModel();
    }

    public function index()
    {
        $data['classes'] = $this->classModel->findAll();
        return view('classes/index', $data);
    }

    public function create()
    {
        return view('classes/create');
    }

    public function store()
    {
        $this->classModel->save([
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
        ]);

        return redirect()->to('/classes');
    }

    public function edit($id)
    {
        $data['class'] = $this->classModel->find($id);
        return view('classes/edit', $data);
    }

    public function update($id)
    {
        $this->classModel->update($id, [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
        ]);

        return redirect()->to('/classes');
    }

    public function delete($id)
    {
        $this->classModel->delete($id);
        return redirect()->to('/classes');
    }
}