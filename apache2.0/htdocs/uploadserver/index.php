<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>File Uplaod</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form action="./uploading.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file[]" multiple>
        <button name="submit">Upload</button>
    </form>
</body>
</html>