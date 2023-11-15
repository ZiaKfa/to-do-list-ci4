<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Edit Task</title>
  </head>
  <body>
    <form action="<?= base_url('/updateTask')?>" method="post">
    <div class= "container">
        <h1 class="text-center">Edit Task Data</h1>
        <input type="hidden" id="id" name = "id" value ="<?= $task_data->id ?>">
        <div class="mb-3">
            <label for="task" class="form-label">Task :</label>
            <input type="text" class="form-control" id="task" name ="task" value ="<?= $task_data->task ?>" >
        </div>
        <div class="mb-3">
            <label for="task" class="form-label">Due Date :</label>
            <input class="form-control" type="date" id="dueDate" name = dueDate value ="<?= $task_data->dueDate ?>">
        </div>
        <div class="mb-3">
            <label for="task" class="form-label">User :</label>
            <select class="form-select" aria-label="Default select example" name = "assignedToString" id="assignedToString">
                <?php foreach($users as $user): ?>
                    <option value="<?= $user->name ?>"
                        <?php if ($task_data->assignedToString == $user->name): ?>
                            <?php echo "selected" ?>
                        <?php endif?>
                    ><?= $user->name ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <input class="form-check-input" type="checkbox" value="1" id="done" name = done
                <?php if ($task_data->done == 1): ?>
                    <?php echo "checked" ?>
                <?php endif?>
            >
                <label class="form-check-label" for="done">
                    Done
                </label>
        </div>
        <div class = "mb-3">
            <button type = submit class = "btn btn-primary" name = "submit" id = "submit">Submit</button>
            <a href="<?= base_url('/task') ?>" class = "btn btn-primary">Go back</a>
        </div>
    </div>
    </form>
    
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