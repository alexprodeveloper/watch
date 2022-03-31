<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php foreach ($css as $css_file ) { ?>
        <link rel="stylesheet" href="../style/<?= $css_file; ?>">
    <?php } ?>
    <title><?= $title; ?></title>
</head>
<body>
<div class="wrap">
    <?= $header; ?>
    <?= $content; ?>
    <?= $footer; ?>
</div>
<?php foreach ($scripts as $script) { ?>
    <script src="../scripts/<?= $script; ?>"></script>
<?php } ?>
</body>
</html>