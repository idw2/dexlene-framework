<?php

Class htmlHelpers extends Controller {

    public function headTh(Array $heads, Array $select = NULL) {
        $th = "<tr>";
        if ($select == NULL) {
            $th .= "<th>" . implode("</th><th>", array_values($heads)) . "</th>";
        } else {
            if (is_array($select['positions'])) {
                asort($select['positions']);
                $newposition = array();
                $i=1;
                foreach ($select['positions'] as $name => $value) {
                    if($value != NULL){
                        $key = array_search($name, $heads);
                        $newposition[$i] = $heads[$key];
                        $i++;
                    }
                }
                unset($heads);
                $heads = $newposition;
            }
            if (is_array($select['heads'])) {
                foreach ($select['heads'] as $name => $value) {
                    $key = array_search($name, $heads);
                    if ($value == NULL || $name == "") {
                        unset($heads[$key]);
                    } else {
                        $heads[$key] = $value;
                    }
                }
            }

            $th .= "<th>" . implode("</th><th>", array_values($heads)) . "</th>";
        }
        $th .= "<tr>";
        return $th;
    }

}
