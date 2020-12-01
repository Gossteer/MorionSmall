<?php

// namespace Core\View;

// use Core\Interfaces\iView;

class ShowView implements iView
{
    public function openPages(string $pathviews)
    {
        // $path = './Views/' . $pathviews . '.html';

        // if (is_readable($path)) {
        //     return require($path);
        // } else {
        //     throw new Exception('Невозможно найти/прочитать представление '.$path);
        // }

        $title = " <i>Тестовая страница</i>";
        $meta = "тест, шаблонизатор, php";
        $content = "Добро пожаловать на тестовую страницу шаблонизатора. У нас всё вышло! УРА!!!";
        
        // шаблонизатор
        $file = file_get_contents('./Views/' . $pathviews . '.html'); // путь к шаблону
        $file=str_replace('{title}',$title,$file); // обьявляем из каких переменых брать информацию
        $file=str_replace('{meta}',$meta,$file);
        $file=str_replace('{content}',$content,$file);
        print $file; //выводим

    }
}
