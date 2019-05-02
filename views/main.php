<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <title>Course Manager</title>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/style.css" />
    <!-- <script src="main.js"></script> -->
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Course Manager</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo ROOT_URL; ?>">Home</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="<?php echo ROOT_URL; ?>users/userlist">User List</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="<?php echo ROOT_URL; ?>courses">Courses</a>
      </li>

      <?php if(isset($_SESSION['is_logged_in'])) : ?>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo ROOT_URL; ?>">Welcome <?php echo $_SESSION['user_data']['name']; ?> </a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="<?php echo ROOT_URL; ?>users/logout">Logout</a>
      </li>

      <?php else : ?>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo ROOT_URL; ?>users/login">Login</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="<?php echo ROOT_URL; ?>users/register">Register</a>
      </li>

    <?php endif; ?>

    </ul>
  </div>
</nav>

<main role="main" class="container">
<div class="row">
<?php Messages::display(); ?>
</div>

<div class="row">
    <?php require($view); ?>
</div>

</main>
</body>
</html>