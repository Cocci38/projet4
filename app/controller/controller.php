<?php
    if(is_array($match)){
        require "../app/views/elements/header.php";
        if(is_callable($match['target'])){
            call_user_func_array($match['target'],$match['params']);
        }else{
            $params=$match['params'];
            require "../app/views/{$match['target']}.php";
        }
    }else{
        require "../app/views/error.php";
    }
    require "../app/views/elements/footer.php";
?>