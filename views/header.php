<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/default.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600&display=swap"
          rel="stylesheet">
    <?php
    if (isset($this->js)) {
        foreach ($this->js as $js) {
            echo '<script src="' . URL . 'views/' . $js . '"></script>';
        }
    }
    ?>
</head>
<body>
<?php Session::init(); ?>

