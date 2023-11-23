<?php

namespace App;

class SmartSplFileInfo extends \SplFileInfo
{
    public function getSize($unit = 'B')
    {
        $size = parent::getSize();

        switch ($unit) {
            case 'B':
                return $size;
            case 'b':
                return $size * 8;
            default:
                throw new \Exception();
        }
    }
}
