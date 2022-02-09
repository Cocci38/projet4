<?php
    if(is_array($match)){
        if(is_callable($match['target'])){
            call_user_func_array($match['target'],$match['params']);
        }else{
            $params=$match['params'];
            ob_start();
            require "../app/views/{$match['target']}View.php";
            $pageContent=ob_get_clean();
        }

        require "../app/views/elements/layout.php";
    }else{
        require "../app/views/errorView.php";
    }
    
?>
