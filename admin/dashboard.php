<?php include '../components/connect.php'; ?>
     

     <!DOCTYPE html>
     <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="windth=device-width, initial-scale=1">
            <!-- box icon cdn link -->
             <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
             <link rel="stylesheet" type="text/css" href="../css/admin_style.css?v=<?php echo time(); ?>">
             <title>Admin - Dashboard</title>
        </head>
        <body>
            <?php include '../components/admin_header.php' ; ?>
    
    
    
    
        <!-- sweetalert cdn link -->
         <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
         <!-- custom cdn link -->
          <script type="text/javascript" src="../js/admin_script.js"></script>
          <!-- alert -->
          <?php include '../components/alert.php' ; ?>
        </body>
     </html>