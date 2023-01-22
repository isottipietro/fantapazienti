<?php include 'src/head.php';?>
<?php $pageName = "Invita";?>
<?php include 'src/sidebar.php'; ?>
<?php include 'src/header.php'; ?>
<div id="page">
  <form method="post" action="/src/register.php">
    <h1>Registrazione</h1>
    <input type="text" id="username" placeholder="Username" name="username" maxlength="50" required>
    <input type="password" id="password" placeholder="Password" name="password" required>
    <button type="submit" name="register">Registrati</button>
  </form>

  <?php include 'src/footer.php';?>
</div>
</body>
</html>
