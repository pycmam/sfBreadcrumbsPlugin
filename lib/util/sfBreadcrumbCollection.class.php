<?php

/**
 * Коллекция хлебных крошек
 *
 * @author  Maxim Oleinik <maxim.oleinik@gmail.com>
 */
class sfBreadcrumbCollection
{
    /**
     * Массив крошек
     *
     * sfBreadcrumbItem
     */
    private $_items = array();


    /**
     * Добавить элемент
     *
     * @param  sfBreadcrumbItem $item
     * @return void
     */
    public function add(sfBreadcrumbItem $item)
    {
        $this->_items[] = $item;
    }


    /**
     * Получить список всех элементов
     *
     * @return array
     */
    public function getItems()
    {
        return $this->_items;
    }


    /**
     * Кол-во элементов
     */
    public function count()
    {
        return count($this->_items);
    }

}