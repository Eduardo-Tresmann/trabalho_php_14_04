<?php

namespace App\Controllers;

use App\Models\PaymentModel;
use CodeIgniter\Controller;

class PaymentController extends BaseController
{
    protected $paymentModel;

    public function __construct()
    {
        $this->paymentModel = new PaymentModel();
    }

    public function index()
    {
        $data['payments'] = $this->paymentModel->findAll();
        return view('payments/index', $data);
    }

    public function create()
    {
        return view('payments/create');
    }

    public function store()
    {
        $this->validate([
            'amount' => 'required|decimal',
            'user_id' => 'required|integer',
            'supplier_id' => 'required|integer',
            'date' => 'required|valid_date',
        ]);

        $this->paymentModel->save([
            'amount' => $this->request->getPost('amount'),
            'user_id' => $this->request->getPost('user_id'),
            'supplier_id' => $this->request->getPost('supplier_id'),
            'date' => $this->request->getPost('date'),
        ]);

        return redirect()->to('/payments');
    }

    public function edit($id)
    {
        $data['payment'] = $this->paymentModel->find($id);
        return view('payments/edit', $data);
    }

    public function update($id)
    {
        $this->validate([
            'amount' => 'required|decimal',
            'user_id' => 'required|integer',
            'supplier_id' => 'required|integer',
            'date' => 'required|valid_date',
        ]);

        $this->paymentModel->update($id, [
            'amount' => $this->request->getPost('amount'),
            'user_id' => $this->request->getPost('user_id'),
            'supplier_id' => $this->request->getPost('supplier_id'),
            'date' => $this->request->getPost('date'),
        ]);

        return redirect()->to('/payments');
    }

    public function delete($id)
    {
        $this->paymentModel->delete($id);
        return redirect()->to('/payments');
    }
}