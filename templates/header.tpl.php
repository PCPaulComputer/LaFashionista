<?php 
/**
 * Author: Paul Madduma
 * Code for Header Template
 */
?>
<!DOCTYPE html>
<html lang="en">
<?php 
require_once './classes/fashion.php';
$fashion = new Fashion;
require_once './classes/subscribe.php';
$subscribe = new Subscribe;
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Paul Madduma">
    <meta name="description" content="La Fashionista website decribes topics in fashion style and more. Picture credits from contributors of pexels.com and unsplash.com">
    <meta name="keywords" content="fashion, fashion style, fashion blog, styling clothes, apparel fashion, clothes,styling blog about fashion, wearing different types of clothes ">
    <title><?php echo $fashion->title; ?></title>
    <!--Style -->
    <!-- Establish a baseline -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Link to 3rd party assets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700%7cOpen+Sans:300,400,700">
    <!-- Link to our stylesheet -->
    <link rel="stylesheet" href="css/style.min.css">
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/fashion-styles.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <!--Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Tangerine:wght@700&family=Ubuntu&display=swap" rel="stylesheet"> 
</head>
<body>
  <header>
    <!-- NAV BEGINS -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="#"><span class="nav-logo"><?php echo $fashion->title; ?></span></a>
      <button class="navbar-toggler bg-danger text-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="nav-bar">
          <li class="nav-item">
            <a class="nav-link text-light <?php echo $subscribe->active_page('cities'); echo $subscribe->default_page(); ?>" href="index.php?page=cities" name="cities">The Big 4 Cities</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light <?php echo $subscribe->active_page('women'); ?>" href="index.php?page=women" name="women">Women</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light <?php echo $subscribe->active_page('men'); ?>" href="index.php?page=men" name="men">Men</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light <?php echo $subscribe->active_page('lifestyle'); ?>" href="index.php?page=lifestyle" name="lifestyle">Lifestyle</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light <?php echo $subscribe->active_page('culture'); ?>" href="index.php?page=culture" name="blog">Culture</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light " href="#subscribeAndSave">Subscribe & Save</a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- NAV ENDS -->   

  </header>