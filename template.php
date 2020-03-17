<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Статистика</title>
</head>
<body>

    <?php
        if (file_exists('./good.txt')) {
            $a = intval(trim(file_get_contents('./good.txt')));
        }
        else    {
            $a = 0;
        }
    ?>

    <?php
        if (file_exists('./medium.txt')) {
            $b = intval(trim(file_get_contents('./medium.txt')));
        }
        else    {
            $b = 0;
        }
    ?>

    <?php
        if (file_exists('./bad.txt')) {
            $c = intval(trim(file_get_contents('./bad.txt')));
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