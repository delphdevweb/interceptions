<?php

  // session start & portal
  include("ctrl.session-start.php");
  include("ctrl.session-portal.php");

  // still here = authenticated
  include("view/view.html.php");

  // ****************** J'ajoute le "view.backoffice.php" **********************
  include("view/view.backoffice.php");
  exit;