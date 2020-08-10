<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


    <title>Todo Show</title>
  </head>
  <body>
  <div class="container mt-5 ">
<h1 class="text-center bg-light color-warning">TODoList Website✔</h1>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary float-right mb-2" data-toggle="modal" data-target="#exampleModalCenter">
  Add Record➕
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Add Record here</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form method="post" action="todo_submit">
 @csrf
  <div class="form-group">
    <label for="Name">Name</label>
    <input type="text" class="form-control" name="name" id="Name" aria-describedby="Name" placeholder="Enter Name">
  </div>
  <div class="form-group">
   <label for="Surname">Surname</label>
    <input type="text" class="form-control" id="Surname" name="surname" aria-describedby="Surname" placeholder="Enter Surname">
  </div>

      </div>
      <div class="modal-footer">
         <input type="submit" name="submit" class="btn btn-primary">
</form>

      </div>
    </div>
  </div>
</div>


      {{ session('msg') }}
     <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">SURNAME</th>
      <th scope="col">CREATED AT</th>
      <th scope="col">Delete </th>
      <th scope="col">Edit  </th>
    </tr>
  </thead>
  <tbody>

        @foreach ($todoarr as $item )
         <tr>
         <td scope="col">{{ $item['id']}}</td>
         <td scope="col">{{ $item['name']}}</td>
         <td scope="col">{{ $item['surname']}}</td>
         <td scope="col">{{ $item['created_at']}}</td>
          <td scope="col"><a href="todo_delete/{{ $item['id']}}" class="btn btn-danger">Delete❌</a></td>
          <td scope="col"><a href="todo_edit/{{ $item['id']}}" class="btn btn-success">Edit✔</a></td>
          </tr>
        @endforeach


  </tbody>
</table>
  </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


  </body>

</html>
