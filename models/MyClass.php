<?php

/* Simple example of class without namespace right in the models root */

class MyClass {
    function myCommand()
    {
        log_info('You called my command.');
        log_notice('Though this is wrongly written because it does not return true, false or integer between 0-255');
    }
}