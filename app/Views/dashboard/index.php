<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Todoeas</title>
    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('style.css') ?>">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a href="" class="navbar-brand">Todoeas</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-control="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="<?= site_url('/') ?>" class="nav-link active" title="go to home">
                            <i class="bi bi-house-door-fill"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= site_url('/logout') ?>" class="nav-link active" title="sign out here">
                            <i class="bi bi-power"></i>
                        </a>
                    </li>
                </ul>
                <div class="d-flex">
                    <input type="search" name="keyword" id="keyword" placeholder="Search" class="form-control" aria-label="Search">
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <table class="mb-5 table table-hover w-100">
            <tbody>
                <?php if($tasks): ?>
                <?php foreach($tasks as $task): ?>
                <tr class="row">
                    <td class="col-md-3">
                    
                        <a href="<?php echo base_url('delete/'.$task['id']); ?>" class="float-right">
                            <input type="checkbox">
                        </a>
                        
                        <strong><?php echo $task['title']; ?></strong>
                       
                    </td>
                    <td class="col-md-8">
                        <span><?php echo $task['description']; ?></span>
                    </td>
                    <td class="col-md-1 text-center">
                        <a href="<?php echo base_url('delete/'.$task['id']); ?>" title="delete task" class="text-danger">
                            <i class="bi bi-trash"></i>
                        </a>
                        <a href="<?php echo base_url('update/'.$task['id']); ?>" title="update task">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                        
                    </td>
                </tr>
                <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>

        <div class="space-task">
            <a class="text-secondary" data-bs-toggle="collapse" href="#collapseTask" role="button" aria-expanded="false" aria-controls="collapseTask">
                <i class="bi bi-plus text-info"></i> Add task
            </a>
            <div class="collapse" id="collapseTask">
                <div class="card card-body">
                    <form action="<?php echo base_url(); ?>/TaskController/store" method="post">
                        <div class="form-group">
                            <input type="text" name="title" id="title" placeholder="Title" class="form-control">
                        </div>
                        <div class="form-group mt-3 mb-3">
                            <textarea name="description" id="description" cols="30" rows="3" class="form-control text-secondary" placeholder="Description"></textarea>
                        </div>
                        <div class="d-grid col-1">
                            <button type="submit" class="btn btn-info text-white">Add task</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Js -->
    <script src="<?= base_url('js/bootstrap.bundle.js') ?>"></script>
</body>
</html>