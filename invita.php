<?php include 'src/head.php';?>
<?php $pageName = "Invita";?>
<?php include 'src/sidebar.php'; ?>
<?php include 'src/header.php'; ?>
<div id="page">
<script>
$(function () {

$('register').on('submit', function (e) {

  e.preventDefault();

  $.ajax({
    type: 'post',
    url: 'src/register.php',
    data: $('register').serialize(),
    success: function (data) {
      alert(data.message);
      location.reload();
    },
    error: function (xhr, status, error) {
     alert(xhr.responseJSON.message);
    location.reload();
    },
  });

});

});
</script>
  <form method="post" action="src/register.php" id="register">
    <h1>Registrazione</h1>
    <input type="text" id="username" placeholder="Username" name="username" maxlength="50" required>
    <input type="password" id="password" placeholder="Password" name="password" required>
    <input type="text" id="nome" placeholder="Nome" name="nome" required>
    <input type="text" id="cognome" placeholder="Cognome" name="cognome" required>
    <input type="email" id="email" placeholder="E-mail" name="email" required>
    <button type="submit" name="submit">Registrati</button>
  </form>
  

  <?php include 'src/footer.php';?>
</div>
</body>
</html>
