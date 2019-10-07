<?php
$judul = "Color Vocabularies";
$warna = ["magenta", "indigo", "pine", "turqouise", "onyx", "moss", "ivory", "tangerine", "cantaloupe"] ;
echo $judul;
echo "<br>";
echo "<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WARNA WARNI</title>
</head>
<body>
    <style> 
        div {
            width: 100px;
            height: 100px;
            background-color: coral ;
            text-align: center;
            line-height: 100px;
            margin: 3px;
            float: left;
        }
    </style>
</head>
<body>
    <?php 
    for($i = 0; $i < count($warna); $i++) : 
    ?>
    <div><?= $warna[$i]; ?></div>

<?php endfor; ?>
    
</body>
</html>