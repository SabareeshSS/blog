<?php
    require __DIR__.'/../../vendor/translationexchange/tml/src/init.php';
    tml_init("f591aef68a4a4b5f8803e3b11b1c76d81df3ce05fce0886710b6c96996a2a4fa", array(
        "cache" => array(
            "enabled"   => true,
            "adapter"   => "memcache",
            "host"      => "localhost",
            "port"      => 11211
        )
    ));
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Welp</title>

    <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="chrome=1">

    <link rel="stylesheet" href="/assets/stylesheets/master.css">

    <?php tml_scripts() ?>
</head>
<body>

<?php include('_navigation.php') ?>
