<?php

    /**
    ** El frontend controller se encarga de configurar nuestra aplicacion
     */
    require 'config.php';
    require 'helpers.php';

    //Llamar al controlador indicado.

    if(empty($_GET['url']))
    {
        $_GET['url'] = "home";
    }
    controller($_GET['url']);