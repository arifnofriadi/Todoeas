<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TaskModel;

class DashboardController extends BaseController
{
    public function index()
    {
        $taskModel = new TaskModel();
        $data['tasks'] = $taskModel->orderBy('id', 'DESC')->findAll();
        return view('dashboard/index', $data);
    }
}
