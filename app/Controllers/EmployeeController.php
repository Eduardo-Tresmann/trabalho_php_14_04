<?php

namespace App\Controllers;

use App\Models\EmployeeModel;
use CodeIgniter\Controller;

class EmployeeController extends BaseController
{
    protected $employeeModel;

    public function __construct()
    {
        $this->employeeModel = new EmployeeModel();
    }

    public function index()
    {
        $data['employees'] = $this->employeeModel->findAll();
        return view('employees/index', $data);
    }

    public function create()
    {
        return view('employees/create');
    }

    public function store()
    {
        $this->validate([
            'name' => 'required|min_length[3]',
            'email' => 'required|valid_email',
            'position' => 'required',
        ]);

        $this->employeeModel->save([
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'position' => $this->request->getVar('position'),
        ]);

        return redirect()->to('/employees');
    }

    public function edit($id)
    {
        $data['employee'] = $this->employeeModel->find($id);
        return view('employees/edit', $data);
    }

    public function update($id)
    {
        $this->validate([
            'name' => 'required|min_length[3]',
            'email' => 'required|valid_email',
            'position' => 'required',
        ]);

        $this->employeeModel->update($id, [
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'position' => $this->request->getVar('position'),
        ]);

        return redirect()->to('/employees');
    }

    public function delete($id)
    {
        $this->employeeModel->delete($id);
        return redirect()->to('/employees');
    }
}