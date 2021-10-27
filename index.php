<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <!-- JavaScript Bundle with Popper -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Cocooning</title>
</head>

<body>

    <header class="blog">
        <nav class="navbar navbar-light couleur">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="canape.png" alt="" width="90" class="d-inline-block align-text-center"> Cocooning
                </a>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Recherche" aria-label="🔍">
                    <button class="btn btn-outline-success" type="submit">Recherche</button>
                </form>
            </div>
        </nav>
    </header>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="3.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;"> Serie du moment</font>
                </font>
            </h1>
        </div>
    </div>
    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php
                // Include config file
                require_once "config.php";

                // Attempt select query execution
                $sql = "SELECT * FROM employees";
                if ($result = mysqli_query($link, $sql)) {
                    if (mysqli_num_rows($result) > 0) {

                        while ($row = mysqli_fetch_array($result)) {

                            echo "<div class=\"col\">\n";
                            echo "                    <div class=\"card shadow-sm\">\n";
                            echo "                        <img src=\"".$row["Image"]."\" width=\"\" height=\"\" alt=\"\">\n";
                            echo "                        <div class=\"card-body\">\n";
                            echo "                            <div class=\"d-flex justify-content-between align-items-center\">\n";
                            echo "                                <div class=\"btn-group\">\n";
                            echo "                                    <a role=\"button\" href=\"read.php?id=" . $row["id"] . "\" class=\"btn btn-sm btn-outline-secondary\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Détails</font></font></a>\n";




                            echo "                                </div>\n";
                            echo "                                <small class=\"text-muted\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">" . $row["name"] . "</font></font></small>\n";
                            echo "                            </div>\n";
                            echo "                        </div>\n";
                            echo "                    </div>\n";
                            echo "                </div>";
                        }
                        // Free result set
                        mysqli_free_result($result);
                    } else {
                        echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                    }
                } else {
                    echo "Oops! Something went wrong. Please try again later.";
                }

                // Close connection
                mysqli_close($link);


                ?>



            </div>
        </div>
    </div>
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4  bg-info">
    <p class="col-md-4 mb-0 text-muted">© 2021 Company, Inc</p>

    <a href="/" class="col-md-4 d-flex align-items-center justify-content-center me-md-auto link-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
    </a>

    <ul class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
    </ul>
  </footer>


</body>

</html>