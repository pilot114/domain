<?php

function autoload(string $prefix, string $baseDir): void
{
    spl_autoload_register(function ($class) use ($prefix, $baseDir) {
        $len = strlen($prefix);
        if (strncmp($prefix, $class, $len) !== 0) {
            return;
        }
        $file = $baseDir . str_replace('\\', '/', substr($class, $len)) . '.php';
        if (file_exists($file)) {
            require $file;
        }
    });
}

autoload('Domain', '../src');
