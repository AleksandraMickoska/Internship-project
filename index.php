<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="./assets/style.css" rel="stylesheet">
    <title>Internship Project</title>
  </head>
</head>
<body>  
    <nav class="navbar navbar-expand-lg navbar-light bg-light border border-dark border-top-0">
        <div class="container-fluid">
          <a class="navbar-brand m-2" href="index.php"><img src="./assets/Wine-Dine-Logo-New.png" id="logo"></a>          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
              <li class="nav-item">
                <a class="nav-link active fw-bold" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle fw-bold" href="index.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 Info
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="./MenuPagesLayouts/news.php">News</a></li>
                  <li><a class="dropdown-item" href="./MenuPagesLayouts/aboutUs.php">About Us</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item fw-bold" href="./MenuPagesLayouts/contact.php">Contact</a></li>
                </ul>
              </li> 
              <li class="nav-item">
                <a class="nav-link fw-bold" aria-current="" href="./MenuPagesLayouts/recipes.php">Recipes</a>
              </li>     
              <li class="nav-item">
                <a class="nav-link fw-bold " aria-current="" href="./MenuPagesLayouts/takeASip.php">Take a sip</a>
              </li>  
              <li class="nav-item">
                <a class="nav-link fw-bold" aria-current="" href="./MenuPagesLayouts/howTo.php">How to</a>
              </li> 
            </ul>
            <form class="d-flex">
                <a class="btn btn-outline-dark fw-bold" href="./MenuPagesLayouts/search.php">Search here</a> 
            </form>
          </div>
        </div>
    </nav> 

    <div id="hero" class="text-center p-3">           
        <p class="fw-bolder" id="saying1">Anybody can wine and dine, but it takes courage to truly Shine.-RVM - Author: R.v.m.</p>
        <img src="./assets/wine.jpg">
        <p class="p-3 m-3 fw-bolder">Here you can find every recipe and advice needed for your shine! Enjoy your stay!</p>
    </div>
    <footer class="footer bg-dark  p-3 m-0">
        <div class="text-center">            
            <p class="text-white fw-bold pt-3">"There is no sincere love than the love of food"  - George Bernard Shaw </p>
         </div>          
    </footer>
  
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>




