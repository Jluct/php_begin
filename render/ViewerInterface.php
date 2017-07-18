<?php
/**
 * Created by PhpStorm.
 * User: Inkognito
 * Date: 18.07.2017
 * Time: 15:08
 */

namespace render;


interface ViewerInterface
{
    public function render($view, $params = []);
    
}