<?php

use Webmozart\Assert\Assert;
use function StringUtils\capitalize;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../src/StringUtils.php';

Assert::eq(capitalize(''), '');
Assert::eq(capitalize('hello'), 'Hello');

// if (StringUtils\capitalize('hello') !== 'Hello') {
//     throw new \Exception('Функция работает неверно!');
// }

// if (StringUtils\capitalize('') !== '') {
//     throw new \Exception('Функция работает неверно!');
// }

// echo 'Все тесты пройдены!';