<?php


namespace core;


abstract class View
{
    //сформирование content
    public static function render($view, $data = [] ){
        $viewFile = APP . "/views/{$view}.php";

        if (is_file($viewFile)){
            extract($data);
            ob_start();
            require_once $viewFile;
            $content = ob_get_clean();
        }else{
            throw new \Exception("This view not found {$viewFile}", 500);
        }

        $fileLayout =  APP . "/views/Layouts/layout.php";
        if (file_exists($fileLayout)){
                 require_once $fileLayout;
             }else{
                 throw new \Exception("File $fileLayout no found!", 500);
             }
        }
}