<?php

require 'jmvc/app/Model/Db.class.php';

/**
 *
 *
 * @author Johans Caicedo
 */
class userController extends Database {

    function loginUser0($nombre, $clave) {
        $this->conectar();
        $query = $this->consulta("SELECT * FROM credenciales WHERE nombre='$nombre' AND clave='$clave';");
        $this->disconnect();
        if ($this->numero_de_filas($query) > 0) { // existe -> datos correctos
            //se llenan los datos en un array
            while ($tsArray = $this->fetch_assoc($query)) {
                $data[] = $tsArray;
            }

            return $data;
        } else {
            return '';
        }
    }

}
