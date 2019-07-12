<?php namespace RicardoPer\DDumper;

use Symfony\Component\VarDumper\Cloner\Cursor;

class HtmlDumperExpanded extends HtmlDumper
{

    /**
     * Expand all nodes & child
     */
    public function enterHash(Cursor $cursor, $type, $class, $hasChild)
    {
        parent::enterHash($cursor, $type, $class, false);

        if ($hasChild) {
            $this->line .= '<samp';

            if ($cursor->refIndex) {
                $r = Cursor::HASH_OBJECT !== $type ? 1 - (Cursor::HASH_RESOURCE !== $type) : 2;

                $r .= $r && 0 < $cursor->softRefHandle ? $cursor->softRefHandle : $cursor->refIndex;

                $this->line .= sprintf(' id=%s-ref%s', $this->dumpId, $r);
            }

            $this->line .= ' class=sf-dump-expanded>';

            $this->dumpLine($cursor->depth);
        }
    }
}
