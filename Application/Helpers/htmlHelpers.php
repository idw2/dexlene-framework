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
                $i = 1;
                foreach ($select['positions'] as $name => $value) {
                    if ($value != NULL) {
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

    public function paginator(Array $dados) {

        $params = array_filter(explode("/", $_GET['url']));

        $qntdd = (int) $dados['limit_qntdd'];
        $antes = ((int)$dados['limit_page'] - 1);
        $depois = ((int)$dados['limit_page'] + 1);
        
        $str = "<nav>";
        $str .= "<ul class='pagination pagination-lg'>";        
        if ((int)$dados['limit_page'] == 0) {
            $str .= "<li class='disabled'><a href='#' aria-label='Previous'><span aria-hidden='true'>«</span></a></li>";
        } else {
            $str .= "<li><a href='" . REQUEST_URI . "{$params[0]}/{$params[1]}/~!/{$qntdd}/{$antes}' aria-label='Previous'><span aria-hidden='true'>«</span></a></li>";
        }

        for ($i = 0; $i < $dados['n_paginas']; $i++) {
            $n = ($i + 1);
            if ($dados['limit_page'] == $i) {
                $str .= "<li class='active'><a href='#' >{$n}</a></li>";
            } else {
                $str .= "<li><a href='" . REQUEST_URI . "{$params[0]}/{$params[1]}/~!/{$qntdd}/{$i}'>{$n}</a></li>";
            }
        }

        if ((int)$dados['limit_page'] == ((int)$dados['n_paginas'] - 1)) {
            $str .= "<li class='disabled'><a href='#' aria-label='Next'><span aria-hidden='true'>»</span></a></li>";
        } else {
            $str .= "<li><a href='" . REQUEST_URI . "{$params[0]}/{$params[1]}/~!/{$qntdd}/{$depois}' aria-label='Next'><span aria-hidden='true'>»</span></a></li>";
        }
        
        $str .= "</ul>";
        $str .= "</nav>";
        
        $pagina = ($dados['limit_page'] + 1);
        $mostrando = $dados['limit_qntdd'];
        $total_registros = $dados['total_registros'];
        $comecando = ($dados['limit_qntdd'] * ($dados['limit_page'] + 1));
        $terminando = ($comecando + $dados['limit_qntdd']);
        $de = $dados['n_paginas'];
        
        if( $terminando > $total_registros){
            $menos = ($terminando - $total_registros);
            $terminando = ($terminando - $menos);
        }
        
        $str .= "<span>Página {$pagina} de {$de}, mostrando {$mostrando} registros de {$total_registros} no total, começando no registro {$comecando}, terminando em {$terminando}</span>";

        return $str;
    }

}
