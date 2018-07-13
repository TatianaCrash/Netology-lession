<?php

//задаем основной массив
$fauna = [
	'Europe' => ['Lepus europaeus', 'Lynx', 'Alces alces'],
	'Asia' => ['Ailuropoda melanoleuca', 'Herpestes'],
	'Africa' => ['Gorilla', 'Hippopotamus amphibius'],
	'North America' => ['Bison', 'Puma concolor'],
	'South America' => ['Cingulata', 'Lama guanicoe'],
	'Australia' => ['Vombatidae', 'Crocodylus porosus'],
	'Antarctica' => ['Aptenodytes patagonicus', 'Orcinus orca',]
];
//выводим массив
echo '<br><b>Основной массив:</b><br>';
foreach ($fauna as $continent => $animals) {
	echo '<b>' . $continent, '</b><br>';
	foreach ($animals as $animal) {
		echo '<i>' . $animal, '</i><br>';
	}
}


//задаем массив, где названия животных состоят из 2х слов
 $TwoWordNames = array();

 //находим названия животных, которые состоят из 2х слов и складываем в $TwoWordNames
foreach ($fauna as $continent => $animals) {
	foreach ($animals as $animal) {
		if (strpos($animal, ' ') !== false) { //проверяем наличие пробела между словами
			array_push($TwoWordNames, $animal); //складываем названия с пробелом в массив $TwoWordNames
		}
	}
}

//выводим $TwoWordNames
echo '<br><b>Массив животных из двух слов:</b><br>';
foreach ($TwoWordNames as $animal) {
	echo $animal, '<br>';
}

$FirstWords = $SecondWords = [];
    //находим пробел между первым и вторыми словами
    foreach($TwoWordNames as $value)
        list($FirstWords[], $SecondWords[]) = explode(' ', $value);
    //перемешиваем первые слова
    shuffle($FirstWords);

    echo '<br><b>Массив придуманных животных:</b><br>';
    //выводим перемешанные первые слова со вторыми словами
    foreach($FirstWords as $key=>$FirstWord)
        echo "{$FirstWord} {$SecondWords[$key]}, <br>" . PHP_EOL;

?>   