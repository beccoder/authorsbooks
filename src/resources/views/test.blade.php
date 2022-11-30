<?php
	$employees = [
		[
			'name' => 'user1',
			'surname' => 'surname1',
			'banned' => true,
		],
		[
			'name' => 'user2',
			'surname' => 'surname2',
			'banned' => false,
		],
		[
			'name' => 'user3',
			'surname' => 'surname3',
			'banned' => true,
		],
		[
			'name' => 'user4',
			'surname' => 'surname4',
			'banned' => false,
		],
		[
			'name' => 'user5',
			'surname' => 'surname5',
			'banned' => false,
		],
	];

    $count = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
</head>
<body>
    <h1>This is test</h1>

    <table>
        <tr>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Зарплата</th>
        </tr>
        @foreach ($employees as $link)
        <tr>
            <td>{{ $count }}</td>
            <td>{{ $link['name'] }}</td>
            <td>{{ $link['surname'] }}</td>
            @if ($link['banned'] == true)
                <td>banned</td>
            @else
                <td>not banned</td>
            @endif

            <?php $count++ ?>
        </tr>
            @endforeach
    </table>
</body>
</html>
