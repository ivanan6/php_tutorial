<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

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

        
    ?>
    <ol>
        <?php foreach ($filterKnjige as $book): ?>
            <li><?= $book['name']; ?> </li>
        <?php endforeach; ?>

      
        
    
    </ol>

    
</body>
</html>