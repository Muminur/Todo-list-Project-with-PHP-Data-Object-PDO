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
    <h1 class="text-center">Add new item into the Todo List with PHP Data Object Example</h1>
    <p class="text-center">
        <a href="index.php" class="btn btn-primary btn-lg" >All Job List</a>
        <button type="button" class="btn btn-danger btn-lg">I want to sleep! Delete'em </button>
    </p>
    
    <?php
        include('includes/dbh.php');
        if(isset($_POST['task'])){ 

              //PDO magic insert it into database safely Named Placeholder
              $STH= $DBH->prepare("INSERT INTO todo_table(title) values(:title)");

              $STH->bindParam(':title',$title);
              $title=htmlspecialchars($_POST['task']);

              $STH->execute();

              ?>
              <script type="text/javascript">alert('Successfully Added, bro!');</script>

        <?php } ?>

        <form action="#" method="post">
          <div class="form-group text-center">
              <label >Write what you want to do </label>
              <textarea name="task" required autofocus></textarea>
              <button type="submit" class="btn btn-default">Submit</button>
          </div>

        </form>


    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>