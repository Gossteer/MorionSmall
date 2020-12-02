<?php
class ClassLoader {

    public static $classMap;
    public static $addMap = array();
    public static $dir = [
            'Controllers',
            'Models',
            'buildozer\Core',
    ];
    
    //Добавить класс к карте классов
    public static function addClassMap($class = array()){
            self::$addMap = array_merge(self::$addMap, $class);
        }

    public static function autoload($className){

            //подключаем и сохраняем карту классов. Добавляем пользовательские классы.
            self::$classMap = array_merge(require(__DIR__ . '/classes.php'), self::$addMap);
    
           //Ищем в карте классов
            if (isset(self::$classMap[$className])) {
                $filename = self::$classMap[$className];
                if(!@include_once ROOT_DIR . $filename) {
                    self::library($filename);
                }
                //include_once ROOT_DIR . $filename; 
            //Ищем в папках
            } else {
                self::library($className);
            }

            //Проверка был ли объявлен класс
            if (!class_exists($className, false) && !interface_exists($className, false) && !trait_exists($className, false)) {
                throw new Exception('Невозможно найти класс '.$className);
            }    
    }
    
    public static function library($className){
            foreach (self::$dir as $d){
                //echo $d . "\n";
                $filename = ROOT_DIR . $d . '\\'. $className;
                //$filename = ROOT_DIR . $d . '\\'. $className . ".php";
                //echo $filename . "\n";
                if (is_readable($filename)) {
                    require_once $filename;
                }
            }   
        }
    
}