<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
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

    <div class="container mt-5 col-5 card card-body">
        <div class="row justify-content-md-center">
            <form action="<?= site_url('update') ?>" method="post">
                <input type="hidden" name="id" id="id" value="<?php echo $task['id']; ?>">
                <div class="form-group mb-3">
                    <input type="text" class="form-control" placeholder="Title" name="title" value="<?php echo $task['title']; ?>">
                </div>
                <div class="form-group mb-3">
                    <textarea name="description" id="description" class="form-control" placeholder="Description" cols="30" rows="3">
                    <?php echo $task['description']; ?>
                    </textarea>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>


    <!-- Bootstrap Js -->
    <script src="<?= base_url('js/bootstrap.bundle.js') ?>"></script>
</body>
</html>