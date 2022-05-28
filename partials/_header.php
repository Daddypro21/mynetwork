<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>

        <?=
        isset($title) ? $title . '-' . WEBSITE_NAME : WEBSITE_NAME . ' Network,Rapide,Simple,Efficace';

        ?>

    </title>
    <meta name="description" content="Reseau Social pour developpeur">
    <meta name="author" content="Daddypro21">
    <!-- STYLESHEET-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="asset/css/main.css">

</head>


<body>

    <?php include('partials/_nav.php'); ?>
    <?php include('partials/_flash.php'); ?>