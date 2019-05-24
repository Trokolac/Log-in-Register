<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login and Register</title>
    <link rel="stylesheet" href="./CSS/bootstrap.min.css" />
    <link rel="stylesheet" href="./CSS/login_register.css" />
</head>

<body>

<?php include './navbar.inc.php'; ?>

    <div class="container">
        <div class="row">
            <div class="col-md-8"></div>
            <div class="col-md-4">
                
                <?php require_once './Helper.class.php'; ?>

                <?php if(Helper::ifError()) { ?>
                <div class="alert alert-danger">
                    <strong>Error!</strong> <?php echo Helper::getError(); ?>
                </div>
                <?php } ?>

                <?php if(Helper::ifMessage()) { ?>
                <div class="alert alert-success">
                    <strong>Success!</strong> <?php echo Helper::getMessage(); ?>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>