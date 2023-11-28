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
            background-color: #f8f9fa;
        }

        header {
            background-color: #343a40;
            padding: 15px 0;
        }

        header a {
            color: white;
        }

        .container {
            margin-top: 20px;
        }

        table {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            
        }

        th {
            background-color: #007bff;
            color: white;
        }

        td a {
            color: #007bff;
            text-decoration: none;
            margin-right: 10px;
        }

        td a:hover {
            text-decoration: underline;
        }

        form {
            display: inline-block; /* Align the form buttons horizontally */
            margin: 0;
        }

        input[type="submit"] {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #c82333;
        }    
        </style>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <title>Mi lista</title>
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
                <tr>
                <th scope="col">id</th>
                <th scope="col">Cancion</th>
                <th scope="col">Artista</th>
                <th scope="col">Album</th>
                <th scope="col">Año</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>

            <?php
                $sql = "SELECT * FROM canciones";
                $result = mysqli_query($conexion, $sql);

                    while ($mostrar = mysqli_fetch_array($result)) {
                    
            ?>

            <tbody>
                <tr>
                <th><?php echo $mostrar['id'] ?></th>
                <td><?php echo $mostrar['nombre'] ?></td>
                <td><?php echo $mostrar['artista'] ?></td>
                <td><?php echo $mostrar['album'] ?></td>
                <td><?php echo $mostrar['ano'] ?></td>
                <td>
                    <!--  Editar --->
                    <a href="editar.php?id=<?php echo $mostrar['id'] ?>">Editar</a>
                    <!--  Eliminar --->
                    <form action="eliminar.php" method="POST">
                        <input type="hidden" value="<?php echo $mostrar['id'] ?>" name="id" readonly>
                        <input type="submit" value="Eliminar" name="btnEliminar">
                    </form>
                </td>
            <?php   
                }
            ?>
            </tbody>
        </table>
                </div>
            </div>
        </div>
        

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        
    </body>
</html>