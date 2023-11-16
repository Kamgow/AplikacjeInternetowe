<?php


class AppController {

    protected function render(string $template = null, array $variables = []) {
        
        $templatePath = 'src/views/'.$template.'.php';
        $output = 'File not found';
        
        //var_dump($templatePath);

        if(file_exists($templatePath)){
            extract($variables); //wypakowuje ze słownika, klucz -> zmienna, wartość -> wartość tej zmiennej
            
            ob_start();
            include $templatePath;
            $output = ob_get_clean();
        }
        print $output;
        //^ to wyjebać, dodać else do ifa zwracający jak w routingu FileNotFound, lub nadpisać ścieżkę path na strone z błędem

    }


}