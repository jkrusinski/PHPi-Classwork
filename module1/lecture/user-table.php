<?php

$users = [
    array(
        'id' => 1,
        'name' => 'Jerry Krusinski Jr',
        'age' => 23,
        'location' => 'Austin, TX'
    ),
    array(
        'id' => 2,
        'name' => 'Leah Krusinski',
        'age' => 21,
        'location' => 'Chicago, IL'
    ),
    array(
        'id' => 3,
        'name' => 'Sharon Krusinski',
        'age' => 51,
        'location' => 'Saint Charles, IL'
    ),
    array(
        'id' => 4,
        'name' => 'Jerry Krusinski Sr',
        'age' => 54,
        'location' => 'Saint Charles, IL'
    )
];

?>

<html>
<head>
    <title>The Krusinski Family</title>
    <meta charset="utf-8"/>
</head>
<body>

<h1>The Krusinski Family</h1>

<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Location</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($users as $index => $user) {
        if($index % 2 == 0) {
            echo '<tr>';
        } else {
            echo '<tr style="background-color: grey">';
        }

        echo "<td>$user[name]</td>";
        echo "<td>$user[age]</td>";
        echo "<td>$user[location]</td>";
        echo '</tr>';
    }
    ?>
    </tbody>
</table>

</body>
</html>