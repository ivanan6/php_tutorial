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

        function autorFilter($books,$ime){
            $filter = [];
            foreach ($books as $book){
                if($book['autor']===$ime)
                    array_push($filter,$book);
            }
            // print_r($filter);
            return $filter;
            
        }
    ?>
    <ol>
        <?php foreach ($books as $book): ?>
            <?php if ($book['autor']==='Suzan Kolins') : ?>
                <li><?= $book['name']; ?> </li>
            <?php endif ?>
        <?php endforeach; ?>

        <?php foreach (autorFilter($books,'Suzan Kolins') as $book): ?>
            
            <li><?= $book['name']; ?> </li>
           
        <?php endforeach; ?>
        
    
    </ol>

    
</body>
</html>