<?
 
  $url="/data/webapp/drung_www/menu.json";
  $url="http://localhost/menu.json";
  $result = file_get_contents($url);

print $url;
print $result;

  // Will dump a beauty json :3
  var_dump(json_decode($result ));
  var_dump(json_decode($result, true));
  print json_last_error_msg();
  print json_last_error();

?>
