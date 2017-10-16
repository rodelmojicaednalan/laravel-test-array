<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \RecursiveIteratorIterator;
use \RecursiveArrayIterator;

class ArrayController extends Controller{
    public function __construct(){
        
    }

    public function index(){
        $arr = json_decode('[[1,2,[3]],4]');
        return view('test', array('newarray'=>$this->printArray($arr)));
    }

    private function printArray($arr){
        $it = new RecursiveIteratorIterator(new RecursiveArrayIterator($arr));
        foreach($it as $v) {
          $data[] = $v;
        }

        return json_encode($data, JSON_PRETTY_PRINT);
    }
}
