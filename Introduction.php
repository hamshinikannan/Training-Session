<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>
        <?php
            echo '<h1>Hello World</h1>'; //prints hello world in h1 
            //phpinfo();// gives the info about php
            echo $_SERVER['HTTP_USER_AGENT'];
        ?> 
        <p>Hello World</p>

        <?php
            if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
        ?>
        <h3>strpos() must have returned non-false</h3>
        <p>You are using Internet Explorer</p>
        <?php
            } else {
        ?>
        <h3>strpos() must have returned false</h3><!----logical flow of script remains unchanged-changing from php to html/vice-versa-->
        <p>You are not using Internet Explorer</p>
        <?php
            }
        ?>
    </body>
</html>
