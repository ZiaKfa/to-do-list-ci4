<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Task Table</title>
  </head>
  <body>
    <div class="container">
        <h1 class="text-center">Tasks Table</h1>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Task</th>
      <th scope="col">Assigned To</th>
      <th scope="col">Is Done</th>
      <th scope="col">Due Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; ?>
    <?php foreach($tasks as $task): ?>
      <tr>
        <th scope="row"><?php echo $i ?></th>
        <td><?= $task->task ?></td>
        <td><?= $task->assignedToString ?></td>
        <td><form action="<?= base_url('/taskToggle')."/".$task->id ?>" method="post">
            <input type="hidden" id="id" name = "id" value ="<?= $task->id ?>">
            <input type="hidden" id="done" name = "done" value ="<?= $task->done ?>">
            <button type = submit name = "submit" id = "submit"><?= $task->done == 1 ? '✅' : '❌' ?></button>
          </form></td>
        <td><?= $task->dueDate ?></td>
        <td>
          <a href="<?= base_url('/editTask')."/".$task->id ?>" class = "btn btn-warning">Edit</a>
          <a href="<?= base_url('/deleteTask')."/".$task->id ?>" class = "btn btn-danger">Delete</a>
        </td>
      </tr>
      <?php $i++;?>
    <?php endforeach; ?>
  </tbody>
</table>
<a href="<?= base_url('/addTask') ?>" class = "btn btn-primary">Add new Task</a>
<a href="<?= base_url('/') ?>" class = "btn btn-primary">Back to Home</a>
    </div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>