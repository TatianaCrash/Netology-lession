<?php

/*//задаем основной массив
$Animals = array (
	"Europe" => [
		"Lepus europaeus",
		"Lynx"
	],
	"Asia" => [
		"Ailuropoda melanoleuca",
		"Herpestes"
	],
	"Africa" => [
		"Gorilla",
		"Hippopotamus amphibius"
	],
	"North America" => [
		"Bison",
		"Puma concolor"
	],
	"South America" => [
		"Panthera onca",
		"Lama guanicoe"
	],
	"Australia" => [
		"Ornithorhynchus anatinus",
		"rocodylus porosus"
	],
	"Antarctica" => [
		"Aptenodytes patagonicus",
		"Orcinus orca",
	]
);
 //задаем массив, где названия животных состоят из 2х слов
 $TwoWordNames = array();

 //находим названия животных, которые состоят из 2х слов и складываес в $TwoWordNames
foreach ($Animals as $continent => $dwellers) {
	foreach ($dwellers as $dweller) {
		if (strpos($dweller, ' ') !== false) { //проверяем наличие пробела между словами
			array_push($TwoWordNames, $dweller); //складываем названия с пробелом в массив $TwoWordNames
		}
	}
}
 //задаем массив, с названиями из перемешанныз слов
 $MixedWordsNames = array();
 
 $FirstWord = $SecondWord = [];

 foreach ($MixedWordsNames as $key => $value) {
 	# code...
 }*/


    $TwoWordNames = ['Lepus europaeus', 'Alces alces', 'Ailuropoda melanoleuca', 'Hippopotamus amphibius', 'Puma concolor', 'Lama guanicoe', 'Crocodylus porosus', 'Aptenodytes patagonicus', 'Orcinus orca'];
    
    $FirstWords = $SecondWords = [];
    
    foreach($TwoWordNames as $value)
        list($FirstWords[], $SecondWords[]) = explode(' ', $value);
    
    shuffle($FirstWords);

    echo '<br><b>Массив придуманных животных:</b><br>';
    
    foreach($FirstWords as $key=>$FirstWord)
        echo "{$FirstWord} {$SecondWords[$key]}" . PHP_EOL;




    /*$TwoWordNames = ['Lepus europaeus', 'Alces alces', 'Ailuropoda melanoleuca', 'Hippopotamus amphibius', 'Puma concolor', 'Lama guanicoe', 'Crocodylus porosus', 'Aptenodytes patagonicus', 'Orcinus orca'];

/*$MixedWordsNames = array();
 
$FirstWords = $SecondWords = [];

foreach ($TwoWordNames as $value) {
	list($FirstWord[], $SecondWord[]) = explode(' ', $value);

shuffle($FirstWords);

foreach ($FirstWords as $key=>$FirstWord) 
	 	echo "{$FirstWord} {$SecondWords}" . PHP_EOL;**/




?>   