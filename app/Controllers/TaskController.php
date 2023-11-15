<?php

namespace App\Controllers;

use App\Models\Tasks;
use App\Models\Users;

class TaskController extends BaseController{
    public function index(){
        $tasks = new Tasks();
        $alltask = $tasks->findAll();
        return view('task/index', ['tasks' => $alltask]);
    }
    public function create(){
        $users = new Users();
        $alluser = $users->findAll();
        return view('task/create', ['users' => $alluser]);
    }
    public function store(){
        $task = new Tasks();
        $data = [
            'task' => $this->request->getPost('task'),
            'done' => $this->request->getPost('done') ? $this->request->getPost('done') : 0,
            'dueDate' => $this->request->getPost('dueDate'),
            'assignedToString' => $this->request->getPost('assignedToString'),
        ];
        $task->insert($data);
        return redirect()->to('/task');
    }
    public function edit($id){
        $task = new Tasks();
        $task_data = $task->find($id);
        $users = new Users();
        $user_data = $users->findAll();
        return view('task/edit', ['task_data' => $task_data , 'users' => $user_data]);
    }
    public function update(){
        $task = new Tasks();
        $data = [
            'task' => $this->request->getPost('task'),
            'done' => $this->request->getPost('done') ? $this->request->getPost('done') : 0,
            'dueDate' => $this->request->getPost('dueDate'),
            'assignedToString' => $this->request->getPost('assignedToString'),
        ];
        $task->update($this->request->getPost('id'), $data);
        return redirect()->to('/task');
    }
    public function delete($id){
        $task = new Tasks();
        $task->delete($id);
        return redirect()->to('/task');
    }
}