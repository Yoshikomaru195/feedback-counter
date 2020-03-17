<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Отзыв</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/normalize.css">
</head>

<body>

    <?php
        $dir = date("j.n.Y");
        $template = file_get_contents('template.php');
        if (file_exists($dir)) {
            if ($dh = opendir($dir)) {
                if( file_exists($dir.'/good.txt') )   {
                    $a = intval(trim(file_get_contents($dir.'/good.txt')));
                }
                else    {
                    $a = 0;
                }
                if( isset($_POST['button_good']) AND $_POST['button_good'] )    {
                    $a++;
                    $fh = fopen($dir.'/good.txt', 'w+');
                    fwrite($fh, $a);
                    fclose($fh);
                    echo '<script> location.href= "/thx.html";</script>';
                }
                closedir($dh);
            }
        }
        else {
            mkdir($_SERVER["DOCUMENT_ROOT"]."/".$dir."/");
            $fp = fopen($dir.'/index.php', "w");
            fwrite($fp, $template);
            fclose($fp);
        }
    ?>

    <?php
        $dir = date("j.n.Y");
        if (file_exists($dir)) {
            if ($dh = opendir($dir)) {
                if( file_exists($dir.'/medium.txt') )   {
                    $b = intval(trim(file_get_contents($dir.'/medium.txt')));
                }
                else    {
                    $b = 0;
                }
                if( isset($_POST['button_medium']) AND $_POST['button_medium'] )    {
                    $b++;
                    $fh = fopen($dir.'/medium.txt', 'w+');
                    fwrite($fh, $b);
                    fclose($fh);
                    echo '<script> location.href= "/thx.html";</script>';
                }
                closedir($dh);
            }
        }
        else {
            mkdir($_SERVER["DOCUMENT_ROOT"]."/".$dir."/");
        }
    ?>

    <?php
        $dir = date("j.n.Y");
        if (file_exists($dir)) {
            if ($dh = opendir($dir)) {
                if( file_exists($dir.'/bad.txt') )   {
                    $c = intval(trim(file_get_contents($dir.'/bad.txt')));
                }
                else    {
                    $c = 0;
                }
                if( isset($_POST['button_bad']) AND $_POST['button_bad'] )    {
                    $c++;
                    $fh = fopen($dir.'/bad.txt', 'w+');
                    fwrite($fh, $c);
                    fclose($fh);
                    echo '<script> location.href= "/thx.html";</script>';
                }
                closedir($dh);
            }
        }
        else {
            mkdir($_SERVER["DOCUMENT_ROOT"]."/".$dir."/");
        }
    ?>

    <div class="container">

    <div class="vote-button">

        <div class="vote-button__item">
            <form action="<?php print $_SERVER['PHP_SELF'];?>" method="POST">
                <input type="hidden" name="button_good" value="1" />
                <input class="button vote-button__good" type="submit" name="submit" value="Хорошо">
            </form>
        </div>

        <div class="vote-button__item">
            <form action="<?php print $_SERVER['PHP_SELF'];?>" method="POST">
                <input type="hidden" name="button_medium" value="1" />
                <input class="button vote-button__medium" onclick="qwe()" type="submit" name="submit" value="Нейтрально" />
            </form>
        </div>

        <div class="vote-button__item">
            <form action="<?php print $_SERVER['PHP_SELF'];?>" method="POST">
                <input type="hidden" name="button_bad" value="1" />
                <input class="button vote-button__bad" onclick="qwe()" type="submit" name="submit" value="Плохо" />
            </form>
        </div>

    </div>

    </div>

</body>

</html>