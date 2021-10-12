<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup | TodoApp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <div class="container mt-5 col-5 card card-body">
        <div class="row justify-content-md-center">
            <div>
                <h2>Create a account</h2>

                <?php if(isset($validation)):?>
                    <div class="alert alert-warning">
                        <?= $validation->listErrors() ?>
                    </div>
                <?php endif;?>

                <form action="<?php echo base_url(); ?>/SignupController/store" method="post">
                    <div class="form-group mb-3">
                        <input type="text" name="name" id="name" placeholder="Name" class="form-control" value="<?= set_value('name') ?>">
                    </div>
                    <div class="form-group mb-3">
                        <input type="email" name="email" id="email" placeholder="Email" class="form-control" value="<?= set_value('email') ?>">
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" name="password" id="password" placeholder="Password" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" name="confirmpassword" id="confirmPassword" placeholder="Confirm Password" class="form-control">
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-dark">Sign up</button>
                    </div>
                    <div class="text-center text-black-50">
                        Already have an account? <a href="<?php echo base_url('/') ?>" class="text-danger">Signin</a>
                    </div>
                </form>

            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>