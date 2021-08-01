<!DOCTYPE html>
<html>
<head>
    <title>Лист Заданий</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="d-flex justify-content-center p-3">
        <div class="p-3 bg-light border rounded-3">
          <h3>To do list от Парасат Утебай</h3>
          <p class='text-center'>C использованием Laravel Eloquent.
          <a href='#'>Github код сайта</a></p>
        </div>
      </div>
  <form method="post" action="/submit" class="container d-flex justify-content-center">
    @csrf
    <input type="text" name="task" class="form-control mb-3" placeholder="Введите задачу...">
    <div class='p-1'>
    <button type="submit" class="btn btn-primary mb-3">Отправить</button>
    </div>
  </form>

<table class="container bg-light border">
    <thead>
        <tr>
            <th>Номер</th>
            <th>Задание</th>
            <th style="width: 90px">Удалить</th>
        </tr>
    </thead>

    <tbody>
<?php
$i=1;
?>
@foreach($tasks as $task)
<tr>
        <td>{{$i}}</td>
        <td class="task"> {{$task->task}} </td>
        <td class="delete">
            <a href="/delete/{{$task->id}}">X</a>
        </td>
</tr>
<?php
$i++;
?>
@endforeach
    </tbody>
</table>

</body>
</html>