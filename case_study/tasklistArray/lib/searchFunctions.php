<?php
/**
 * Funzione di ordine superiore(cioè una funzione che restituisce una funzione)
 */
function searchText($searchText)
{
    return function($taskItem) use ($searchText)
    {
        $result=strpos($taskItem['taskName'], $searchText) !==false;
        return $result;
        //print_r($searchText);
        //print_r($taskItem);
    };
}




?>