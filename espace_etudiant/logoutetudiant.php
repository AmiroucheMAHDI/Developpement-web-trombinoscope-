<?php
setcookie("username", '', time() - 3600);
setcookie("password", '', time() - 3600);
setcookie("destination", '', time() - 3600);
setcookie("poste", '', time()-3600);
setcookie("numero", '', time()-3600);
header ('location: ./connexion_etudiant.php');
sleep(2);
?>
