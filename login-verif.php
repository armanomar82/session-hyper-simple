<?php

  // récup
  $login    = $_POST["login"] ?? false;
  $password = $_POST["password"] ?? false;

  // si un des deux champ n'est pas rempli, on s'arrête de suite
  if ($login === false OR $password === false) {
    exit("Login ou mot de passe manquant");
  }

  // si le login et le mot de passe ne sont pas "Marcel", on s'arrête de suite
  if ($login != "marcel@caramail.com" OR $password != "marcel30") {
    exit("Login ou mot de passe incorrect");
  }

  // si on est encore là, c'est qu'on ne s'est pas arrêté avant
  // donc le login et le mot de passe sont corrects
  // donc on créé une session valide

  session_start(); // on doit toujours lancer session_start() avant de jouer avec $_SESSION
  $_SESSION["valide"] = true; // on définit cette nouvelle variable

  echo "<h1>Login-verif</h1>";
  echo "<p>Ce sont les bons identifiants.</p>";
  echo "<p>Je viens de vous créer une session valide. Donc avez le droit d'aller sur <a href='admin.php'>la page admin</a> si vous voulez.</p>";
  exit;

?>