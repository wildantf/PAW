<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    table,
    tr,
    td {
        border: 1px solid black;
    }

    table {
        margin: auto;
        table-layout: fixed;
        width: 360px;
        height: 360px;
    }

    body {
        text-align: center;
    }
</style>

<body>
    <table>
        <thead>
            <h2>Tabel Perkalian 12x12</h2>
        </thead>
        <?php for ($i = 1; $i <= 12; $i++) : ?>
        <tr>
            <?php
                $color = 'white';
                for ($j = 1; $j <= 12; $j++) :
                    if ($i == $j || $i == 1 || $j == 1) {
                        $color = 'yellow';
                    } else {
                        $color = 'white';
                    } ?>
            <td style="background-color:<?= $color; ?>;"><?= $i * $j ?></td>
            <?php endfor; ?>
        </tr>
        <?php endfor; ?>

    </table>

</body>

</html>