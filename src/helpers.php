<?php

use RicardoPer\DDumper\Dumper;


if (!function_exists('d')) {
    /**
     * Dump the passed variables
     *
     * @param  mixed
     * @return void
     */
    function d()
    {
        array_map(
            function ($x) {
                (new Dumper)->dump($x);
            },
            func_get_args()
        );
    }
}

if (!function_exists('ddd')) {
    /**
     * Dump the passed variables and end the script
     *
     * @param  mixed $args
     * @return void
     */
    function ddd(...$args)
    {
        foreach ($args as $x) {
            (new Dumper)->dump($x);
        }

        die(1);
    }
}

if (!function_exists('de')) {
    /**
     * Expanded Dump the passed variables
     *
     * @param  mixed
     * @return void
     */
    function de()
    {
        array_map(
            function ($x) {
                (new Dumper)->dumpExpanded($x);
            },
            func_get_args()
        );
    }
}

if (!function_exists('dde')) {
    /**
     * Expanded Dump the passed variables and end the script
     *
     * @param  mixed $args
     * @return void
     */
    function dde(...$args)
    {
        foreach ($args as $x) {
            (new Dumper)->dumpExpanded($x);
        }

        die(1);
    }
}
