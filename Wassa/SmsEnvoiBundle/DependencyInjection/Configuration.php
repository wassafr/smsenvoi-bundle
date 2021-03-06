<?php

namespace Wassa\SmsEnvoiBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('wassa_sms_envoi');
        
        $rootNode
        	->children()
            	->scalarNode('api_key')
                   	->isRequired()
					->cannotBeEmpty()
				->end()
				->scalarNode('email')
                   	->isRequired()
					->cannotBeEmpty()
				->end()
                ->scalarNode('subtype')
                    ->isRequired()
                    ->cannotBeEmpty()
                ->end()
                ->scalarNode('sender_label')
                    ->isRequired()
                    ->cannotBeEmpty()
                ->end()
			->end();

        return $treeBuilder;
    }
}
