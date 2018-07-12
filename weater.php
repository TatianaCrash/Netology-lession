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

 $TwoWordNames = array();

foreach ($fauna as $continent => $animals) {
    foreach ($animals as $animal) {
        if (str_word_count($animal)==2) { //проверяем, что в значении 2 слова
            $TwoWordNames[$continent] = $animal; //складываем названия с пробелом в массив $TwoWordNames
        }
    }
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