<?php

namespace forum\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;

class PruebaController extends BaseController
{
    public function index($nombre) {
        return "Hola " . $nombre . " desde el controlador";
    }
}