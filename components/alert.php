<?php 

  if (isset($succes_msg)) {
   foreach ($succes_msg as $succes_msg){
        echo '<script>swal("'.$succes_msg.'","" ,"success");</script>';
     }
  }

  if (isset($warning_msg)) {
    foreach ($warning_msg as $warning_msg){
         echo '<script>swal("'.$warnings_msg.'","" ,"warning");</script>';
      }
   }

   if (isset($info_msg)) {
    foreach ($info_msg as $info_msg){
         echo '<script>swal("'.$info_msg.'","" ,"info");</script>';
      }
   }
   if (isset($eror_msg)) {
    foreach ($eror_msg as $eror_msg){
         echo '<script>swal("'.$eror_msg.'","" ,"eror");</script>';
      }
   }
 

?>
