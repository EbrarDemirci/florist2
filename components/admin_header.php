<header>
   <div class="=logo">
         <img src="../image/logo.png" width="100">
   </div>
   <div class="right"></div>
         <div class="bx bxs-user" id="user=btn"></div> 
         <div class="toggle=btn"><i class="bx bx-menu"></i></div>
   </div>
   <div class="profile-detail">
      <?php
         $select_profile = $conn ->prepare("SELECT * FROM 'sellers' WHERE id=?");
         $select_profile ->execute([$seller_id]);

         if ($select_profile ->rowCount() >0) {
            $fetch_profile = $select_profile ->fetch(PDO::FETCH_ASSOC);
         }
      ?> 
      <div class="profile">
         <img src="../uploaded_files/<?= $fetch_profile['image']; ?>"class="logo-img">
         <p><?= $fetch_profile['name']; ?></p>
      </div>
      <div class="flex=btn">
         <a href="profile.php" class="btn">profile</a>
         <a href="../components/admin_logout.php" onclick="return confirm('logout from this website');" class="btn">logout</a>
      </div>
     
   </div>
</header>
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
