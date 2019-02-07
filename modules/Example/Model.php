<?php

namespace Example;

class Model
{
    public function callMeMaybe($cmd, $args, $options)
    {
        log_info('Call me maybe on my cell ' . $args['number'] . '?');
        return true;
    }

    public function notSoManyConsoleYmls()
    {
        log_info('Still so many.');
        return true;
    }
}
