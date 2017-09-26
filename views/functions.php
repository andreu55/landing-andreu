<?php

// Simulamos la funcion url() de laravel :)
function url($url) {
  return "http://" . $_SERVER['SERVER_NAME'] . substr($_SERVER['REQUEST_URI'], 0, strrpos($_SERVER['REQUEST_URI'], '/')) . $url;
}

// Simulamos la funcion asset() de laravel :)
function asset($url) {
  return "http://" . $_SERVER['SERVER_NAME'] . substr($_SERVER['REQUEST_URI'], 0, strrpos($_SERVER['REQUEST_URI'], '/')) . "/public/" . $url;
}
