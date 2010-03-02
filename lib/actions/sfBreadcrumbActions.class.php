<?php

class sfBreadcrumbActions extends sfActions
{
    /**
     * Добавить хлебную крошку
     *
     * @see sfBreadcrumbItem::__construct
     */
    public function addBreadcrumb($name, $uri = null, $params = array())
    {
        $this->getContext()->get('breadcrumbs')->add(new sfBreadcrumbItem($name, $uri, $params));
    }
}