<?php
/**
 * Created by PhpStorm.
 * User: yunjan
 * Date: 10/11/18
 * Time: 9:58 PM
 */
main::start();

class main {
    static public function start(){
        $file= fopen("example.csv", "r");
        while(! feof($file)){

            $record= fgetcsv($file);
            $records[]=$record;

        }

        fclose($file);
        print_r($records);

    }
}