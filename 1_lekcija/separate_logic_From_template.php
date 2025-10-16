<?php 

$books = [
    [
        'name' => 'Ikigai',
        'autor' => 'Ektor Garsija, Fransesk Miraljes',
        

    ],
    [
        'name' => 'Atomse navike',
        'autor' => 'Džejms Klir',
        
    ],

    [
        'name' => 'Osvit dana zetve',
        'autor' => 'Suzan Kolins',
        
    ],
    [
        'name' => 'Igre gladi',
        'autor' => 'Suzan Kolins',
        
    ],
];

function filter($items,$fn){
    $filter = [];
    foreach ($items as $item){
        if($fn($item))
            array_push($filter,$item);
    }
    // print_r($filter);
    return $filter;
    
}
$filterKnjige = array_filter($books,function($book){
    return $book['name']=== 'Igre gladi';
});

require "index.view.php"
        
?>
