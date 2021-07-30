<?php

namespace Sumvo\LaravelAdmin\Database\Types\Postgresql;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Sumvo\LaravelAdmin\Database\Types\Type;

class TsQueryType extends Type
{
    const NAME = 'tsquery';

    public function getSQLDeclaration(array $field, AbstractPlatform $platform)
    {
        return 'tsquery';
    }
}
