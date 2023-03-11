<?php
include "header.php";  
?>
<section class="h-100 h-custom" style="background-color: #8fc4b7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
           <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Registration Info</h3>

            <form class="px-md-2" method="post">

              <div class="form-outline mb-4">
                <input type="text" placeholder="userid" class="form-control" name="username"/>
                 </div>

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline datepicker">
                    <input type="text" placeholder="Password" name = "password" class="form-control"  />

                  </div>

                </div>
                <div class="col-md-6 mb-4">
                </div>
              </div>
              <div class="row mb-4 pb-2 pb-md-0 mb-md-5">
                <div class="col-md-6">

                  <div class="form-outline">
                    <input type="text" placeholder="Phone Number" name="phone" class="form-control" />
                    
                  </div>

                </div>
              </div>

              <button type="submit" class="btn btn-success btn-lg mb-1">Submit</button>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
// if ($_SERVER['REQEST_METHOD'] == 'POST') 
// {
    $conn= mysqli_connect("localhost" , "root","", "newdb");

if($conn){
    echo "Conneted sucessfully";
     } else
    die(mysqli_error($conn));

    $username = $_POST["username"];
    $password = $_POST["password"];
    $phone = $_POST["phone"];

    $sql = "insert into `registrationform` (username ,password,phone) value('$username','$password' , '$phone')";
    $result = mysqli_query($conn, $sql);
//}


include "footer.php";
?>