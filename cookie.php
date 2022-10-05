
<?php

$cookie_cookie = "cookie";
$cookie_value = "agree";
setcookie($cookie_cookie, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>