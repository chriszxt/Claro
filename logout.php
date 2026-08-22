<?php

session_start();

session_destroy();

header("Location: login.php");

exit;
?>
<a href="perfil.php">
    <i class="fa-regular fa-user"></i> Perfil
</a>

<a href="logout.php">
    <i class="fa-solid fa-right-from-bracket"></i> Logout
</a>