<?php
/**
 * Created by PhpStorm.
 * User: yunjan
 * Date: 10/11/18
 * Time: 9:58 PM
 */
main::start("example.csv");

class main {
    static public function start($filename){
        $records=csv::getRecords($filename);
        print_r($records);
    }
}
class csv{

    static public function getRecords($filename){
        $file= fopen($filename, "r");
        while(! feof($file)){

            $record= fgetcsv($file);
            $records[]=$record;
        }
        fclose($file);
        return $records;
    }
}