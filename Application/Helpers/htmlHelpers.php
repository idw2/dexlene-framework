<?php

Class htmlHelpers extends Controller {

//    public function __construct() {
//        parent::__construct();
//    }
//
    public function headTh(Array $heads) {
        $th = "<tr>";
        foreach($heads as $head){
            $th .= "<th>{$head}</th>";
        }
        $th .= "<tr>";
        return $th;
    }

}
