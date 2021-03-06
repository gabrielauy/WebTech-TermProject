<!DOCTYPE HTML>
<?php
  session_start();
  include 'phpinclude/database.php';
  $database = new database;
  $database->topic_show();
  $username=$_SESSION['username'];
  $profile = new database;
  $profile->user_profile($username);
?>

<?php 
    // initialize errors variable
  $errors = "";

  // connect to database
  $db = mysqli_connect("localhost", "root", "", "finals");

  // insert a quote if submit button is clicked
  if (isset($_POST['submit'])) {
    if (empty($_POST['task'])) {
      $errors = "You must fill in the task";
    }else{
      $task = $_POST['task'];
      $sql = "INSERT INTO taskform (task) VALUES ('$task')";
      mysqli_query($db, $sql);
      header('location: todolist.php');
    }

  } 

  if (isset($_GET['del'])) {
  $id = $_GET['del'];

  mysqli_query($db, "DELETE FROM taskform WHERE task_id=".$id);
  header('location: todolist.php');
}

?>




<html>
  <head>
    <title>WebTech 2018</title>
    <link rel="icon" href="images/Logo.png">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/main.css" />

  <body class="subpage">

    <!-- Header -->
      <header id="header">
        <div class="logo"><a href="home.php">WebTech <span>2018</span></a></div>
        <a href="#menu">Menu</a>
      </header>

    <!-- Nav -->
      <nav id="menu">
        <div class="inner">
        <h2 style="color:grey">Hello <?php 
            foreach($profile->data as $prof)
            { ?>            
              <?php echo $prof['first_name'];?>
              <?php echo $prof['last_name'];?>
              <?php } ?> !
          </h2>
        </div>
        <ul class="links">
          <li><a href="home.php">Home</a></li>
          <li><a href="notes.php">Finals</a></li>
          <li><a href="quizzer.php">Quizzer</a></li>
          <li><a href="glossary.php">Glossary</a></li>
          <li><a href="todolist.php">To do list</a></li>
          <li><form action = "phpinclude/logout-dbase.php" method="POST">
                    <button type ="submit" name ="submit"> Logout </button>
                    </form></li>
          
        </ul>
      </nav>

    <!-- One -->
      <section id="One" class="wrapper style3">
        <div class="inner">
          <header class="align-center">
            <p>Check out your</p>
            <h2>To do list</h2>
          </header>
        </div>
      </section>

    <!-- Two -->
      <section id="two" class="wrapper style4">
        <div class="inner">
          
            <div class="container">
              <html>

              <form method="post" action="todolist.php" autocomplete="off">
                <?php
                if (isset($errors)) { ?>
                    <p><?php echo $errors; ?> </p>
                 <?php } ?>
                  <section id="One" class="wrapper style5">
                <input type="text" name="task" row="5" class="form-group"><br>
                <button type="submit" class="btn btn-primary" name="submit">Add Task</button>
              </section>
              </form>
      
            </div>
        </div>
      </section>

      <div class="container-fluid">
        <table class="align-center">
              <thead>
                <tr>
                  <th scope="col" class="align-center">#</th>
                  <th scope="col" class="align-center">Task</th>
                  <th scope="col" class="align-center">Action</th>
                </tr>
              </thead>
        
        <?php
        $con = mysqli_connect('localhost', 'root', '', 'finals');
        $sql = "SELECT * FROM taskform";
        $result = mysqli_query($con,$sql);
        $resultCheck = mysqli_num_rows($result);
        
        if ($resultCheck > 0) {
       $i = 1; while ($row = mysqli_fetch_assoc($result)) {
           extract($row);
           ?>     
                <tr>
                  <td><?php echo $i ?></td>
                  <td><?php echo $row['task']; ?></td>
                  <td><a href="todolist.php?del=<?php echo $row['task_id'] ?>"><button type="button"> Remove
                  </button></a></td>
                </tr>

       <?php
        $i++;
         }
         

       }

         ?>


      </table>
      </div>

    <!-- Scripts -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/jquery.scrollex.min.js"></script>
      <script src="assets/js/skel.min.js"></script>
      <script src="assets/js/util.js"></script>
      <script src="assets/js/main.js"></script>

  </body>
</html>
