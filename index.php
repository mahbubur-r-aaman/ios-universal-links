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
  print "<br/> <p>" . "parameter: " . $params[0] . "</p>";
      
  print "\r\n";
  
 // print "Request Operating System: " . $_SERVER['HTTP_USER_AGENT'];
      
    print "\r\n";
      
$iPod    = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
$iPhone  = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$iPad    = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
$Android = stripos($_SERVER['HTTP_USER_AGENT'],"Android");
      
//do something with this information
if( $iPod || $iPhone || $iPad){
   // print "Request Operating System is : iOS";
    print "<br/> <p>" . "parameter: " . "Request Operating System is : iOS" . "</p>";
} else if($Android){
    //print "Request Operating System is : Android";
    print "<br/> <p>" . "parameter: " . "Request Operating System is : Android" . "</p>";
}else if($webOS){
    //print "Request Operating System is : webOS";
    print "<br/> <p>" . "parameter: " . "Request Operating System is : Android" . "</p>";
}
  
 // print "parma 1: " . $params[1];
?>
      <footer class="site-footer">
      </footer>

    </section>

  
  </body>
</html>
