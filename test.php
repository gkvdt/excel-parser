<?php
require_once 'vendor/autoload.php';
require_once 'MyReadFilter.php';

$filter = new MyReadFilter(1,400,range("A","I"));
$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader("Xlsx");
$reader->setReadFilter($filter);
$ex = $reader->load("modified.xlsx");
$sheet1 = $ex->getSheet(0)->toArray(null,true,true,true);

$handled = array();
$buffer = array();

$val = 0;

foreach($sheet1 as $key=>$value){
    if($value['I']==null){
        if($val == 0){
            
        }
        $val++;
        continue;   
    }
    array_push($buffer,$value);
}

print_r($buffer);






