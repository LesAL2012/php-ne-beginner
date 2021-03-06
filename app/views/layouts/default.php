<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">

  <link rel="stylesheet" href="/css/style.css">

  <link rel="icon" href="/images/favicon.ico"/>   
  
  <title><?= $title ?>::<?= $meta['title'] ?></title>
  <meta name="description" content="<?= $meta['desc'] ?>">
  <meta name="keywords" content="<?= $meta['keywords'] ?>">

  <!-- icon font -->
  <script src="/js/all.js" defer></script>
  <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed&display=swap" rel="stylesheet">
</head>

<body>  

  <div class="wrapper">

    <header>        
      PHP & Bootstrap - <span class="text-danger">NO JS</span>
    </header>    
   
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
      <div class="container">        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="/">Home</a>
            <a class="nav-item nav-link" href="/table">Урок 1</a>
            <a class="nav-item nav-link" href="/table/color">Урок 2</a>
            <a class="nav-item nav-link" href="/form">Урок 3</a>
          </div>          
        </div>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link btn btn-secondary mr-1" href="https://github.com/LesAL2012/php-ne-beginner" target="_blank"><i class="fab fa-github"></i> &rarr; BEGINNER</a>
          </div>          
        </div>
      </div>
    </nav>  

    <div class="content">
      <div class="container">

          <?= $content ?>
      
      </div>
    </div>

    <footer>
      <div class="container">        
        <div class='row text-center' >
            <div class='col-lg-2 col-md-4 col-sm-4 col-4' >
                <a href='https://resume.ts.biz.ua/' target='_blank' class='text-white' rel="noopener noreferrer">
                    <?= date('Y') ?> &copy; O.LES
                </a>
            </div>
            <div class='col-lg-2 col-md-4 col-sm-4 col-4'>
                <i class="fab fa-react"></i> REACT
            </div>
            <div class='col-lg-2 col-md-4 col-sm-4 col-4'>
                <i class="fab fa-html5"></i> HTML &nbsp;&&nbsp; <i class="fab fa-css3-alt"></i> CSS
            </div>
            <div class='col-lg-2 col-md-4 col-sm-4 col-4'>
                <i class="fab fa-js-square"></i> JS
            </div>
            <div class='col-lg-2 col-md-4 col-sm-4 col-4'>
                <i class="fab fa-php"></i> PHP
            </div>
            <div class='col-lg-2 col-md-4 col-sm-4 col-4' >
                <a href='https://github.com/LesAL2012?tab=repositories' target='_blank' class='text-white' rel="noopener noreferrer">
                    <i class="fab fa-github"></i> GITHUB
                </a>
            </div>
          </div >
      </div>
    </footer>

  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="/bootstrap/js/bootstrap.min.js"></script>
  <script src="/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>