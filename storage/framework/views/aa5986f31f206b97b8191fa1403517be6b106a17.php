<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Empresas</title>

    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url(mix('site/css/style.css'))); ?>">
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="<?php echo e(url('/empresas')); ?>">Lara<b><i>Work</i></b></a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="<?php echo e(url('/empresas')); ?>" class="nav-link">Empresas</a>
            </li>
            <li class="nav-item">
                <a href="<?php echo e(url('/colaboradores')); ?>" class="nav-link">Colaboradores</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container my-4">

    <?php echo $__env->yieldContent('content'); ?>

</div>

<script src="<?php echo e(asset('js/app.js')); ?>"></script>
<script src="<?php echo e(url(mix('site/js/script.js'))); ?>"></script>

</body>
</html>
