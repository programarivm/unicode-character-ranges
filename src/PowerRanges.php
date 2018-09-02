<?php

namespace UnicodeRanges;

class PowerRanges
{
    const RANGES_FOLDER = __DIR__ . '/Range';

    protected $ranges = [];

    public function __construct()
    {
        $files = array_diff(scandir(self::RANGES_FOLDER), ['.', '..']);

        foreach ($files as $file) {
            $filename = pathinfo($file, PATHINFO_FILENAME);
            $classname = "\\UnicodeRanges\\Range\\$filename" ;
            $rangeClass = new \ReflectionClass($classname);
            $rangeObj = $rangeClass->newInstanceArgs();
            $this->ranges[] = $rangeObj;
        }
    }

    public function ranges()
    {
        return $this->ranges;
    }
}
