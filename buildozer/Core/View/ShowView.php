<?php

// namespace Core\View;

// use Core\Interfaces\iView;

class ShowView implements iView
{

    /**
     * Set data from controller: $view->data['variable'] = 'value';
     * @var array
     */
    public $data = [];

    public function openPages(string $pathviews)
    {
        $path = './Views/' . $pathviews . '.php';

        if (is_readable($path)) {
            if ($this->data) {
                $this->render($path);
            } else {
                return require($path);
            }
        } else {
            throw new Exception('Невозможно найти/прочитать представление '.$path);
        }

        // $title = " <i>Тестовая страница</i>";
        // $meta = "тест, шаблонизатор, php";
        // $content = "Добро пожаловать на тестовую страницу шаблонизатора. У нас всё вышло! УРА!!!";
        
        // // шаблонизатор
        // $file = file_get_contents('./Views/' . $pathviews . '.html'); // путь к шаблону
        // $file=str_replace('{title}',$title,$file); // обьявляем из каких переменых брать информацию
        // $file=str_replace('{meta}',$meta,$file);
        // $file=str_replace('{content}',$content,$file);
        // print $file; //выводим
    }

    /**
     * @var sting Path to template file.
     */ 
    function render($template)
    {
        // define a closure with a scope for the variable extraction
        $result = function($file, array $data = array()) {
            ob_start();
            extract($data, EXTR_SKIP);
            try {
                include $file;
            } catch (\Exception $e) {
                ob_end_clean();
                throw $e;
            }
            return ob_get_clean();
        };

        // call the closure
        echo $result($template, $this->data);
    }
}
