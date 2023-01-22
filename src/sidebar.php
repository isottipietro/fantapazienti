<div id="sidebar">
    <img src="/assets/images/user.png" style="width: 50%;margin: auto;display: block;padding-top: 50px;">
<p style="text-align: center;">profilo</p>
<hr color="#151920" />
    <p <?php if ($pageName=="Dashboard") echo 'id="current"'; ?>><a href="dashboard.php">dashboard</a></p>
    <p <?php if ($pageName=="Eventi") echo 'id="current"'; ?>><a href="eventi.php">eventi</a></p>
    <p <?php if ($pageName=="Pazienti") echo 'id="current"'; ?>><h href="pazienti.php">+ pazienti</a></p>
    <p <?php if ($pageName=="Asta") echo 'id="current"'; ?>><a href="asta.php">asta</a></p>
    <p <?php if ($pageName=="Invita") echo 'id="current"'; ?>><a href="invita.php">invita</a></p>
</div>