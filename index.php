<!DOCTYPE html>
<html lang="en-us">
  <head>
  </head>
  <body>
    <section class="page-header">
    </section>

    <section class="main-content">
    <br/> <br/>
    <a href="/iOS-Universal-Links/oneapp.html">OneApp123</a>
      
<?php
  #remove the directory path we don't want
  $request  = str_replace("/oneapp/", "", $_SERVER['REQUEST_URI']);
 
  #split the path by '/'
  $params     = split("/", $request);
  print $params[0];
  print $params[1];
?>
      <footer class="site-footer">
      </footer>

    </section>

  
  </body>
</html>
