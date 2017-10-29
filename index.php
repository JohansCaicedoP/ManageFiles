<a href="#?action=buscar">Login</a>
<?php

require_once 'jmvc/app/controller/Login.controller.php';
$loginCtrl = new Login_Controller();

  if (isset($_POST['action']) && isset($_POST['action'])) {
//muestra el buscador y los resultados
      if ($_GET['action'] == 'buscar') { //muestra el modulo del buscador
} else if ($_GET['action'] == 'history') { //muestra el modulo "historia de Bolivia"
}
} else { //Si no existe GET o POST -> muestra la pagina principal
   $loginCtrl->principal();
}