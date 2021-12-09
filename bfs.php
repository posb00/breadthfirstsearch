<?php


function BreadthFirstSearch($root)
{
    if($root == null) return [];
    
    $queue = [ $root ];
    $result = [];

    while(count($queue) > 0){
      
        $current = array_shift($queue);
        array_push($result, $current->val);
        if($current->rigth) array_push($queue, $current->rigth);
        if($current->left) array_push($queue, $current->left);
        
    }

    return $result;
}





?>