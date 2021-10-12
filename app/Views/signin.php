<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin | TodoApp</title>
    <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
    <link rel="shortcut icon" href="<?= base_url('favicon.ico'); ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
</head>
<body>
 
    <div class="container mt-5 col-5 card card-body">
        <div class="row justify content-md-center">
            <div>
                <h4 class="card-title">sign in to todoeas</h4>

                <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-warning">
                        <?= session()->getFlashdata('msg') ?>
                    </div>
                <?php endif;?>

                <form action="<?php echo base_url(); ?>/SigninController/LoginAuth" method="post">
                    <div class="form-group mb-3">
                        <input type="email" name="email" id="email" placeholder="Email" class="form-control" value="<?= set_value('name') ?>">
                    </div>
                    <div class="form-group mb-1">
                        <input type="password" name="password" id="password" placeholder="Password" class="form-control">
                    </div>
                    <div class="mb-3">
                        <a href="<?php echo base_url() ?>" class="text-danger">Forgot password?</a>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-dark text-white">Sign in</button>
                    </div>
                    <div class="text-center text-black-50">
                        Don't have an account? <a href="<?php echo base_url('signup') ?>" class="text-danger">Sign up</a>
                    </div>
                </form>

            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>