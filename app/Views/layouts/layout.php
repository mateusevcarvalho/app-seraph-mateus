<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestão de Colaboradores - Mateus Carvalho</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://<?= $_SERVER['SERVER_NAME'] . BASEPATH ?>/public/plugins/toastr/toastr.css">
    <link rel="stylesheet"
          href="http://<?= $_SERVER['SERVER_NAME'] . BASEPATH ?>/public/plugins/icofont/icofont.min.css">
    <link rel="stylesheet"
          href="http://<?= $_SERVER['SERVER_NAME'] . BASEPATH ?>/public/plugins/jQuery-tagEditor-master/jquery.tag-editor.css">
</head>
<body class="d-flex flex-column h-100" style="background-color: #e3e3e3 !important;">

<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="<?= BASEPATH ? BASEPATH : '/' ?>">Gestão Colaboradores</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= BASEPATH ? BASEPATH : '/' ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= BASEPATH ?>/colaboradores">Colaboradores</a>
                </li>
            </ul>
            <span class="navbar-text"><?= $_SESSION['login'] ?></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="<?= BASEPATH ?>/conta/logout">Logout</a>
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



<div class="modal fade bd-example-modal-sm" id="modal-load" tabindex="-1" role="dialog"
     aria-labelledby="mySmallModalLabel" data-backdrop="static" aria-hidden="true"
     style="background-color: rgba(255, 255, 255, 0.7) !important;">
    <div class="modal-dialog modal-dialog-centered" style="width: 256px !important;">
        <div class="modal-content" style="background-color: transparent !important;">
            <div class="modal-body" style="padding: 0 !important;">
                <img src="<?= BASEPATH ?>/public/img/Eclipse-1s-200px.gif"/>
            </div>
        </div>
    </div>
</div>

<script src="http://<?= $_SERVER['SERVER_NAME'] . BASEPATH ?>/public/js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script src="http://<?= $_SERVER['SERVER_NAME'] . BASEPATH ?>/public/js/jquery.form.min.js"></script>
<script src="http://<?= $_SERVER['SERVER_NAME'] . BASEPATH ?>/public/plugins/toastr/toastr.min.js"></script>
<script src="http://<?= $_SERVER['SERVER_NAME'] . BASEPATH ?>/public/plugins/jQuery-tagEditor-master/jquery.caret.min.js"></script>
<script src="http://<?= $_SERVER['SERVER_NAME'] . BASEPATH ?>/public/plugins/jQuery-tagEditor-master/jquery.tag-editor.js"></script>
<script src="http://<?= $_SERVER['SERVER_NAME'] . BASEPATH ?>/public/js/scripts.js"></script>

<?php foreach ($layoutRender['scripts'] as $script) { ?>
    <script src="http://<?= $_SERVER['SERVER_NAME'] . BASEPATH ?>/public/js/<?= $script ?>.js"></script>
<?php } ?>

</body>
</html>
