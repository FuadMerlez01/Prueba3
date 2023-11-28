<?php

include('db.php');

?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
        body {
            background-color: #191414; /* Spotify background color */
            color: #1DB954; /* Spotify green color */
        }

        header {
            background-color: #121212; /* Dark background color */
            padding: 15px 0;
        }

        header a {
            color: #1DB954; /* Spotify green color */
        }

        .container {
            margin-top: 20px;
        }

        table {
            background-color: #121212; /* Dark background color */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            color: #1DB954; /* Spotify green color */
        }

        th, td {
            text-align: center;
        }

        th {
            background-color: #191414; /* Spotify background color */
            color: #1DB954; /* Spotify green color */
        }

        form {
            background-color: #121212; /* Dark background color */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            color: #1DB954; /* Spotify green color */
        }

        p {
            font-weight: bold;
            margin-top: 10px;
            color: #1DB954; /* Spotify green color */
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #1DB954; /* Spotify green color */
            border-radius: 4px;
            color: #1DB954; /* Spotify green color */
        }

        input[type="submit"] {
            background-color: #1DB954; /* Spotify green color */
            color: #191414; /* Spotify background color */
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }

        input[type="submit"]:hover {
            background-color: #25b960; /* Lighter green on hover */
        }
        </style>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <title>Editar</title>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        <a class="nav-link" href="mostrar.php">Tabla</a>
                    </div>
                    </div>
                </div>
            </nav>
        </header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <table class="table table-stripe">
            <thead>
                
            </thead>
            <tbody>
            <?php
                $id = $_GET["id"];
                $sql = "SELECT * FROM canciones where id='$id'";
                $result = mysqli_query($conexion, $sql);

                    while ($mostrar = mysqli_fetch_array($result)) {
                    
            ?>
                <form action="procesar_editar.php" method="POST">
                    <input type="hidden" value="<?php echo $mostrar['id'] ?>" name="id">
                    <p>Cacion</p>
                    <input type="text" value="<?php echo $mostrar['nombre'] ?>" name="nombre">
                    <p>Artista</p>
                    <input type="text" value="<?php echo $mostrar['artista'] ?>" name="artista">
                    <p>Album</p>
                    <input type="text" value="<?php echo $mostrar['album'] ?>" name="album">
                    <p>Año</p>
                    <input type="text" value="<?php echo $mostrar['ano'] ?>" name="ano"><br>
            <?php   
                }
            ?>
                    <input type="submit" value="ACTUALIZAR">
                </form>
            </tbody>
        </table>
                </div>
            </div>
        </div>
        

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        
    </body>
</html>