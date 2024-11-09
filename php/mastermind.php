<?php

function generateCode(): void{
    $secretCode = array(4);
    $temp = rand(0, 6);

    for($i = 0; $i < 4; $i++){
        switch ($temp) {
    
            case 0:
                $secretCode[$i] = "";
                break;
            
            case 1:
                $secretCode[$i] = "";
                break;
    
            default:
            $secretCode[$i] = "error";
            break;
        }
    }
}