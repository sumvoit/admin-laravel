<?php

namespace Sumvo\LaravelAdmin\Events;

use Illuminate\Queue\SerializesModels;

class RoutingAdmin
{
    use SerializesModels;

    public $router;

    public function __construct()
    {
        $this->router = app('router');

        // @deprecate
        //
        event('voyager.admin.routing', $this->router);
    }
}
