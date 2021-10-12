<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TaskModel;

class TaskController extends BaseController
{
    public function index()
    {
        
    }

    public function store()
    {
        helper(['form']);
        $rules = [
            'title' => 'required|min_length[5]|max_length[50]',
            'description' => 'required|min_length[5]'
        ];

        if($this->validate($rules)) {
            $taskModel = new TaskModel();

            $data = [
                'title' => $this->request->getVar('title'),
                'description' => $this->request->getVar('description')
            ];

            $taskModel->save($data);
            return redirect()->back();
        }
    }

    public function showUpdate($id = null)
    {
       $taskModel = new TaskModel();
       $data['task'] = $taskModel->where('id', $id)->first();
       return view('dashboard/update', $data);
    }

    public function update()
    {
        $taskModel = new TaskModel();
        $id = $this->request->getVar('id');
        $data = [
            'title' => $this->request->getVar('title'),
            'description' => $this->request->getVar('description')
        ];

        $taskModel->update($id, $data);
        return redirect()->back();
    }

    public function destroy($id = null)
    {
        $taskModel = new TaskModel();
        $data['task'] = $taskModel->where('id', $id)->delete($id);
        return redirect()->back();
    }
}
