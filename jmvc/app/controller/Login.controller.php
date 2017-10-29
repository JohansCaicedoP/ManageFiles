<?php

include 'User.Controller.php';

/**
 * 
 * @author Johans
 */
class Login_Controller {

    public $var = 'un valor predeterminado';

    /**
     * 
     * @author Johans Caicedo
     * @abstract Este metodo carga los "contenidos" de la pagina.
     * @param String $tittle Titulo de la pagina.
     * @return String Buffer del contenido de la pagina.
     */
    public function loadTemplate($tittle = "Unreconized") {
        $pagina = $this->load_page('C:\xampp\htdocs\ManageFiles\jmvc\app\views\default\pageDefault.php');
//$header = $this->load_page('app/views/default/sections/s.header.php');
//$pagina = $this->replace_content('/\#HEADER\#/ms', $header, $pagina);
//$pagina = $this->replace_content('/\#TITLE\#/ms', $title, $pagina);
//$menu_left = $this->load_page('app/views/default/sections/s.menuizquierda.php');
//$pagina = $this->replace_content('/\#MENULEFT\#/ms', $menu_left, $pagina);
        return $pagina;
    }

    public function principal() {
        $pagina = $this->loadTemplate("Pagina principal");
        $html = $this->load_page('C:\xampp\htdocs\ManageFiles\jmvc\app\views\default\sections\viewPrincipal.php');
        $pagina = $this->replace_content('/\#CONTENIDO\#/ms', $html, $pagina);
        $this->view_page($pagina);
    }

    public function showFormulario() {
        $pagina = $this->loadTemplate('Login de Usuarios');
        $login = $this->load_page("C:\xampp\htdocs\ManageFiles\jmvc\app\views\default\sections\viewLogin.php");
        $pagina = $this->replace_content('/\#CONTENIDO\#/ms', $login, $pagina);
        $this->view_page($pagina);
    }

    private function load_page($page) {
        return file_get_contents($page);
    }

    private function view_page($html) {
        echo $html;
    }

    private function replace_content($in = '/\#CONTENIDO\#/ms', $out, $pagina) {
        return preg_replace($in, $out, $pagina);
    }

}
