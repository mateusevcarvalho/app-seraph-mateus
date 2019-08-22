<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Logiin - Gestão de Colaboradores</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://<?= $_SERVER['SERVER_NAME'] . BASEPATH ?>/public/plugins/toastr/toastr.css">
    <link rel="stylesheet"
          href="http://<?= $_SERVER['SERVER_NAME'] . BASEPATH ?>/public/plugins/icofont/icofont.min.css">
    <link rel="stylesheet"
          href="http://<?= $_SERVER['SERVER_NAME'] . BASEPATH ?>/public/plugins/jQuery-tagEditor-master/jquery.tag-editor.css">

    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
        }

        .form-signin .checkbox {
            font-weight: 400;
        }

        .form-signin .form-control {
            position: relative;
            box-sizing: border-box;
            height: auto;
            padding: 10px;
            font-size: 16px;
        }

        .form-signin .form-control:focus {
            z-index: 2;
        }

        .form-signin input {
            margin-bottom: 10px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>

</head>
<body class="text-center">

<?php $this->content(); ?>

<input type="hidden" name="baseUrl" value="<?= BASEPATH ?>"/>

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
