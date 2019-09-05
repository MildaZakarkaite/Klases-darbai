<?php
$text = 'Slėpkis sliekų pavėsy ir jei nori nieko nedaryk brukne raudona, kad tave žaliom rūtom pavasarį užželtu.';
$find = [
    'Slėpkis sliekų pavėsy',
    'brukne raudona',
    'kad tave žaliom rūtom pavasarį užželtu',
        ];
$replace = '...';

print (str_replace($find,$replace,$text));





?>