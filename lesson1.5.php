<?php
$city = 'Yekaterinburg';
$country="RU";
$mode = 'json';
$units = 'metric';
$lang = 'ru';
$appid = '0c491e33693d400368f32c123d52e66c';
$countDay = 1;
$url = "http://api.openweathermap.org/data/2.5/weather?q=Yekaterinburg&APPID=0c491e33693d400368f32c123d52e66c";


$data = file_get_contents($url) or exit('Не удалось получить данные');
function checkData ($data) {
    if (empty($data)) {
        return 'Не удалось получить данные';
    }
    return $data;
}

if(!empty($data)){
  $dataJson = json_decode($data) or exit('Ошибка декодирования json');
  $arrayDays = $dataJson;
    foreach($arrayDays as $key){

       $city = checkData ($dataJson->name);//название города
       $temperature = checkData ($dataJson->main->temp-273);//температура
       if ($temperature > 0) {
             $temperature = str_pad($temperature, strlen($temperature)+1, "+", STR_PAD_LEFT);
       }
       $pressure = checkData ($dataJson->main->pressure);//давление
       $humidity = checkData ($dataJson->main->humidity);//влажность
       $wind = checkData ($dataJson->wind->speed);//скорость ветра
    }
  }else{
      echo 'Сервер не доступен!';
  }
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <title>Домашнее задание 1.4</title>
</head>

<body>
  <h1>Домашнее задание 1.4</h1>
    <h2>Погода в <?=$city; ?> на сегодня:</h2>
    <p><b>Температура:</b> <?=$temperature; ?> °C </p>  
    <p><b>Скорость ветра:</b> <?=$wind; ?> м/с</p>
    <p><b>Давление:</b> <?=$pressure; ?> гПа</p>
    <p><b>Влажность:</b> <?=$humidity; ?> %</p>
</body>
</html>