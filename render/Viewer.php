<?php
/**
 * Created by PhpStorm.
 * User: Inkognito
 * Date: 18.07.2017
 * Time: 15:08
 */

namespace render;
include_once('ViewerInterface.php');

class Viewer implements ViewerInterface
{
    private $prefix = 'pref_';
    private $view = '';
    
    public function render($view, $params = [])
    {
        $this->setView($view);
        if (!is_file($this->view))
            return false;

        extract($params, EXTR_OVERWRITE);
        ob_start();
        require($this->view);

        return ob_get_clean();

    }

    private function setView($view)
    {
        $this->view = $view . '.php';
    }


}