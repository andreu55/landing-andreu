<?php

// Simulamos la funcion url() de laravel :)
function url($url) {
  return "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] . $url;
}

// Simulamos la funcion asset() de laravel :)
function asset($url) {
  return "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] . "public/" . $url;
}
