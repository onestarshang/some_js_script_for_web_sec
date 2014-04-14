<?php
setcookie("test", 1, time()+3600, "", "", 0);
setcookie("test_httponly", 1, time()+3600, "", "", 0, 1);
?>