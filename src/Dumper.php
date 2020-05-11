<?php namespace RicardoPer\DDumper;

use Symfony\Component\VarDumper\Cloner\VarCloner;
use Symfony\Component\VarDumper\Dumper\CliDumper;

class Dumper
{

    /**
     * Dump a value
     *
     * @param mixed $value
     * @return void
     */
    public function dump($value)
    {
        if (class_exists(CliDumper::class)) {
            $dumper = null;

            if (in_array(PHP_SAPI, ['cli', 'phpdbg']) === true) {
                $dumper = new CliDumper;
            } else {
                $dumper = new HtmlDumper;

                $dumper->setTheme('laravel');
            }

            $dumper->dump((new VarCloner)->cloneVar($value));
        } else {
            var_dump($value);
        }
    }

    /**
     * Dump a value with all nodes expanded
     *
     * @param mixed $value
     * @return void
     */
    public function dumpExpanded($value)
    {
        if (class_exists(CliDumper::class)) {
            $dumper = null;

            if (in_array(PHP_SAPI, ['cli', 'phpdbg']) === true) {
                $dumper = new CliDumper;
            } else {
                $dumper = new HtmlDumperExpanded;

                $dumper->setTheme('laravel');
            }

            $dumper->dump((new VarCloner)->cloneVar($value));
        } else {
            var_dump($value);
        }
    }
}
