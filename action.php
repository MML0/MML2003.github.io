
<head>
<?php
  $say = $_GET['say'];
  $to  = $_GET['to'];
  $jto  = $_GET['b1'];
  
  $path = 'data.txt';
  if (isset($_GET['say']) ) {
  $fh = fopen($path,"a+");
  //$string = $_POST['field1'];
  fwrite($fh,$say);
  fwrite($fh,$to); // Write information to the file
  fclose($fh); // Close the file

}
?>
<center>
<br><br><br><br><br><br>
<h1>data saved !</h1>
<br><br><br><br><br><br>
<a href="http://mmlmml.ihweb.ir/server/data.txt">clivk here and reload to see data</a>
</center>
</head>

