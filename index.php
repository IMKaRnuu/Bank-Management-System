<!DOCTYPE html>
<html lang="en" class="animated fadeIn" >
<head>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sparks Bank</title>
</head>
<body>
 
<!--Navigation bar-->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Brand/logo -->
        <a class="navbar-brand" href="#">
          <img src="image/Spark Foundation.png" alt="logo" style="width:40px;"  >
        
        </a>

        <div> 
           <h5 style="color: aliceblue; padding-top: 10px;">Sparks Bank</h5>  
        </div>
        <div style="padding-left: 1100px;">
        <a href="index.php"><button type="button" class="btn btn-success">Home</button></a>
        </div>
        <div style="padding-left: 20px;">

        <a href="https://www.thesparksfoundationsingapore.org/contact-us/"> <button type="button" class="btn btn-success" >Contact Us</button></a>
        </div>
      </nav>
<!--Header Image-->   
<header>
      <style>
        body {
          background-image: url('image/background.jpg');
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: cover;
        }
        </style>

        <!--Features-->
        <!--User-->
        <div  class="row activity text-center" style="margin-right: 600px;">
          <div class="col-md act" >
            <div >
              <img src="image/man.png" width="300" height="280">
            </div>
         
            <a href="transfer_money.php"><button>View all User</button></a>
          </div>
          <div class="col-md act" style="margin-top: 15px;">
            <div>
              <img src="image/lending.png"  width="250" height="230">
            </div>
            <br>
            <a href="transfer_money.php"><button >Make a Transaction</button></a>
          </div>
        </div>

          <div class="text-center" style="margin-right: 625px;">
            <div> 
              <img src="image/transaction-history.png" class="img-fluid" width="250" height="250">
            </div>
            <br>
            <a href="transactionhistory.php"><button>Transaction History</button></a>
          </div>
    

</header>

<footer>
<div id="container2">
    <div id="header1"><b>© 2021. Made by<a href="https://www.linkedin.com/in/karan-patil-3560311b0/" target="blank">Karan B Patil</a></b>  <br>
      <b>For the Project of The Sparks Foundation</b></div>
 </div>
</footer>

</body>
</html>
