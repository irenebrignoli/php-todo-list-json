<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- css -->
  <link rel="stylesheet" href="style.css">
  <title>Todo List</title>
</head>

<body>
  <div id="app">

    <div class="container">

      <div class="ms_card mt-5">

        <h1 class="text-center mb-4 text-success fw-bolder fs-2">My todo list</h1>
        <ul class="list-group">
          <li v-for="(item,index) in todoList" class="list-group-item">
            <span :class="item.done==true?'text-decoration-line-through':''" @click="trueOrFalse(index)">{{item.text}}</span>
          </li>
        </ul>

        <div class="d-flex mt-3 justify-content-between">
          <input v-model="todoItem" type="text" @keyup.enter="addItem"  class="form-control w-75">
          <button @click="addItem" class="btn btn-secondary">Aggiungi</button>
        </div>
       
      </div>
      
    </div>
    
  </div>

  <!-- vue -->
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <!-- axios -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.6/axios.min.js" integrity="sha512-06NZg89vaTNvnFgFTqi/dJKFadQ6FIglD6Yg1HHWAUtVFFoXli9BZL4q4EO1UTKpOfCfW5ws2Z6gw49Swsilsg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- main -->
  <script src="main.js"></script>
</body>

</html>