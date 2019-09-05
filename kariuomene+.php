<!-- Parasyti koda naudojant if ir elseif - Saukimas i kariuomene.
Turi buti aprasytos salygos: NEPILNAMETIS/PILNAMETIS, DIRBANTIS/NEDIRBANTIS/STUDIJUOJA.
Saukimo amzius 27 imtinai.
Ivedami duomenys: Vardas, Amzius, Statusas(studentas/dirbantis/nedirbantis)
<?php
if ($zmogus == ‘Vyras’){
//    do .....
}else{
//    print ....
}
?> -->

<?php
$zmogus ='vyras';
$vardas ='Vėjas';
$amzius = 23;
$statusas = 'studentas';

if($zmogus == 'vyras'){
    if ($amzius > 0 && $amzius < 18){
        print $vardas . 'yra nepilnametis';
    }elseif ($amzius >= 18 && $amzius <=27){
        print $vardas . ' esi šaukiamas į karuomene';
    }elseif ($amzius > 27 && $amzius <65){
        print $vardas . 'esi nešaukiamas į kariuomenę';
    }else{
        print $vardas . 'esi pensininkas';
    }
}else {
    print $vardas . 'nešaukiama';
}
    // print $vardas . 'yra nepilnametis';

?>