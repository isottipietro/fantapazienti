<?php include 'src/head.php';?>
<?php $pageName = "Invita";?>
<?php include 'src/sidebar.php'; ?>
<?php include 'src/header.php'; ?>
<div id="page">
  <form method="post" action="src/register.php">
    <h1>Registrazione</h1>
    <input type="text" id="username" placeholder="Username" name="username" maxlength="50" required>
    <input type="password" id="password" placeholder="Password" name="password" required>
    <input type="text" id="nome" placeholder="Nome" name="nome" required>
    <input type="text" id="cognome" placeholder="Cognome" name="cognome" required>
    <input type="email" id="email" placeholder="E-mail" name="email" required>
    <button type="submit" name="register">Registrati</button>
  </form>
  <script>
$(document).ready(function() {
    $('.delbtn').click(function(){
      var clickBtnValue = $(this).val();
        $.ajax({
          type: "POST",
          url: "src/register.php",
          data: { delete: clickBtnValue }
        }).done(function( msg ) {
          alert( msg );
          location.reload();
        });
      }
    );

  $(function() {
       $('#NewPatient').ajaxForm(function() {
           alert("Infermiero inserito correttamente nel mondo FantaRia");
           location.reload();
       });
     });
});
</script>

  <?php include 'src/footer.php';?>
</div>
</body>
</html>
