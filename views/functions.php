<?php

// Simulamos la funcion url()
function url($url) {
  return "https://" . $_SERVER['SERVER_NAME'] . substr($_SERVER['REQUEST_URI'], 0, strrpos($_SERVER['REQUEST_URI'], '/')) . $url;
}

// Simulamos la funcion asset()
function asset($url) {
  return "https://" . $_SERVER['SERVER_NAME'] . substr($_SERVER['REQUEST_URI'], 0, strrpos($_SERVER['REQUEST_URI'], '/')) . "/public/" . $url;
}
