<?php

  // pour qu'un utilisateur ait le droit de voir cette page
  // 1. il doit avoir créé une session 
  // 2. cette session doit contenir $_SESSION["valide"] = true

  // je vais donc lancer au préalable session_start()
  session_start();
  
  // pour pouvoir maintenant vérifier que j'ai bien $_SESSION["valide"] = true
  if ( isset($_SESSION["valide"]) AND $_SESSION["valide"] === true) {
    echo "<h1>Admin</h1>";
    echo "<p>Votre session est correcte, bienvenue sur votre admin</p>";
    echo "<p>Vous pouvez aussi vous <a href='logout.php'>logout.php</a></p>";
  } else {
    echo "<h1>Admin</h1>";
    echo "<p>Hélas, votre session n'est pas bonne, vous n'avez pas le droit de consulter cette page, il vous faut vous identifier de nouveau en passant par la page <a href='login.html'>login.html</a></p>";
  }


?>