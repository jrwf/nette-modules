<?php

declare(strict_types=1);

namespace App\Router;


use Nette\Application\Routers\RouteList;
use Nette\StaticClass;

final class RouterFactory
{
	use StaticClass;

	/**
	 * @return RouteList
	 */
	public static function createRouter(): RouteList
	{
        $router = new RouteList();
//        $router->addRoute('rss.xml', 'Feed:rss');
//        $router->addRoute('article/<id>', 'Article:view');
//        $router->addRoute('<module=front>/<presenter>/<action>', 'Homepage:default');
//        $router->addRoute('<module=admin>/<presenter>/<action>', 'Dashboard:default');
//        $router->addRoute('<module>/<presenter>/<action>', 'Homepage:default');

        $router->withModule('Front')
                    ->addRoute('<presenter>/<action>', 'Homepage:default')

                ->withModule('Admin')
                    ->addRoute('admin/<presenter=Dashboard>/<action>', 'Dashboard:default');
		return $router;
	}
//
//
//	/**
//	 * @return RouteList
//	 */
//	public static function createFrontRouter(): RouteList
//	{
//		$router = new RouteList('Front');
//		$router->addRoute('<presenter>/<action>', 'Homepage:default');
//
//		return $router;
//	}


    /**
     * @return RouteList
     */
//    public static function createAdminRouter(): RouteList
//    {
//        $router = new RouteList('Admin');
//        $router->addRoute('admin/<presenter>/<action>', 'Dashboard:default');
//
//        return $router;
//    }
}
