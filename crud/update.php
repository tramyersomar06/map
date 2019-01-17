

<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="../design/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../design/css/mydesign.css">
</head>
<body>

       <?php include 'header.php'; ?>
       <?php 
       session_commit();
        include '../Brains/db.php';
        $ddbb = new Database();

        if(isset($_GET['student_id'])){
          $id = $_GET['student_id'];
          $query = "SELECT * FROM `information_tbl` WHERE id = {$id}";
        $result = $ddbb->connection()->query($query);

          if($toBeUpdate = $result->fetch_object()){
              echo '<form id="myform" action="updateController.php" method = "POST">
                      <table cellspacing="0" cellpadding="0"><br><br>
                        <input type="hidden" name="student_id" value="'.$id.'"/>
                        <tr>
                          <div style="">
                            <th>First Name:</th>
                            <td><input type="text" class="form-control" name="_firstname" placeholder="First name" value="'.$toBeUpdate->firstname.'"></td>
                          </div>
                        </tr>
                        <tr>
                          <th>Middle Name:</th>
                          <td><input type="text" class="form-control" name="_middlename" placeholder="Middle name" value="'.$toBeUpdate->middlename.'"></td>
                        </tr>
                        <tr>
                          <th>Last Name:</th>
                          <td><input type="text" class="form-control" name="_lastname" placeholder="Last name" value="'.$toBeUpdate->lastname.'"></td>
                        </tr>
                        <tr>
                          <th>Barangay:</th>
                          <td>
                            <select class = "form-control" name="brgy" >
                              <option>Ariman</option>
                              <option>Bagacay</option>
                              <option>Balud Del Norte (Pob.)</option>
                              <option>Balud Del Sur (Pob.)</option>
                              <option>Benguet</option>
                              <option>Bentuco</option>
                              <option>Beriran</option>
                              <option>Buenavista</option>
                              <option>Bulacao</option>
                              <option>Cabigaan</option>
                              <option>Cabiguhan</option>
                              <option>Carriedo</option>
                              <option>Casili</option>
                              <option>Cogon</option>
                              <option>Cota Na Daco (Pob.)</option>
                              <option>Dita</option>
                              <option>Jupi</option>
                              <option>Lapinig</option>
                              <option>Luna-Candol (Pob.)</option>
                              <option>Manapao</option>
                              <option>Manook (Pob.)</option>
                              <option>Naagtan</option>
                              <option>Nato</option>
                              <option>Nazareno</option>
                              <option>Ogao</option>
                              <option>Paco</option>
                              <option>Panganiban (Pob.)</option>
                              <option>Paradijon (Pob.)</option>
                              <option>Patag</option>
                              <option>Payawin</option>
                              <option>Pinontingan (Pob.)</option>
                              <option>Rizal</option>
                              <option>San Ignacio</option>
                              <option>Sangat</option>
                              <option>Santa Ana</option>
                              <option>Tabi</option>
                              <option>Tagaytay</option>
                              <option>Tigkiw</option>
                              <option>Tiris</option>
                              <option>Togawe</option>
                              <option>Union</option>
                              <option>Villareal</option>
                              
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <th>Latitude:</th>
                          <td><input type="text" class="form-control" name="_latitude" placeholder="Latitude"></td>
                        </tr>
                        <tr>
                          <th>Longitude:</th>
                          <td><input type="text" class="form-control" name="_longitude" placeholder="Longitude"></td>
                        </tr>
                            
                      </table><br>
                      <td><button type="submit" class="btn btn-primary" style="margin-right: 7%;margin-left: 9%">UPDATE</button></td>
                          <td><a href="../crud/informationPage.php"><button type = "button" class="btn btn-secondary">Cancel</button></a></td>
                    </form>';
                    $_SESSION['id'] = $toBeUpdate->id;
                    echo $_SESSION['id'];
        }
        }

        ?>
</body>
</html>