<?php

namespace Test;

class Api
{
    private $id;
    private $type = null;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function test()
    {
        $data = ['integer' => '999', 'type' => 'gas', 'time' => date_create('2019-01-01T18:00:00'), 'other' => 'no appear in final data'];

        // $routes = route_init();

        // $_SERVER['REQUEST_METHOD'] = 'PUT';
        // $out = api_validate($routes['base']['api'], $data);
        // var_dump($out);

        // $_SERVER['REQUEST_METHOD'] = 'GET';
        // $in = api_read($routes['base']['api'], $data);
        // var_dump($in);

        return $data;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getInteger()
    {
        return 976;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType(string $type)
    {
        $this->type = $type;
    }

    public function getTime()
    {
        return date_create();
    }

    public function getOther($o, $some, $other)
    {
        return $o->getId() . '-' . $some . '-' . $other;
    }
}
