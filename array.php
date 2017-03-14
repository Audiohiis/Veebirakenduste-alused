<?php

require 'function.php';
home();
echo "<br>";

$month = "veebruar";
$test = array('kolmapäev', 3.14, $month, 8, "Klass nr A210");

//annab muutuja kohta infot, mis tüüpi on ja mis seal sees on
//var_dump($test);

$test[] = "uus massiivi liige";
//var_dump($test);

//sidusmassiiv
$test_a = array('esimene' => 'Tauno',
            'teine' => 'Ragnar',
            'kolmas' => 'Kevin');

// massiivide lihtne väljatrükk
//print_r($test_a);

for ($i=0; $i < count($test); $i++){
    echo "<li>".$test[$i]."</li><br>";
}

foreach($test_a as $jrk => $name){
    echo "<li>".$name." on järjekorras ".$jrk."</li>";
}

$esta = "Eesti keel";
$mata = "Matemaatika";
$fyss = "Füüsika";

$hinded = array(
            "Peeter" => array($esta => 4, $mata => 4, $fyss => 3),
            "Mari" => array($esta => 5, $mata => 3, $fyss => 4),
            "Jüri" => array($esta => 3, $mata => 2, $fyss => 2)
            );
echo $hinded['Peeter'][$esta]."<br>";

//massiivi (kõige kõrgema) võtmed
print_r(array_keys($hinded));
echo "<br>";

// massiivi (kõige kõrgema) väärtused
print_r(array_values($hinded));

//nime id
$hinded_id = array_keys ($hinded);

for ($i=0; $i < count($hinded_id); $i++){
    echo $hinded_id[$i]."<br>";
    foreach($hinded[$hinded_id[$i]] as $aine => $hinne){
      echo $aine." : ".$hinne."<br>";
    }
}

    
?>