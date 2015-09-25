<html>
<head>

</head>
<body>

<?php
$favoritePet = isset($_POST['favoritePet']) ? $_POST['favoritePet'] : null;
?>

<form name="collectDataForm" action="ajax_example.php" method="post">

    <input type="text" name="favoritePet" size="20" value="<?php echo $favoritePet; ?>" />
    <input type="submit" value="Do work!" />

</form>

<?php

$classMates = ['alex', 'jerry', 'simon', 'samir', 'brian', 'traci', 'jared'];

$len = count($classMates) - 1;

$ranNum = rand(0, $len);

echo "<p>$classMates[$ranNum] $favoritePet</p>";

?>

</body>
</html>
