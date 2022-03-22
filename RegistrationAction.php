<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Validation</title>
</head>

<body>
    <h1>Php Validation</h1>

    <?php
    function isUsernameOK($username)
    {
        $isValid = strlen($username) > 1 && strlen($username) < 5;
        if (!$isValid)
            echo "Invalid username. <br/>";

        return $isValid;
    }

    function isPasswordOK($password, $cpassword)
    {
        $isValid = !empty($password) && $password == $cpassword;
        if (!$isValid)
            echo "Password Didn't Matched <br/>";

        return $isValid;
    }

    if (
        empty($_POST['fname']) or empty($_POST['lname']) or empty($_POST['gender']) or empty($_POST['dob']) or empty($_POST['religion']) or empty($_POST['pre-address']) or empty($_POST['per-address']) or empty($_POST['phone']) or empty($_POST['email']) or empty($_POST['website'])
        or !isUsernameOK($_POST['username'])
        or !isPasswordOK($_POST['password'], $_POST['cpassword'])
    ) {
        echo "Please fill up the form properly.";
    } else {
        echo "Thank you for submitting the form.";
    }
    ?>
</body>

</html>