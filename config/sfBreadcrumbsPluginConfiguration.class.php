<?php

/**
 * sfBreadcrumbsPluginConfiguration
 *
 * @author  Rustam Miniakhmetov <pycmam@gmail.com>
 * @author  Maxim Oleinik <maxim.oleinik@gmail.com>
 */
class sfBreadcrumbsPluginConfiguration extends sfPluginConfiguration
{
    /**
     * Initialize
     *
     * @see sfPluginConfiguration
     */
    public function initialize()
    {
        $this->dispatcher->connect('context.load_factories', array($this, 'onLoad'));
    }


    /**
     * context.load_factories listener
     */
    public function onLoad(sfEvent $event)
    {
        $breadcrumbs = new sfBreadcrumbCollection;
        $breadcrumbs->add(new sfBreadcrumbItem('Homepage', '@homepage'));
        $context = $event->getSubject();
        $context->set('breadcrumbs', $breadcrumbs);
    }
}