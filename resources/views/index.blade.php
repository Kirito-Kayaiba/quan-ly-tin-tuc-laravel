<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" media = 'screen and (max-width: 768px)' href="/css/mobile.css">
  <link href="https://fonts.googleapis.com/css?family=Lato|Staatliches&display=swap" rel="stylesheet">
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
  <script src="https://kit.fontawesome.com/85a5fdd30e.js" async></script>

  <title>NewsGrid | Your News Website</title>
</head>
<body>
  <nav id="main-nav">
    <div class="container">
      <img src="../img/logo.png" alt="NewsMedia" class="logo">
      <ul>
        <li><a href="/index" class="current">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/danhmuc">Category</a></li>
      </ul>
      <div class = 'social'>
        <form class="search-form" action="search.php" method="get">
          <input type="text" name="q" placeholder="Search...">
          <button type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
 @yield('content')
  <footer id = 'main-footer' class = 'py-2'>
    <div class="container footer-container">
      <div>
        <img src="../img/logo_light.png" alt="logo">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Praesentium quod ratione veniam sit harum excepturi sed quos dignissimos maxime consequatur.</p>
      </div>
      <div>
        <h3>Email Newsletter</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <form>
          <input type="email" placeholder="Email:" required>
          <input type="submit" value="Subscribe" class = 'btn btn-primary'>
        </form>
      </div>
      <div>
        <h3>Site Links</h3>
        <ul class = 'list'>
          <li><a href="#">Help and Support</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
      <div>
        <h2>Join our Club</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, provident.</p>
        <a href="#" class="btn btn-secondary">Join Now</a>
      </div>
      <div>
        <p>
          Copyright NewsGrid &copy; 2019, All Rights reserved. 
        </p>
      </div>
    </div>
  </footer>
</body>
</html>