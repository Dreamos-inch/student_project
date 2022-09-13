<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>

<body>

    <?php
    if (isset($_COOKIE['Login-cookie'])) {
        echo 'Welcome back ' . $_COOKIE['Login-cookie']; //this will return the cookie value 
    } else {
        session_name('Login');
        session_start();
    ?>
        <form action='login_request.php' method="POST">
            <label>Name</label>
            <input type='text' name='name' />
            <label>Email</label>
            <input type='text' name='email' />
            <label>Password</label>
            <input type='text' name='pass' />
            <input type='submit' value='Submit' />
        </form>
    <?php
    }
    ?>



</body>

</html>