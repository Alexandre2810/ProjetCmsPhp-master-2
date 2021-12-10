<?php 

namespace App\Controller;

use App\Foundation\HTTPResquest;
use App\Foundation\HTTPResponse;

abstract class BaseController
{
    protected $params;
    protected $HTTPResquest;
    protected $HTTPResponse;

    public function __construct(string $action, array $params = [])
    {
        $this->params = $params;
        $this->HTTPResquest = new HTTPResquest();
        $this->HTTPResponse = new HTTPResponse();
        
        $method = 'execute' . ucfirst($action);

        if(!is_callable([$this, $method]))
        {
            throw new \RuntimeException('L\'action "' . $method . '" n\'est pas définie sur ce module');
        }
        $this->$method();
    }

    public function renderJSON($content)
    {
        echo "hey";
        $this->HTTPResponse->addHeader('Content-Type: application/json');
        echo json_encode($content, JSON_PRETTY_PRINT);
    }
}