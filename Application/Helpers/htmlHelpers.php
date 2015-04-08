<?php

Class htmlHelpers extends Controller {

//    public function __construct() {
//        parent::__construct();
//    }
//
    public function headTh(Array $heads, Array $select = NULL) {
        $th = "<tr>";
        if ($select == NULL) {
            $th .= "<th>" . implode("</th><th>", array_values($heads)) . "</th>";
        } else {
            if(is_array($select['heads'])){
                foreach ($select['heads'] as $name => $value) {
                    $key = array_search($name, $heads);
                    if ($value == NULL) {
                        unset($heads[$key]);
                    } else {
                        $heads[$key] = $value;
                    }
                }
            }
//            if(is_array($select['positions'])){
//                var_dump($select['positions']);
//            }
            $th .= "<th>" . implode("</th><th>", array_values($heads)) . "</th>";
        }
        $th .= "<tr>";
        return $th;
    }

}
