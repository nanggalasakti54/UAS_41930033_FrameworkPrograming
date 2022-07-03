<?php

namespace App\Controllers;
use App\Models\dataModel;

class Home extends BaseController
{
    public function index()
    {
        $dataModel = new dataModel();
        if(isset($_POST['id'])) {
            $dataModel->insert($_POST);
        }
        $data['dataMahasiswa'] = $dataModel->findAll();
        return view('welcome',$data);
    }

    public function edit($id) {
        $data['id'] = $id;
        $dataModel = new dataModel();
        $data['dataMahasiswa'] = $dataModel->find($id);
        return view('edit', $data);
    }

    public function onEdit() {
        $dataModel = new dataModel();
        $dataModel->update($_POST['id'], [
            'id' => $_POST['id'],
            'nim' => $_POST['nim']
        ]);
        return redirect()->to('/');
    }

    public function onDelete($id) {
        $dataModel = new dataModel();
        $dataModel->delete($id);
        return redirect()->to('/');
    }
}
