<?php

#ARRAYS MAKEN, WAARDES TOEVOEGEN, WAARDES VERWIJDEREN

$capitals = array('CA' => 'Sacramento', 'TX' => 'Austin', 'OR' => 'Salem');

echo '<pre>';
var_dump($capitals);
#var_dump doet hetzelfde als print_r

print_r($capitals);
echo '</pre>';

#opdracht
#methode 1
$klas[0] = 'Dimphy';
$klas[1] = 'Vincent';
$klas[2] = 'Luc';
$klas[3] = 'Mathias';
$klas[4] = 'Laurent';
$klas[5] = 'Tim';
$klas[6] = 'Dorien';
#methode 2
$mijnKlas[] = 'Dimphy';
$mijnKlas[] = 'Vincent';
$mijnKlas[] = 'Luc';
$mijnKlas[] = 'Mathias';
$mijnKlas[] = 'Laurent';
$mijnKlas[] = 'Tim';
$mijnKlas[] = 'Dorien';
#methode 3
$mijnKorteKlas = array('Dimphy','Vincent','Luc','Mathias','Laurent','Tim','Dorien');

echo '<pre>';
print_r($klas);
echo '</pre>';

echo '<pre>';
print_r($mijnKlas);
echo '</pre>';

echo '<pre>';
print_r($mijnKorteKlas);
echo '</pre>';

echo 'Zonder html pre te gebruiken rond de print_r krijg je alles op 1 lijn zoals hieronder <br/>';
print_r($mijnKorteKlas);
echo '<br/>';


unset($klas[5]);
echo '<pre>';
print_r($klas);
echo '</pre>';
#key 5 komt vrij, maar de rest schuift niet op.

$klas[]='Fré';
echo '<pre>';
print_r($klas);
echo '</pre>';

#ARRAYS SORTEREN
sort($klas);
#sort sorteert de string alfabetisch
#let op! sort zet je keys om naar gewone indexnummers!!!
#je kan de waarden dus niet meer oproepen met een keywoord
echo '<pre>';
print_r($klas);
echo '</pre>';

asort($capitals);
#asort sorteert ook maar behoudt de keywoorden
echo '<pre>';
print_r($capitals);
echo '</pre>';

#WAARDEN UIT ARRAY HALEN
$shirtInfo = array('large','blue', 12.00);
echo '<pre>';
print_r($shirtInfo);
echo '</pre>';
asort($shirtInfo);
echo '<pre>';
print_r($shirtInfo);
echo '</pre>';
list($shirtSize, $shirtColor) = $shirtInfo;
echo $shirtSize,'<br/>';
echo $shirtColor,'<br/>';

$shirtInfo = array('size' => 'large', 'color' => 'blue', 'cost' => 12.00);
extract($shirtInfo);
echo 'Size is '. $size . ', color is ' .$color. ', cost is ' .$cost. '<br/>';

#FOREACH AND ARRAYS
$value = current($capitals);
echo $value.'<br/>';
$value = next($capitals);
echo $value.'<br/>';
reset($capitals);
$value = current($capitals);
echo $value.'<br/>';
$value = next($capitals);
echo $value.'<br/>';
$value = next($capitals);
echo $value.'<br/>';

#waarde 1, 3, 5, 7 weergeven
echo '<pre>';
print_r($klas);
echo '</pre>';
echo '<br/>DIT ZIJN LEERLING 1, 3, 5 en 7 <br/>';
$value = current($klas);
echo $value.'<br/>';
next($klas);
$value = next($klas);
echo $value.'<br/>';
next($klas);
$value = next($klas);
echo $value.'<br/>';
next($klas);
$value = next($klas);
echo $value.'<br/>';
#waarde 1, 3, 5, 7 weergeven
for ($i=0; $i<count($klas);$i += 2){
  echo 'In de klas zit ', $klas[$i],'.<br/>';
}

#foreach
echo '<br/>DIT IS MIJN NIEUW SHIRT<br/>';
foreach($shirtInfo as $specification => $valueSpecification){
  echo 'The ', $specification, ' is ', $valueSpecification,'.<br/>';
}
foreach($shirtInfo as $valueSpecification){
  echo 'My shirt is ', $valueSpecification,'.<br/>';
}



echo '<br/> SAMENSTELLING VAN MIJN KLAS <br/>';
foreach($klas as $name => $valueName){
  echo 'In onze klas zit ', $valueName, '. <br/>';
}


#MULTIDIMENSIONALE ARRAYS
# multidimensionale array syntra 3 klassen met 2 namen;

$syntra['klas1']['leerling1'] = 'Dimphy';
$syntra['klas1']['leerling2'] = 'Dorien';
$syntra['klas1']['leerling3'] = 'Fré';
$syntra['klas2']['leerling1'] = 'Mathias';
$syntra['klas2']['leerling2'] = 'Luc';
$syntra['klas3']['leerling1'] = 'Vincent';
$syntra['klas3']['leerling2'] = 'Tim';
$syntra['klas3']['leerling3'] = 'Laurent';


echo '<pre>';
print_r($syntra);
echo '</pre>';

$buurman1 = $syntra['klas2']['leerling1'];
$buurman2 = $syntra['klas1']['leerling3'];
echo $syntra['klas1']['leerling2'], ' zit naast ', $buurman1, ' en ', $buurman2, '. <br/>';
echo '<br/>';

foreach($syntra as $klas => $klasValue){
  #hieronder dus verdergaan met de value
  #met de => geef je aan dat er nog meer achter zit dan enkel een naam
  foreach ($klasValue as $leerling => $leerlingValue) {
    echo $leerlingValue, ' zit in ' , $klas, '. <br/>';
  }
}
echo '<br/>';

foreach($syntra as $klas){
  #je hoeft niet naar de waarde van klas te gaan want die gebruiken we toch niet
  foreach ($klas as $leerling => $leerlingValue) {
    echo $leerlingValue, ' zit in onze klas.<br/>';
  }
}
echo '<br/>';

#voorbeeld wiki
$productPrices['clothing']['shirt'] = 20.00;
$productPrices['clothing']['pants'] = 22.50;
$productPrices['linens']['blanket'] = 25.00;
$productPrices['linens']['bedspread'] = 50.00;
$productPrices['furniture']['lamp'] = 44.00;
$productPrices['furniture']['rug'] = 75.00;

echo '<table border=1>';
foreach($productPrices as $category){
  foreach($category as $product => $price){
    $f_price =sprintf('%01.2f', $price);
    echo '<tr><td>'.$product.'</td><td>\$'.$f_price.'</td></tr>';
    #met een backslash escape je en doet PHP niet wat die normaal wel doet
    #dollar teken kan je ook alsvolgt invoegen &#36;
  }
}
echo '</table>';
