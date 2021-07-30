<?php

namespace Sumvo\LaravelAdmin\Events;

use Illuminate\Queue\SerializesModels;
use Sumvo\LaravelAdmin\Models\Menu;

class MenuDisplay
{
    use SerializesModels;

    public $menu;

    public function __construct(Menu $menu)
    {
        $this->menu = $menu;

        // @deprecate
        //
        event('voyager.menu.display', $menu);
    }
}
