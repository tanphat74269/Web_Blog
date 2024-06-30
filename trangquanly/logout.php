<?php
setcookie('login', 'true', time()-7*24*60*60, '/');
header('Location: login.php');