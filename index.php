<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <h1 class="text-center">Todo List with PHP Data Object Example</h1>
    <p class="text-center">
        <a class="btn btn-primary btn-lg" href="add_job.php">Add New To-do work</a>
        <button type="button" class="btn btn-danger btn-lg">I want to sleep! Delete'em </button>
    </p>
    <h2 class="text-center">Job-List</h1>
    <div class="text-center">
    <?php
      include('includes/dbh.php');
      $STH = $DBH->query('Select id, title from todo_table');
      $STH->setFetchMode(PDO::FETCH_ASSOC);
      echo "<hr/>";
      while($row=$STH->fetch()){

        echo "<h4>";
        echo $row['id'] . ") " .$row['title'] ;
        echo "</h4>";
         ?>

        <!-- delete button -->
        <form action="delete_job.php" method="post">
          <input type="hidden" name="delete_id" value="<?php echo $row['id'] ?>">

          <button class="btn btn-success" type="submit">Mark This As Complete</button>


        </form>

       


        <hr/>


        
      <?php } ?>
  </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>