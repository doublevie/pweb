<?php
unset($_COOKIE['UID']);
unset($_COOKIE['UEMAIL']);
setcookie("UID", "", time()-3600);
setcookie("UEMAIL", "", time()-3600);


header('Location: ./');

 ?>
