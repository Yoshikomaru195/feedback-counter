<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Статистика</title>
</head>
<body>

    <?php
        $dir = date("j.n.Y");
        if( file_exists($dir.'/good.txt') )   {
            $a = intval(trim(file_get_contents($dir.'/good.txt')));
        }
        else    {
            $a = 0;
        }
    ?>

    <?php
        $dir = date("j.n.Y");
        if( file_exists($dir.'/medium.txt') )   {
            $b = intval(trim(file_get_contents($dir.'/medium.txt')));
        }
        else    {
            $b = 0;
        }
    ?>

    <?php
        $dir = date("j.n.Y");
        if( file_exists($dir.'/bad.txt') )   {
            $c = intval(trim(file_get_contents($dir.'/bad.txt')));
        }
        else    {
            $c = 0;
        }
    ?>

    <div id="writecounter"><span class="title">Кол-во хороших отзывов: </span><?php print $a;?></div>
    <div id="writecounter"><span class="title">Кол-во нейтральных отзывов: </span><?php print $b;?></div>
    <div id="writecounter"><span class="title">Кол-во плохих отзывов: </span><?php print $c;?></div>

</body>
</html>