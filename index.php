<!DOCTYPE html>
<html lang="en-us">
  <head>
  </head>
  <body>
    <section class="page-header">
    </section>

    <section class="main-content">
    <br/> <br/>
      
<?php
  #remove the directory path we don't want
  $request  = str_replace("/n/", "", $_SERVER['REQUEST_URI']);
 
  #split the path by '/'
  $params     = split("/", $request);
  print "<br/> <br/> <p>" . "Parameter from Email (N-Link) : " . $params[0] . "</p>"; //  
      
  
  
 // print "Request Operating System: " . $_SERVER['HTTP_USER_AGENT'];
      

      
$iPod    = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
$iPhone  = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$iPad    = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
$Android = stripos($_SERVER['HTTP_USER_AGENT'],"Android");
      
//do something with this information
if( $iPod || $iPhone || $iPad){
   // print "Request Operating System is : iOS";
    print "<br/> <br/> <p>". "Request Operating System is : iOS" . "</p>";
} else if($Android){
    //print "Request Operating System is : Android";
    print "<br/> <br/> <p>". "Request Operating System is : Android" . "</p>";
}else if($webOS){
    //print "Request Operating System is : webOS";
    print "<br> <br/> <p>" . "Request Operating System is : Android" . "</p>";
}
      
  $iosRandVal = "pqrs4567"; 
  print "<br/> <br/> <p>" . "Parameter for iOS User: " . $iosRandVal . "</p>";
      
// print ' <br/> <br/> <form> Just Copy the text, you will be directed to OneApp: <input type="text" name="iOSRandVal" value = '. $iosRandVal . ' </input><br></form> '; 
 // print "parma 1: " . $params[1];
      
//  print "<br/> <br/> <p>" . "<a href='https://itunes.apple.com/us/app/smart-home/id885787515?mt=8'> Open this app in AppStore </a> ". "</p>";  

      print "<br/> <br/> <p>" . "<a href='http://iosuni.herokuapp.com/viewinvite.php'> View Invite </a> ". "</p>"; 
      ?>
      
      
      <footer class="site-footer">
      </footer>

    </section>

  
  </body>
</html>
