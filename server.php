<?php

/*
$todoList = [
  [
    'text'=>'lavare i panni',
    'done'=> false
  ],
  [
    'text'=>'fare la spesa',
    'done'=> false
  ],
  [
    'text'=>'comprare le scarpe',
    'done'=> false
  ],
  [
    'text'=>'fare un riposino',
    'done'=> false
  ],
  
];*/

if(file_exists('database.json')){
  $string = file_get_contents('database.json');
  $todoList = json_decode($string, true);
}eLse{
  $todoList=[];
}

if (isset($_POST['item'])) {
  $todoList[] = $_POST['item'];

  $newString = json_encode($todoList);
  file_put_contents('database.json', $newString);
}

header("Content-type:application/json");

echo json_encode($todoList);


//class="item.done==true?'text-decoration-line-through':''"