<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="any-question.css">
    <title>Dumbways.id</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-lg">
          <a class="navbar-brand me-5" href="home.html">
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
    <div class="blog-form">
        <div class="form-container">
          <form action="input any-question.php" method="POST"></form>
            <h1>Drop Your Question</h1>
            <div>
              <label for="input-title" class="form-label">Name</label>
              <input type="text" name="nama" class="form-control" placeholder="Your Name" required/>
            </div>
            <div>
              <label for="input-email" class="form-label">Email</label>
              <input type="email" name="email" class="form-control" placeholder="Your Email" required/>
            </div>
            <div>
              <label for="input-content" class="form-label">Your Question</label>
              <textarea name="komen" class="form-control" required></textarea>
            </div>
            <div>
              <input type="submit" name="post" value="post">
            </div>
          </form>
        </div>
    </div>
</body>
</html>