<?php

	//Declarando una funcion
    function view($template, $var = array())
    {
        extract($var);
    	require "view/$template.tpl.php";
    }
