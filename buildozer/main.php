<?php 

class Application {
    
    public function run(){
            $this->Loader();
            //...
    }
    
    public function Loader(){
        spl_autoload_register(['ClassLoader', 'autoload'], true, true);

        $firstview = new ShowView();
        $firstview->data['titles'] = ['The title', 'The title'];
        $firstview->data['test'] = new MyController();
        $firstview->data['content'] = 'The body';
        $firstview->openPages('first');

        // $view = new View;

        // // assign
        // $view->data['titles'] = ['The title', 'The title'];
        // $view->data['test'] = new MyController();
        // $view->data['content'] = 'The body';

        // // render
        // $view->render(dirname(__DIR__) . '/Views/first.php');
        // try{
        //     // $config = new ConfigDb();
        //     // echo $config->get('database', 'login'); //mylogin

        //     // echo MyController::$params; //KSL

        //    //Пример добавления каталога в автозагрузчик классов
        //     //ClassLoader::$dir[] = 'view';

        //     //Пример добавления класса MyClass к карте классов
        //     //ClassLoader::$addMap['MyClass'] = 'folder/MyClass.php';

        // } catch (Exception $e){
        //     echo '<h2>Внимание! Обнаружена ошибка.</h2>'.
        //     '<h4>'.$e->getMessage().'</h4>'.
        //    '<pre>'.$e->getTraceAsString().'</pre>';
        //     exit;
        // }
    }
    
}