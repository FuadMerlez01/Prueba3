<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            <style>
        body {
            background-color: #f8f9fa; /* Bootstrap default background color */
            color: #495057; /* Bootstrap default text color */
        }

        header {
            background-color: #007bff; /* Bootstrap primary color */
            padding: 15px 0;
        }

        header a {
            color: #ffffff; /* Bootstrap default light text color */
        }

        .container {
            margin-top: 20px;
        }

        form {
            background-color: #ffffff; /* Bootstrap default light background color */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            color: #495057; /* Bootstrap default text color */
        }

        label {
            color: #495057; /* Bootstrap default text color */
            margin-bottom: 5px;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ced4da; /* Bootstrap default border color */
            border-radius: 4px;
            color: #495057; /* Bootstrap default text color */
        }

        .btn-primary {
            background-color: #007bff; /* Bootstrap primary color */
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3; /* Darker blue on hover */
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
                <div class="col-md-6 mx-auto my-5">
                    <form class="row g-3 needs-validation" id="formulario" action="registro.php" method="POST">
                        <div class="col-md-4 position-relative">
                            <label for="validationTooltip01" class="form-label">Cancion</label>
                            <input type="text" class="form-control" name="nombre" id="validationTooltip01" required>
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-4 position-relative">
                            <label for="validationTooltip02" class="form-label">Artita</label>
                            <input type="text" class="form-control" name="artista" id="validationTooltip02" required>
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-4 position-relative">
                                <label for="validationTooltip02" class="form-label">Album</label>
                                <input type="text" class="form-control" name="album" id="validationTooltip02" required>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-4 position-relative">
                                    <label for="validationTooltip02" class="form-label">Año</label>
                                    <input type="text" class="form-control" name="ano" id="validationTooltip02" required>
                                        <div class="valid-tooltip">
                                            Looks good!
                                        </div>
                                    </div>
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Registar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <!-- Option 2: Separate Popper and Bootstrap JS -->
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        
    </body>
</html>