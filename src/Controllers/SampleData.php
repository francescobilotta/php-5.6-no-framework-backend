<?php

namespace App\Controllers;

use Http\Request;
use Http\Response;

class SampleData
{
    private $request;
    private $response;

    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }

    public function show()
    {
        //$content = '<h1>Hello World</h1>';
        //$content .= 'Hello ' . $this->request->getParameter('name', 'stranger');
        //http://localhost/php-5.6-no-framework-application/public/index.php/?name=Arthur%20Dent
        $data = [
            'a',
            'b',
            'c',
            $this->request->getParameter('name', 'stranger'),
        ];
        header('Content-Type: application/json; charset=utf-8');
        $this->response->setContent(json_encode($data));
    }
}
