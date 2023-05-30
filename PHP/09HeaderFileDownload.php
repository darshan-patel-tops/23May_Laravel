<?php

if (isset($_REQUEST['Download'])) {
    # code...
    $file_name = "downloadfile.zip";
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . $file_name . '"');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file_name)); //Absolute URL
    ob_clean();
    flush();
    readfile($file_name); //Absolute URL
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <input type="submit" value="Download" name="Download" id="Download">
    </form>
</body>

</html>