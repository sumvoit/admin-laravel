<?php

namespace Sumvo\LaravelAdmin\Events;

use Illuminate\Queue\SerializesModels;
use Sumvo\LaravelAdmin\Models\Setting;

class SettingUpdated
{
    use SerializesModels;

    public $setting;

    public function __construct(Setting $setting)
    {
        $this->setting = $setting;
    }
}
