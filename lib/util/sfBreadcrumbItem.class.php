<?php
/**
 * Крошка
 *
 * @author  Maxim Oleinik <maxim.oleinik@gmail.com>
 */
class sfBreadcrumbItem
{
    /**
     * Название ссылки
     */
    private $_name;

    /**
     * URI
     */
    private $_uri;

    /**
     * Параметры URI
     */
    private $_params = array();


    /**
     * Конструктор
     *
     * Примеры:
     *   new sfBreadcrumbItem('Home',    '@homepage')
     *   new sfBreadcrumbItem('Article', '@article_show?id=1')
     *   new sfBreadcrumbItem('Article', 'article_show', $article)
     *
     * @see url_for
     *
     * @param string $name    - Название ссылки
     * @param string $uri     - URI
     * @param array  $params  - Параметры URI
     * @return void
     */
    public function __construct($name, $uri = null, $params = array())
    {
        $this->_name   = (string) $name;

        if ($uri) {
            $this->_uri = (string) $uri;
        }

        if ($params) {
            $this->_params = $params;
        }
    }


    /**
     * Получить название ссылки
     *
     * @return string
     */
    public function getName()
    {
        return $this->_name;
    }


    /**
     * Получить URI
     *
     * @return string
     */
    public function getUri()
    {
        return $this->_uri;
    }


    /**
     * Получить массив параметров URI
     *
     * @return array
     */
    public function getParams()
    {
        return $this->_params;
    }

}
