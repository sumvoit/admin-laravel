<?php

namespace Sumvo\LaravelAdmin\Database\Types\Common;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Sumvo\LaravelAdmin\Database\Types\Type;

class TextType extends Type
{
    const NAME = 'text';

    public function getSQLDeclaration(array $field, AbstractPlatform $platform)
    {
        return 'text';
    }
}
