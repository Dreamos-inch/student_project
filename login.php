
    <?php

    
    print_r($_COOKIE);

    if(isset($_COOKIE['LOGIN'])){
        $session_value = [
            'name'=>$_POST['name'],
            'email'=>$_POST['contact']
            ];

            $_SESSION['Session_login'] = $session_value;

            echo  'success';
            setcookie('Session_login',   $_POST['name'], time() + (60 * 60*24),'/');
    }
    
    ?>
