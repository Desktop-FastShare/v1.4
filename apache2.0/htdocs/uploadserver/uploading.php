<?php 
 
 if(isset($_POST['submit'])){


     $i = 0;
     while ($i < count($_FILES['file']['name'])){
         $des = "./uploads/".$_FILES['file']['name'][$i];
         move_uploaded_file($_FILES['file']['tmp_name'][$i], $des);
         $i = $i+1;
     }
 }

?>


