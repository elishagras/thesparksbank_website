<!doctype html>
<html lang="en">
  <head>
    <link rel="shortcut icon" type="image/png" href="media/websitee.png">
  	<title>Home Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!-- Main CSS File -->
   <link rel="stylesheet" href="css/style.css">
  </head>
 <body>

     <!-- NAVBAR -->
     <div class="container">
        
        <ul>
             <li class="left"><a href="index.php">TSB</a></li>
             <li><a href="index.php">HOME</a></li>
             <li><a href="abouttsb.php">ABOUT TSB</a></li>
             <li><a href="contactus.php">CONTACT US</a></li>
             <div class="dropdown">
                <button class="dropbtn">BRANCHES 
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                  <a href="#">MUMBAI</a>
                  <a href="#">DELHI</a>
                  <a href="#">GUJARAT</a>
                </div>
              </div> 
            <!--  <li><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a></li>
             <li><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a></li>
             <li><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a></li>  -->
         </ul>
         <!-- END NAVBAR -->

         <!-- MAIN -->
         <div class="image">
            <img src="media/website-removebg-preview.png" alt="" width="70%" height="70%">
         </div>
         <div class="mid-text">
             <h2>THE SPARKS BANK</h2>
         </div>

         <div class="line line-1">
             <div class="wave wave1" style="background-image: url(media/1.png)"></div>
         </div>
         <div class="line line-2">
            <div class="wave wave2" style="background-image: url(media/2.png)"></div>
        </div>
        <div class="line line-3">
            <div class="wave wave3" style="background-image: url(media/3.png)"></div>
        </div>
    </div>

    <div class="child_div">
        
            <img src="media/users-modified.svg" class="img floating" alt="User...">
            <!-- <img src="media/transfer-modified.svg" class="img floating" alt="Transfer..."> -->
            <img src="media/history-modified.svg" class="img floating" alt="History...">
            <div class="btn_div">
            <form action="users.php">
                <button type="submit" class=" button">View All Users</button>
            </form>
           <!--  <form action="transfer.php">
                <button type="submit" class=" button">Transfer Money</button>
            </form> -->
            <form action="history.php">
                <button type="submit" class=" button">Transaction History</button>
            </form>  
        </div>
             
    </div>
    <!--END MAIN -->

     <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
 </body>
</html>