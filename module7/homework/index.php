<?php
include_once('vendor/autoload.php');
include_once('NetflixSearch.php');

try {

    if(isset($_POST['submit'])) {


    }
    $query = new NetflixSearch();

    $query->setDirector('Quentin Tarantino');
    $query->setTitle('Kill Bill: Vol. 2');

    echo '<pre>';
    $body = $query->searchNetflix();
    print_r($body);

} catch (Exception $e) {

    echo $e->getMessage();

}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Netflix Search</title>
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">

    <label>Title: <input type="text" name="title"/></label><br/>
    <label>Actor: <input type="text" name="actor"></label><br/>
    <label>Year: <input type="text" name="year"></label><br/>
    <label>Director: <input type="text" name="director"></label><br/>

    <input type="submit" name="submit" value="Submit">


</form>

</body>
</html>


