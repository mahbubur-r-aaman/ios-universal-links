<?php
  #remove the directory path we don't want
  $request  = str_replace("/oneapp/", "", $_SERVER['REQUEST_URI']);
 
  #split the path by '/'
  $params     = split("/", $_request);
  $json_encoded_param = json_encode($params);
  print $params; 
?>
