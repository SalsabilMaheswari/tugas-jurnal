<?php 

include 'koneksi.php';

error_reporting(0);

if (isset($_POST['submit'])) {
	$name = $_POST['name']; 
	$email = $_POST['email']; 
	$comment = $_POST['comment'];

	$sql = "INSERT INTO comments (name, email, comment)
			VALUES ('$name', '$email', '$comment')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		echo "<script>alert('Comment added successfully.')</script>";
	} else {
		echo "<script>alert('Comment does not add.')</script>";
	}
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="any-question.css">
    <link rel="shortcut icon" href="img/dw-favicon-final.ico" type="image/x-icon">
    <title>Dumbways.id</title>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-lg">
          <a class="navbar-brand me-5" href="index.php">
            <img src="brandred.png" alt="logo" style="width: 40px;"/>
          </a>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="index.php" style="color: #DA1212;">Beranda</a>
              </li>
              <li class="nav-item">
                <a href="why-us.php" class="nav-link list-active" style="color: #DA1212;">Why Us?</a>
              </li>
              <li class="nav-item">
                <a href="pilihan-kelas.php" class="nav-link list-active" style="color: #DA1212;">Pilihan Kelas</a>
              </li>
              <li class="nav-item">
                <a href="kelas-fullstack.php" class="nav-link list-active" style="color: #DA1212;">Kelas Fullstack</a>
              </li>
            </ul>
          </div>
          <a href="any-question.php"><button class="btn danger">Any Question?</button></a>
        </div>
    </nav>

    <!-- Comment Form -->
    <div class="container">
      <div class="blog-form">
          <div class="form-container">
          <form action="" method="POST" class="form">
            <br>
              <h1 style="font-family: staatliches;">Drop Your Question</h1>
              <div>
                <label for="input-title" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" required/>
              </div>
              <div>
                <label for="input-email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Your Email" required/>
              </div>
              <div>
                <label for="input-content" class="form-label">Your Question</label>
                <textarea id="comment" name="comment" class="form-control" required></textarea>
              </div>
              <br>
              <div class="input-group">
                <button name="submit" class="btn">Post Comment</button>
              </div>
            </form>
            <br><br><br>

              <div class="row">
                <div class="col-md-6">
                  <h4>Previous Comment</h4>
                  <hr>
                  <div class="prev-comments">
                    <?php 
                    
                    $sql = "SELECT * FROM comments";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                      while ($row = mysqli_fetch_assoc($result)) {
              
                    ?>
                    <div class="single-item">
                      <h6>Name: <?php echo $row['name']; ?></h6>
                      <p>Email: <?php echo $row['email']; ?></p>
                      <p><?php echo $row['comment']; ?></p>
                    </div>
                    <hr>
                    <?php
              
                      }
                    }
                    
                    ?>
                  </div>

                

              </div>

          </div>
      </div>

      

    </div>
</body>
</html>