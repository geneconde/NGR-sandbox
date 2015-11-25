<?php 
session_start();
if (isset($_SESSION['username'])) {
	include_once('libraries/UserFactory.class.php'); 
	
	$user = null;
	
	$uf = new UserFactory();
	if(isset($_SESSION['username'])){
		$user = $uf->loadUser($_SESSION['username']);
	}
	echo $user->getType();
	if ($user->getType() == '0') {
		header("Location: teacher.php"); exit;	
	} else if($user->getType() == '1'){
		header("Location:parent/parent.php");exit;
	} else if($user->getType() == '2') {
		header("Location:student.php");exit;
	}
}
	require_once "locale.php";
	include_once "header.php";
?>
<center><?php echo _("Welcome to NextGenReady! Please log in to your account."); ?></center>
<form method="post" action="login.php" name="login" id="login" class="box-shadow">
	<?php if (isset($_GET['msg'])) { ?>
		<?php if($_GET['msg']== 1) {?>
			<span class="msg"><?php echo _("Registration Sucessful. We sent you an email. Please verify your account."); ?></span><br/><br/>
		<?php } else {?>
			<span class="msg"><?php echo _("Your new password is sent to your email."); ?></span><br/><br/>
		<?php } ?>
	<?php }  ?>
	<?php if (isset($_GET['err'])) { ?>
		<span class="err"><?php echo _("Sorry, wrong username or password."); ?></span><br/>
	<?php } ?>	
	<span><?php echo _("Username"); ?></span><br/>
	<div class="input"><input type="text" class="login_field" name="username" id="username"/></div>
	<span><?php echo _("Password"); ?></span><br/>
	<div class="input"><input type="password" class="login_field" name="password" id="password"/></div>
	<input type="submit" class="button1" value="Login" name="login" />
</form>
<?php require_once "footer.php"; ?>