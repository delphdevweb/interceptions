<?php

  // get infos from the db
  include("model/mod.pdo.php");
  include("model/mod.users.php");
  $usersObj = new UsersClass($pdo);
  $usersArr = $usersObj->readall();

  // display the login form
  // only if we have registered users
  if($usersArr) {
    include("view/view.html.php");
  // ************************** J'enlève view.login.php des commentaires ************************************
    include("view/view.login.php");
    $pdo = NULL;
    exit;
  } else {
    $pdo = NULL;
    exit("OOPS - the 'users' table is empty on the DB");
  }