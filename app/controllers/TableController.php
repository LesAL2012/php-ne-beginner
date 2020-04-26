<?php

namespace app\controllers;

class TableController extends AppController {
    
    protected $title = 'Table';

    public function indexAction() {        
        
        $title = $this->title;

        $this->setMeta('Таблица без цвета', 'Таблица умножения - цвет черный', 'Таблица умножения от 1 до 10 - цвет черный');

        $meta = $this->meta;   
             
        $this->set(compact('title', 'meta'));
        
    }   
    
}