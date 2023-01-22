<?php

use App\Models\Traduzir;
$traduzir_pt=Traduzir::where('local','pt')->get();
$array=[];

foreach ($traduzir_pt as $pt) {
    # code...
    $key=$pt->key;
    $value=$pt->value;
    $array = $array + [$key => $value];
}

return $array;
