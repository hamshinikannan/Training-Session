<?php
setcookie("CookieName", "CookieValue");/* defining name and value only*/  
setcookie("CookieName", "CookieValue", time()+1*60*60);//using expiry in 1 hour(1*60*60 seconds or 3600 seconds)  
setcookie("CookieName", "CookieValue", time()+1*60*60, "/mypath/", "mydomain.com", 1);
 ?>

<?php  
setcookie("user", "Sonoo");  
?>  
<html>  
<body>  
<?php  
if(!isset($_COOKIE["user"])) {  
    echo "Sorry, cookie is not found!";  
} else {  
    echo "<br/>Cookie Value: " . $_COOKIE["user"];  
}  
?>  
</body>  
</html>  