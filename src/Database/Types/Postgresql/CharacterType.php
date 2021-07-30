<?php

namespace Sumvo\LaravelAdmin\Database\Types\Postgresql;

use Sumvo\LaravelAdmin\Database\Types\Common\CharType;

class CharacterType extends CharType
{
    const NAME = 'character';
    const DBTYPE = 'bpchar';
}
