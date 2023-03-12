<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login User</title>
    <link rel="stylesheet" href="css/login.css" type="text/css">
</head>

<body>
    <div class="background"></div>
    <div class='container'>
        <h1>Login Form</h1>
        <form class='container_form' action="profile.php" method="post">
            <select name="type" id="type">
                <option value="Admin">Admin</option>
                <option value="Cricketer">Cricketer</option>
                <option value="Empire">Empire</option>
                <option value="Organisation">Organisation</option>
            </select>
            <div class="label">Username : </div>
            <input type='text' name='username' placeholder='Username' class='container__inputField'><br><br>
            <div class="label">Password : </div>
            <input type='password' name='password' placeholder='Password' class='container__inputField'><br><br>
            <input type='submit' value='Login' class='container__sumbitButton' name="sub">
            <br>
            <?php
            if (isset($_REQUEST["err"])) {
                $msg = "Invalid username or Password";
            }
            ?>
            <p style="color:red;">
                <?php if (isset($msg)) {

                    echo $msg;
                }
                ?>

            </p>
            <div class='container__links'>
                <a href='#emptyLink' class='container__link'>Need Account?</a>
                <span class='container__separator'></span>
                <a href='#emptyLink' class='container__link'>Register</a>
            </div>
        </form>

    </div>
    </div>

</body>

</html>