<?php

namespace app\controllers;

class TableController extends AppController
{
    protected $title = 'Table';

    public function indexAction()
    {
        $title = $this->title;

        $this->setMeta('Таблица без цвета', 'Таблица умножения - цвет черный', 'Таблица умножения от 1 до 10 - цвет черный');

        $meta = $this->meta;
             
        $this->set(compact('title', 'meta'));
    }
    
    public function colorAction()
    {
        
        $title = $this->title;

        $this->setMeta('Таблица 5 цветов', 'Таблица умножения в цветах: черный, красный, зеленый, желтый, синий', 'Таблица умножения от 1 до 10, цвета: черный, 
        1 - красный, 2 - зеленый, 3 - желтый, 4 - синий');

        $meta = $this->meta;
             
        $this->set(compact('title', 'meta'));
    }
}
