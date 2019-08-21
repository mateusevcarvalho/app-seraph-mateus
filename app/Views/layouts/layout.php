<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestão de Colaboradores - Mateus Carvalho</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://<?= $_SERVER['SERVER_NAME'] . BASEPATH ?>/public/plugins/toastr/toastr.css">
    <link rel="stylesheet" href="http://<?= $_SERVER['SERVER_NAME'] . BASEPATH ?>/public/plugins/icofont/icofont.min.css">
</head>
<body class="d-flex flex-column h-100" style="background-color: #e3e3e3 !important;">

<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="<?= BASEPATH ?>">Gestão Colaboradores</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= BASEPATH ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= BASEPATH ?>/colaboradores">Colaboradores</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<!-- Begin page content -->
<div role="main" class="flex-shrink-0">
    <div class="container mt-4">
        <?php $this->content() ?>
    </div>
</div>

<footer class="footer mt-auto py-3">
    <div class="container">
        <span class="text-muted">Mateus Carvalho</span>
    </div>
</footer>

<input type="hidden" name="baseUrl" value="<?= BASEPATH ?>"/>

<script src="http://<?= $_SERVER['SERVER_NAME'] . BASEPATH ?>/public/js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script src="http://<?= $_SERVER['SERVER_NAME'] . BASEPATH ?>/public/js/jquery.form.min.js"></script>
<script src="http://<?= $_SERVER['SERVER_NAME'] . BASEPATH ?>/public/plugins/toastr/toastr.min.js"></script>
<script src="http://<?= $_SERVER['SERVER_NAME'] . BASEPATH ?>/public/js/scripts.js"></script>

<?php foreach ($layoutRender['scripts'] as $script) { ?>
    <script src="http://<?= $_SERVER['SERVER_NAME'] . BASEPATH ?>/public/js/<?= $script ?>.js"></script>
<?php } ?>

</body>
</html>
