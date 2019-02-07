<?php

function exampleCommand($cmd, $args, $options)
{
    log_info('You executed example call, command is: ' . $cmd);
    log_notice('Action given: ' . $args['action']);
    log_notice('Optional given: ' . $args['optional']);
    log_warning('Files given:');
    foreach ($args['files'] as $file) {
        log_warning(' - ' . $file);
    }
    log_error('Options:');
    log_error(' - int: ' . $options['int']);
    log_error(' - do: ' . ($options['do'] ? 'yes' : 'no'));
    log_error(' - string: ' . $options['string']);
    return true;
}
