<?php
/**
 * Created by PhpStorm.
 * User: EligioCachónMenéndez
 * Date: 11/25/2018
 * Time: 12:31 a.m.
 */

// Para redireccionar páginas

/**
 * @param $pagina
 */
function redireccionar($pagina){
    header('localhost' . RUTA_URL . $pagina);
}

