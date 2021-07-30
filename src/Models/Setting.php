<?php

namespace Sumvo\LaravelAdmin\Models;

use Illuminate\Database\Eloquent\Model;
use Sumvo\LaravelAdmin\Events\SettingUpdated;

class Setting extends Model
{
    protected $table = 'settings';

    protected $guarded = [];

    public $timestamps = false;

    protected $dispatchesEvents = [
        'updating' => SettingUpdated::class,
    ];
}
