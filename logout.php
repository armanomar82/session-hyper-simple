<?php

session_start(); // on doit toujours lancer session_start(), même si c'est pour fermer la session juste après
session_destroy(); // voilà, la session est fermée

echo "<p>Je viens de fermer la session</p>";
echo "<p>Vous pouvez tenter de retourner sur votre <a href='admin.php'>admin.php</a> ou alors retourner sur le <a href='login.html'>login.html</a></p>";

?>