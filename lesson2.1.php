<?php

	$jsonData = file_get_contents('lesson2.1.json');
	$data = json_decode($jsonData);
	echo &$data
?>

<!DOCTYPE html>
<html lang="ru">

<head>
	<title>Домашнее задание 2.1</title>
	<meta charset="UTF-8">
</head>
<body>
<h3>Телефонный справочник</h3>
	<table>
		<thead>
			<tr>
				<td>Имя</td>
				<td>Фамилия</td>
				<td>Адрес</td>
				<td>Телефон</td>
			</tr>
		</thead>
		<tboby>
		<?php
        foreach ($data as $card) {
            ?>
			<tr>
				<td><?php echo $card['firstName'] ?></td>
				<td><?php echo $card['lastName'] ?></td>
				<td><?php echo $card['address'] ?></td>
				<td><?php echo $card['phoneNumber'] ?></td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
</body>
</html>
