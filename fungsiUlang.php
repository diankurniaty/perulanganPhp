<h3> HASIL PERULANGAN </h3> 

<?php 
    $i=1;
	
	if( $_POST["txt1"] || $_POST["txt2"] || $_POST["jumlah"] )
		{
			 for($i==1;$i<=$_POST["jumlah"];$i++)
			 {
			 echo $_POST['txt1']."<br/>".$_POST['txt2']."<br/>";
			 }
		}
?>

