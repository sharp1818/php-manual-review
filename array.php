<?php 

  $user1 = ['hola','chau','0'];
  echo "$user1[1]";
  echo '<br/>';
  echo count($user1);
  print_r ($user1);
  echo '<br/>';
  $food = array("papa","helado","arroz");
  echo "$food[0]";
  echo '<br/>';
  echo '<h1>associatives arrays</h1>';
  echo '<br/>';
  $age = ['mariana' => 25, 'adrian' => 25, 'shura' => 17];
  echo '<br/>';
  echo $age['mariana'];
  echo '<br/>';

  foreach ($age as $key => $value) {
      echo "name is: " . $key . " age is: " . $value ;
      echo '<br/>';
  };
  echo '<h1>multidimensional array</h1>';
  $multi = array (
      array ('php','javascript','python'),
      array ('laravel', 'symfony', 'nodejs'),
      array ('mysql', 'mongodb', 'couchdb'),
  );
  echo $multi[0][2];
  echo '<br/>';
  echo $multi[1][2];
?>