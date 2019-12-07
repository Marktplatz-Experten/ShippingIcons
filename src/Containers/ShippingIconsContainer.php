<?php

namespace ShippingIcons\Containers;

use Plenty\Plugin\Templates\Twig;
    
class ShippingIconsContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('ShippingIcons::content.ShippingIconsAssets');
    }
}