<?php session_start(); ?>
<html>
<p> hello <?php echo $_SESSION['username'] ; ?></p>
<a href='http://localhost/GH/?controller=patient&action=upload'>upload documents</a>
<a href='http://localhost/GH/?controller=patient&action=appt'>schedule an appointment</a>

</html>