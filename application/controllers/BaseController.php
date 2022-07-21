<?php

namespace application\controllers;

use application\core\Controller;
use application\core\View;

class BaseController extends Controller
{
    /**
     * @url: games
     * @method: GET
     * @type: JSON
     */
    public function getAllGamesActionGet()
    {
        $allGame = $this->model->getAllGame();
        echo'<pre>',var_dump($allGame),'</pre>';die;
        View::json();
    }
}