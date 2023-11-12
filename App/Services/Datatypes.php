<?php

function varchar($valor)
{
    return "'" . $valor . "'";
}

function bit($valor){
    if($valor){
        return "b'1'";
    }else{
        return "b'0'";
    }
}
