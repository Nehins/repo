<?php
    $count=$_COOKIE['count'];
    if(isset($count)){
        $count++;
    }else{
        $count=0;
    }

    setcookies('count',$count);
    echo $count;

?>

