<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
</head>

<body>
    <h2>Latihan 2</h2>
    Hasil penjumlahan bilangan genap dari 0 sd 6 adalah
    <?php
    $num = 0;
    $i = 0;

    while ($i <= 6) {
        $num += $i;
        $i += 2;
    }

    echo $num;
    ?>
</body>

</html>