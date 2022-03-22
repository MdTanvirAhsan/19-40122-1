<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Verification</title>
</head>

<body>
    <h1>Login Verification</h1>

    <?php
    define("FILENAME", "users.json");
    $file1 = fopen(FILENAME, "r");

    $fr = fread($file1, filesize(FILENAME));
    $json = json_decode($fr);

    fclose($file1);
    if ("Raofin" == $_POST['username']) {
        echo "\n\nvalid\n\n";
    }
    if ($json['Username'] == $_POST['username'] && $json["Password"] == $_POST['password']) {
        echo "Login successfull!";
    } else echo "Invalid username of password. Please try again."
    ?>
</body>

</html>