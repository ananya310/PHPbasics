<?php

/* 
 * PHP session.
 */

session_start();


if ( !isset($_SESSION['user']) )
    $_SESSION['user'] = false;

//check if cookie exist
if ( isset($_COOKIE['test_login']) && !empty($_COOKIE['test_login']) ) {
    $_SESSION['user'] = $_COOKIE['test_login'];
}
else $_SESSION['user'] = false;

//logout action
if ( isset($_GET['action']) && $_GET['action'] == 'logout' ) {
    setcookie('test_login', null, 3600-time(), '/');
    $_SESSION['user'] = false;
}


if ( isset($_POST['login']) ) {
    
    if ( !empty($_POST['username']) ) {
        
        $_SESSION['user'] = trim($_POST['username']);
    
        if ( isset($_POST['remember']) ) {

            //set cookie
            setcookie('test_login', $_SESSION['user'], 30+time(), '/');

        }
        
    }
    
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <title>PHP Form validation</title>
    <meta charset="utf-8" />
</head>
<body>
    
    <?php if (!$_SESSION['user']) : ?>
    <form method="post" action="">
        <p>
        <label for="username">Username :</label><br/>
        <input type="text" id="username" name="username" />
        </p>
        <p>
        <label for="remember"> Remember me </label>
        <input type="checkbox" id="remember" name="remember" />
        </p>
        <input type="submit" name="login" value="Log In" />
    </form>
    
    <?php else: ?>
    <p style="padding: 1em; border: 2px solid #0088FF;">
        <a href="http://localhost/arindam-php/session_cookie.php?action=logout" style="border: 1px solid black; padding: 1em 1em; text-decoration: none; font-size:14px; background-color: #AAAAAA;">
            <?= ucwords($_SESSION['user']) ?>&ndash;Logout
        </a>
    </p>
    <?php endif; ?>
    
    
</body>
</html>



