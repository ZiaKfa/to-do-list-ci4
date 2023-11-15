<?php

namespace App\Controllers;

use App\Models\users;

class UserController extends BaseController{
    public function index(){
        $users = new Users();
        $alluser = $users->findAll();
        return view('user/index', ['users' => $alluser]);
    }
    public function create(){
        return view('user/create');
    }
    public function store(){
        $user = new Users();
        $data = [
            'name' => $this->request->getPost('name'),
        ];
        $user->insert($data);
        return redirect()->to('/user');
    }
    public function edit($id){
        $user = new Users();
        $user_data = $user->find($id);
        return view('user/edit', ['user_data' => $user_data]);
    }
    public function update(){
        $user = new Users();
        $data = [
            'name' => $this->request->getPost('name'),
        ];
        $user->update($this->request->getPost('id'), $data);
        return redirect()->to('/user');
    }
    public function delete($id){
        $user = new Users();
        $user->delete($id);
        return redirect()->to('/user');
    }
}