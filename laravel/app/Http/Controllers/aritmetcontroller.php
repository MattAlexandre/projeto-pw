<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aritmetcontroller extends Controller
{
    public function cal(int $v1 ,int  $v2)
    {
        
    switch ($operation) {
        case 'soma':
                $sign = '+';
                $result = $v1 + $v2;
            break;
        case 'subtracao':
                $sign = '-';
                $result = $v1 - $v2;
            break;
        case 'multiplicacao':
                $sign = '*';
                $result = $v1 * $v2;
            break;
        case 'divisao':
                $sign = '/';
                $result = $v1 / $v2;
            break;
        default:
            echo "invalido";
            break;
    }

 
    return view("cal" ,['v1' => $v1 , 'v2' => $v2, 'sing' => $sign, 'operation' => $operation , 'result' => $result]);
    echo "resultado " .$result;
    }
}
