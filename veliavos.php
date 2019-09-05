
<?php 
$color1 = rand(0, 255) . ', ' . rand(0, 255). ', ' . rand(0, 255);
$color2 = rand(0, 255) . ', ' . rand(0, 255). ', ' . rand(0, 255);
$color3 = rand(0, 255) . ', ' . rand(0, 255). ', ' . rand(0, 255);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vėliavos</title>
    <style> 

    .flag {
    display: block;
    width: 500px;
    height: 200px;
    }

    </style>
    
</head>
<body>
    <section>
        <div class="flag" style="background-color: rgb(<?php print $color1; ?>)"></div>
        <div class="flag" style="background-color: rgb(<?php print $color2; ?>)"></div>
        <div class="flag" style="background-color: rgb(<?php print $color3; ?>)"></div>
</section>
</body>
</html>