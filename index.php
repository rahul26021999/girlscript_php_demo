<!doctype html>

<?php 
if(isset($_POST['submit'])){
  include('save.php');
}
?>
<html lang="en">
<head>
  <title>GirlScript</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
  <!-- Custom Style -->
  <style>
    body{
      background-color: #f3f3f3;
    }
    label{
      font-weight: bold;
    }
    .con{
      border-radius: 12px;
      margin-top: 15px;
      box-shadow: 0.5px 1px #d2d2d2;
      background-color: white;
    }
    .form-control {
      outline: 0;
      border: 0;
      box-shadow: none;
      border-radius: 0px;
      border-bottom: 2px solid #f3f3f3;
    }
    .form-control:focus,input:focus {
      outline:none !important;
      box-shadow: none !important;
      border-color: blue;
    }
    label{
      padding-left: 10px;
    }
    .mybtn{
      padding-left: 30px;
      padding-right: 30px;
      padding-top: 10px;
      padding-bottom: 10px;
    }
  </style>

</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 mx-auto">
        <?php 
        if(isset($success))
        {
          echo '<div class="alert alert-success alert-dismissible mt-4">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong></strong>'.$success.'</div>';
        }
        elseif(isset($error))
        {
          echo '<div class="alert alert-danger alert-dismissible mt-4">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong></strong>'.$error.'</div>';
        }
        ?>

        <div class="con text-center p-3">
          <img src="girlscript.png" style="width: 426px; " title="" alt="">
        </div>

        <div class="con">
          <h3 class="text-center text-success p-3"><b>Students Registeration</b></h3>
        </div>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">

          <div class="con pl-4 pr-4 pt-4 pb-2">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="Your name Here ..">
            </div>       
          </div>   

          <div class="con pl-4 pr-4 pt-4 pb-2">
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email Here ..">
            </div>          
          </div>

          <div class="con pl-4 pr-4 pt-4 pb-2">
            <div class="form-group">
              <label for="email">Phone number</label>
              <input type="text" class="form-control" name="number" id="number" placeholder="Your contact number Here ..">
            </div>          
          </div>

          <div class="form-group mt-3 mb-4 text-center">
            <input type="submit" name="submit" value="submit" class="btn btn-success mybtn">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>


</html>