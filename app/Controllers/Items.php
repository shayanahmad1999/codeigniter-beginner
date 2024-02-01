<?php

namespace App\Controllers;

use App\Models\ItemModel;

class Items extends BaseController
{   

    public function index() {
        $model = model(ItemModel::class);
        $data = [
            'items' => $model->getItems(),
            'title' => 'Item archive',
        ];

        return view('templates/header', $data)
            . view('items/index', $data)
            . view('templates/footer');
    }

    public function create() {
        helper('form');
        return view('items/create');
    }

    public function store() {
        helper('form');

        $data = $this->request->getPost(['name', 'description']);

        if (! $this->validateData($data, [
            'name' => 'required|max_length[255]|min_length[3]',
            'description'  => 'required|max_length[5000]|min_length[10]',
        ])) {
            return $this->create();
        }

        $post = $this->validator->getValidated();

        $model = model(ItemModel::class);

        $model->save([
            'name' => $post['name'],
            'description'  => $post['description'],
        ]);

        $model->addItem($data);
        return view('templates/header', ['title' => 'Create a item'])
        . view('news/success')
        . view('templates/footer');
    }

    public function edit($id) {
        helper('form');
        $model = model(ItemModel::class);
        $data = [
            'item' => $model->getItems($id),
        ];

        return view('items/edit', $data);
    }

    public function update($id) {
        $model = model(ItemModel::class);
        $data = [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
        ];

        $model->updateItem($id, $data);
        return redirect()->to('items');
    }

    public function soft_delete($id) {
        $model = model(ItemModel::class);
        $model->softDeleteItem($id);
        return redirect()->to('items');
    }

    public function softDeleteIndex() {
        $model = model(ItemModel::class);
        $data = [
            'items' => $model->softDeleteGetItems(),
            'title' => 'Item Deleted',
        ];

        return view('templates/header', $data)
            . view('items/soft_delete', $data)
            . view('templates/footer');
    }

    public function restore($id) {
        $model = model(ItemModel::class);
        $model->recoverDeleteItem($id);
        return redirect()->to('items');
    }

    public function delete($id) {
        $model = model(ItemModel::class);
        $model->DeleteItem($id);
        return redirect()->to('items');
    }
}
