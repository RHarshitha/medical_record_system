<?php session_start(); ?>
<html>
<p> hello <?php echo $_SESSION['username'] ; ?></p>
<a href='http://localhost/GH/?controller=doctor&action=patient_list'>List of Patients</a><br>


</html>