<?php

namespace app\controllers;

class MainController extends AppController {    

    public function indexAction() {        
        
        $title = 'Main';

        $this->setMeta('Главная страница', 'Первое задание', 'шапка/header, навигация/nav, основной контент/main, подвал/footer, Меню, со ссылкой на две заглушки “урок 1” и “урок 2”, Ссылка на commit с выполненным задание, в вашем репозитории');

        $meta = $this->meta;   
             
        $this->set(compact('title', 'meta'));
        
    }
    
    
}