<?php

	//Declarando una funcion
    function view($template, $var = array())
    {
        extract($var);
    	require "view/$template.tpl.php";
    }

    function controller($name)
    {
        $file = "controllers/$name.php";
        if(file_exists($file))
        {
            require $file;
        }
        else
        {
            header('HTTP/1.0 Not Found');
            exit('pagina no encontrada');
        }
    }
