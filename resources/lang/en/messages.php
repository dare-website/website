<?php
use App\Models\Traduzir;
$traduzir_pt=Traduzir::where('local','en')->get();
$array=[];

foreach ($traduzir_pt as $en) {
    # code...
    $key=$en->key;
    $value=$en->value;
    $array = $array + [$key => $value];
}

return $array;

