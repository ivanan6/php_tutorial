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
            "Ikigai",
            "Atomske navike",
            "Osvit dana zetve"
        ];
    
    ?>
    <ol>
        <!-- skraceno -->
        <?php foreach ($books as $book): ?>
        <li> <?= $book?> </li>
        <?php endforeach ?>
        <!-- duzi oblik -->
        <?php foreach ($books as $book) { ?>
            <li> <?= $book ?></li>

        <?php } ?>

        <?php foreach ($books as $book){
            echo "<li> {$book}™</li>";
        }        
        ?>

        <?php foreach ($books as $book) : ?>
            <!-- to do -->
        <?php endforeach ?>
        
    
    </ol>

    
</body>
</html>