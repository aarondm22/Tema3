<?php

try{
    $a = 0;
    
    if($a==0){
        throw new Exception();
    }
    $a = $a/1;
}catch(Exception $e){
    echo "Error";
}finally{

}

?>