<?php

namespace App\Menu;
use Knp\Menu\FactoryInterface;

class Builder
{
    /**
     * @var FactoryInterface
     */
    private $factory;
    /**
     * @param FactoryInterface $factory
     */
    public function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;
    }
    /**
     * @param array $options
     *
     * @return \Knp\Menu\ItemInterface
     */
    public function createMainMenu(array $options)
    {
        $menu = $this->factory->createItem('root');

        $menu->addChild('Homepagina', ['route' => 'app_homepage']);
//        $menu->addChild('test', ['route' => 'app_test']);

        return $menu;
    }

    /**
     * @param array $options
     * @return \Knp\Menu\ItemInterface
     */
    public function createBreadcrumb(array $options)
    {
        $breadcrumb = $this->factory->createItem('Homepagina', ['route' => 'app_homepage']);
//        $breadcrumb->addChild('test', ['route' => 'app_test']);

        return $breadcrumb;
    }
}