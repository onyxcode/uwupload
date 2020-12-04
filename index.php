<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>UWUpload</title>

    <link rel="stylesheet" href="backend/style.css">
    <link rel="shortcut icon" href="backend/favicon.png"

</head>

<body>
<img src="backend/logo.png" style="text-align: center;">
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="files[]" id="file" class="--hide">
        <label for="file">&nbsp;Select a file&nbsp;</label>
        <br>
        <br>
        <input type="submit" value="Upload" name="submit">
    </form>
  
	<script src="backend/upload.js"></script>
</body>

</html>