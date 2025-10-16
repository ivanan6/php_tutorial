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
                'autor' => 'DSuzan Kolins',
                
            ],
        ];
    ?>
    <ol>
        <?php foreach ($books as $book): ?>
            <li><?= $book['name']; ?> </li>
        <?php endforeach; ?>
        
    
    </ol>

    
</body>
</html>