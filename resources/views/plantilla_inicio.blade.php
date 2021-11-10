<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <title>Plantilla</title>
</head>
<body>
    <div>
        <div class="contenedor">
            <header class="head">
                <div class="titulo">
                    <h1>Task disk:</h1>
                </div>
                <div class="icono">
                   <i class="fab fa-stack-overflow"></i> 
                </div>
            </header>
        </div>
        <p>@yield("numero")</p>
    </div>
    

    
</body>
</html>