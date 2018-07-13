<?php
	$file = file_get_contents('lesson2.1.json');
	$data = json_decode($file, true);

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
			<?php foreach ($data as $item) :?>
			<tr>
				<td><?php echo $item['firstName'] ?></td>
				<td><?php echo $item['lastName'] ?></td>
				<td><?php echo $item['address'] ?></td>
				<td><?php echo $item['phoneNumber'] ?></td>
			</tr>
		<?php endforeach;?>
		</tbody>
	</table>
</body>
</html>