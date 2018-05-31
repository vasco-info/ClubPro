<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ClubProBundle;

use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\Config\FileLocator;
/**
 * Description of ClubProBundleExtension
 *
 * @author INVENT STUDIO
 */
class ClubProBundleExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/Resources/config'));
        $loader->load('services.xml');
        
         $this->addClassesToCompile(array(
            'ClubProBundle\\Manager\\UserManager',
            'ClubProBundle\\Manager\\TypeUserManager',
            'ClubProBundle\\Manager\\ProjetManager',
            'ClubProBundle\\Manager\\SousSecteurManager',
            'ClubProBundle\\Manager\\SecteurManager',
         ));
    }
}
