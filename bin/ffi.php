<?php

include './boot.php';

// https://github.com/SerafimArts/opengl-demo
// https://github.com/gabrielrcouto/awesome-php-ffi

// ABI from C headers
//$what = '
//typedef struct {...} zend_string;
//extern zend_string *php_string_tolower(zend_string *s);
//';
//$where = 'php8.so';
//$ffi = FFI::cdef($what, $where);


$ffi = FFI::cdef(
    "void SDL_Init(int flags);",
    "libSDL2.so"
);

// Инициализируем SDL
$ffi->SDL_Init(0);

// Создаем окно
$window = $ffi->new('void*');
$window = $ffi->SDL_CreateWindow(
    "My Window",
    $ffi->SDL_WINDOWPOS_CENTERED,
    $ffi->SDL_WINDOWPOS_CENTERED,
    800,
    600,
    0
);

// Ожидание закрытия окна
$running = true;
while ($running) {
    $event = $ffi->new('SDL_Event');
    while ($ffi->SDL_PollEvent($event) != 0) {
        if ($event->type == $ffi->SDL_QUIT) {
            $running = false;
        }
    }
}

// Освобождаем ресурсы и закрываем SDL
$ffi->SDL_DestroyWindow($window);
$ffi->SDL_Quit();
