

<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="../design/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../design/css/mydesign.css">

<style type = "text/css">
        body{

		background-image:url("../HTML/hehehe.jpg");
		background-size: cover;
		background-attachment: fixed;
}
    </style>

</head>
<body>

       <?php include 'header.php'; ?>
       <?php 
       session_commit();
        include '../Brains/db.php';
        $ddbb = new Database();

        if(isset($_GET['student_id'])){
          $id = $_GET['student_id'];
          $query = "SELECT * FROM `people` WHERE people_id = {$id}";
        $result = $ddbb->connection()->query($query);

          if($toBeUpdate = $result->fetch_object()){
              echo '<form id="myform" class = "jumbotron" style ="width: 30%; margin-top: 4%; padding-top: 0%; padding-bottom:2%" action="updateController.php" method = "POST">
                      <table cellspacing="0" cellpadding="0"><br><br>
                        <input type="hidden" name="student_id" value="'.$id.'"/>
                        <tr>
                          <div style="">
                            <th>First Name:</th>
                            <td><input type="text" class="form-control" name="_firstname" placeholder="First name" value="'.$toBeUpdate->f_name.'"></td>
                          </div>
                        </tr>
                        <tr>
                          <th>Middle Name:</th>
                          <td><input type="text" class="form-control" name="_middlename" placeholder="Middle name" value="'.$toBeUpdate->m_name.'"></td>
                        </tr>
                        <tr>
                          <th>Last Name:</th>
                          <td><input type="text" class="form-control" name="_lastname" placeholder="Last name" value="'.$toBeUpdate->l_name.'"></td>
                        </tr>
                        
                      </table><br>
                      <td><button type="submit" class="btn btn-primary" style="margin-right: 10%;margin-left: 31%">UPDATE</button></td>
                          <td><a href="../crud/informationPage.php"><button type = "button" class="btn btn-secondary">Cancel</button></a></td>
                    </form>';
                    // $_SESSION['id'] = $toBeUpdate->id;
                    // echo $_SESSION['id'];
        }
        }

        ?>
</body>
</html>