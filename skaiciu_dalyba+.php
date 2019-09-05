<?php
// jei dalinasi iš dviejų skaičiaus spalva raudona
// jei dalinasi iš penkių skaičiaus spalva žalia
// rand(0, 5) skaičius mes nuo nulio iki 5
$number = rand(0, 5);

// print $number;
$text = '';

if($number  % 2 == 0 && $number !== 0 ){
    $text = ' skaičius dalinasi iš dviejų be liekanos';
    $numb = 1;
}

if($number  % 5 == 0 && $number !== 0){
    $text = ' skaicius dalinasi is penkiu be liekanos';
    $numb = 2;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Skaičiu dalyba</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <h1 class="collor-<?php print $numb; ?>"><?php print $number . $text; ?></h1>
</body>
</html>