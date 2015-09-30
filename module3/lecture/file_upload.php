<!DOCTYPE html>
<html>
<head>

</head>
<body>

<form action="<?php echo($_SERVER['PHP_SELF']); ?>"
      method="post"
      enctype="multipart/form-data">

    <input type="text" name="profilName"/> <br/>

    <input type="file" name="avatar"/> <br/><br/>

    <input type="submit" value="Upload Picture"/>

</form>

</body>
</html>

<?php

if (move_uploaded_file($_FILES['avatar']['tmp_name'], getcwd() . '/' . $_FILES['avatar']['name'])) {
    echo '<img src="' . $_FILES['avatar']['name'] . '" style="height: 500px; width: 500px;"/>';
} else {
    echo 'File has not moved';
}

echo '<pre>';
echo 'FILES: ';
print_r($_FILES);

echo '<br />';

echo 'POST: ';
print_r($_POST);
echo '</pre>';

