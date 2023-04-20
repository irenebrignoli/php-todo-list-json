<?php

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
  
];

if (isset($_POST['item'])) {
  $todoList[] = $_POST['item'];
}

header("Content-type:application/json");

echo json_encode($todoList);