<?php

namespace app\controllers;

class FormController extends AppController
{
    protected $title = 'Form';

    public function indexAction()
    {
        $title = $this->title;

        $this->setMeta('Форма отправки', 'Форма для отправки сообщения', '');

        $meta = $this->meta;
             
        $this->set(compact('title', 'meta'));
    }
    
    public function reverseTextAction()
    {
        $title = $this->title;

        $this->setMeta('Сообщение в обратном порядке');

        $meta = $this->meta;

        $revText = '';

        if (isset($_POST['nix-text']) && trim($_POST['nix-text']) != '') {
            $revText = trim($_POST['nix-text']);
        } else {
            header("Location: /form/emptyText");
        }

        if ($revText != '') {
            $revText = htmlspecialchars($revText);
            $revText = $this->mbStrrev($_POST['nix-text']);
        }
             
        $this->set(compact('title', 'meta', 'revText'));
    }

    public function emptyTextAction()
    {
        $this->layout = 'empty';
        
        $title = $this->title;

        $this->setMeta('Пустая форма');

        $meta = $this->meta;
        
        $revText = 'Вернитесь назад, нужно заполнить форму корректно!';
             
        $this->set(compact('title', 'meta', 'revText'));
    }

    private function mbStrrev($str)
    {
        $r = '';
        for ($i = mb_strlen($str); $i>=0; $i--) {
            $r .= mb_substr($str, $i, 1);
        }
        return $r;
    }
}
