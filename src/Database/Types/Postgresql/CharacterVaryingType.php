<?php

namespace Sumvo\LaravelAdmin\Database\Types\Postgresql;

use Sumvo\LaravelAdmin\Database\Types\Common\VarCharType;

class CharacterVaryingType extends VarCharType
{
    const NAME = 'character varying';
    const DBTYPE = 'varchar';
}
