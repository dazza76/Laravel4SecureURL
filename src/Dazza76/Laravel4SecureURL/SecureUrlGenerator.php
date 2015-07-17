<?php  namespace Dazza76\Laravel4SecureURL;

use \Illuminate\Routing\UrlGenerator;
use \Illuminate\Routing\RouteCollection;
use \Illuminate\Http\Request;

class SecureUrlGenerator extends UrlGenerator
{
    public function __construct(RouteCollection $routes, Request $request)
    {
        parent::__construct($routes, $request);

        // force the generator to use https
        $this->forceSchema('https');
    }
}
