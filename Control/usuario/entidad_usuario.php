<?php

class Usuario{

    private $id_usario;
    private $usuario;
    private $nombre_usuario;
    private $appat_usuario;
    private $apmat_usuario;
    private $edad_usuario;
    private $correo_usuario;
    private $contrasena;
    private $id_rol;
    private $id_permiso;

    public function __GET($k){ return $this->$k; }
    public function __SET($k, $v){ return $this->$k = $v; }
    }



?>