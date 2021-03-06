<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">

  <link rel="stylesheet" href="/css/style-2.css">

  <link rel="icon" href="/images/favicon.ico"/>   
  
  <title><?= $title ?>::<?= $meta['title'] ?></title>

  <!-- icon font -->
  <script src="/js/all.js" defer></script>
  <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed&display=swap" rel="stylesheet">
</head>

<body>  

  <div class="wrapper">

    <header>        
      PHP & Bootstrap - <span class="text-danger">NO JS</span>
    </header>

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