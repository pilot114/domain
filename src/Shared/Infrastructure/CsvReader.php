<?php

namespace Domain\Shared\Infrastructure;

class CsvReader
{
    static function read(string $filename): \Generator
    {
        $handle = fopen($filename, 'r');
        while (($data = fgetcsv($handle)) !== false) {
            yield $data;
        }
        fclose($handle);
    }
}