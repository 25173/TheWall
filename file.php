<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>image upload</title>
</head>
<body>

<form action="process.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="MAX_FILE_SIZE" value="2097152">
    <input type="file" name="userImage" />
    <input type="submit" name="submit" value="upload"/>
</form>
<br><br>
<a href="plaatjes.php">hier</a>
</body>
</html>