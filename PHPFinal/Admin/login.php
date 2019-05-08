<?php session_start(); ?>
<?php include "../view/header.php"; ?>
<form action="index.php" method="post" class="col-md-4">
<div class="form-group">
<label for="userName">Username: </label>
<input type="text" name="userName" class="form-control">
</div>
<div class="form-group">
<label for="password">Password: </label>
<input type="text" name="password" class="form-control">
</div>
<input type="submit" name="submit" value="Log In" class="btn btn-primary">
</form>
<?php if(isset($_SESSION['error'])){if($_SESSION['error']!="none"){
    echo ("<p>ERROR: " . $_SESSION['error'] . "</p>");
}} ?>

<?php include "../view/footer.php"; ?>
