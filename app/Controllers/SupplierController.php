<?php

namespace App\Controllers;

use App\Models\SupplierModel;
use CodeIgniter\Controller;

class SupplierController extends BaseController
{
    protected $supplierModel;

    public function __construct()
    {
        $this->supplierModel = new SupplierModel();
    }

    public function index()
    {
        $data['suppliers'] = $this->supplierModel->findAll();
        return view('suppliers/index', $data);
    }

    public function create()
    {
        return view('suppliers/create');
    }

    public function store()
    {
        $this->validate([
            'name' => 'required|min_length[3]|max_length[50]',
            'email' => 'required|valid_email',
            'phone' => 'required|min_length[10]|max_length[15]',
        ]);

        $this->supplierModel->save([
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'phone' => $this->request->getVar('phone'),
        ]);

        return redirect()->to('/suppliers');
    }

    public function edit($id)
    {
        $data['supplier'] = $this->supplierModel->find($id);
        return view('suppliers/edit', $data);
    }

    public function update($id)
    {
        $this->validate([
            'name' => 'required|min_length[3]|max_length[50]',
            'email' => 'required|valid_email',
            'phone' => 'required|min_length[10]|max_length[15]',
        ]);

        $this->supplierModel->update($id, [
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'phone' => $this->request->getVar('phone'),
        ]);

        return redirect()->to('/suppliers');
    }

    public function delete($id)
    {
        $this->supplierModel->delete($id);
        return redirect()->to('/suppliers');
    }
}