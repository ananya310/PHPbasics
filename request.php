<?php

/* 
 * PHP request.
 */
    
    $result['username'] = false;
    
    if ( isset($_REQUEST['username']) && !empty($_REQUEST['username']) ) {
        $result['username'] = trim($_REQUEST['username']);
    }

?>
<html>
<head>
    <title>PHP request</title>
</head>
<body>
    
    <form method="post" action="">
        
        <p>
            <label for="username">Enter username: </label><br />
            <input type="text" name="username" id="username" />
        </p>
        
        <input type="submit" name="submit" value="Submit" />
        
    </form>
    
    
    <?php if ($result['username']) : ?>
    <p style="padding: 1em; border: 2px solid green">
        Name: <?= $result['username'] ?>
    </p>
    <?php endif; ?>
    
</body>
</html>
