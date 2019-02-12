<?php

namespace Test;

class Api
{
    public function test()
    {
        $_SERVER['REQUEST_METHOD'] = 'PUT';

        $data = ['integer' => 9, 'type' => 'gas', 'other' => 'no appear in final data'];

        $routes = route_init();

        $data = api_validate($routes['base']['api'], $data);
        var_dump($data);

        return true;
    }
}
