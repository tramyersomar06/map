<?php 
    if (isset($_POST['submit'])){
        $file = $_FILES['file'];

        $fileName = $_FILES['file']['name'];
        $filetmp = $files['file']['file_name'];
        $fileType = $files['file']['type'];
        $fileError = $files['file']['error'];
       

        $fileExt = explode ('.', $fileName);
        $fileActualExt = strtolower(end($fileext));

        $fileAllowed  = array('png', 'jpg', 'jpeg');

        if (in_array( $fileActualExt,  $fileAllowed)){

            $destinationfile = 'image/'.$filetmp;
            move_uploaded_file( $filetmp, $destinationfile );

            $query = "INSERT INTO `information_tbl`(`id`, 'image') VALUES ( $fileName,  $destinationfile)";
            $displayquery = "SELECT * FROM image" ;
            $row =  $displayquery->connection()->query($displayquery);
        while($result =  $displayquery =fetch_object($row)){
            echo "";
           
            }
        }
    }
?>