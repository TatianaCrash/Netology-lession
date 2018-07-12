<?php

//задаем основной массив
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
		"Orcinus orca"
	]
);
//выводим массив
foreach ($Animals as $continent => $dwellers) {
	echo '<b>' . $continent, '<b></br>';
	foreach ($dwellers as $dweller) {
		echo $dweller, '<br>';
	}
}
 /*//задаем массив, где названия животных состоят из 2х слов
 $TwoWordNames = array();

 //находим названия животных, которые состоят из 2х слов и складываес в $TwoWordNames
foreach ($Animals as $continent => $dwellers) {
	foreach ($dwellers as $dweller) {
		if (strpos($dweller, ' ') !== false) { //проверяем наличие пробела между словами
			array_push($TwoWordNames, $dweller); //складываем названия с пробелом в массив $TwoWordNames
		}
	}
}
//задаем массив, с названиями из перемешанных слов
 $MixedWordsNames = array();
 
 echo $FirstWords = $SecondWords = [];

 foreach ($TwoWordNames as $key => $value) {
	list($FirstWord[], $SecondWord[]) = explode(' ', $value);
 }

 //перемешиваем первые слова названий
 shuffle($FirstWord);

 foreach ($FirstWords as $key => $FirstWord) {
	 	echo "{$FirstWord} {[$key]}" . PHP_EOL;

/задаем массив, с названиями из перемешанных слов
 $MixedWordsNames = array();
 
 $FirstWords = $SecondWords = [];

 foreach ($TwoWordNames as $value) {
	list($FirstWord[], $SecondWord[]) = explode(' ', $value);
 }

 //перемешиваем первые слова названий
 shuffle($FirstWord);

 foreach ($FirstWords as  $FirstWord) {
	 	echo "{$FirstWord} {$SecondWords}" . '<br>;

*/
?>   