<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Demo</title>
    <style>
        .body{
        display: grid;
        place-items: center;
        height: 100vh;
        font-family: sans-serif;
}
    </style>
</head>

<body>
    <?php 
            $name = "Ivana";
            $read = true;
            $poruka = "";
            if ($read){
                $poruka =  $name . " je procitala knjigu";
            }else {
                $poruka = $name . " nije procitala knjigu";
            }

        ?>
    <h1> 
        <?= $poruka;?>
        
    </h1>
    
</body>
</html>