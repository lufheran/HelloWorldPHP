<?php

	require 'config.php';
	require 'helpers.php';

	$confidencial ="un texto cualquiera";
    $language="PHP";
    $title = "Mejorandola";
  //Llamar una funcion
  view('view',compact('language','title'));
