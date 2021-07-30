<?php

namespace Sumvo\LaravelAdmin\Database\Types\Postgresql;

use Sumvo\LaravelAdmin\Database\Types\Common\DoubleType;

class DoublePrecisionType extends DoubleType
{
    const NAME = 'double precision';
    const DBTYPE = 'float8';
}
