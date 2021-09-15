<!doctype html>
<html lang="en">
  <head>
  <link rel="shortcut icon" type="image/png" href="media/websitee.png">
  	<title>Transaction History</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!-- Main CSS File -->
   <link rel="stylesheet" href="css/style.css">
  </head>
  
 <body>
     <!--NAV-->
    <div class="box-area">
     <header>
			<div class="wrapper">
				<div class="logo">
					<a href="index.php">TSB</a>
				</div>
				<nav>
					<a href="index.php">HOME</a> <a href="abouttsb.php">ABOUT TSB</a> <a href="contactus.php">CONTACT US</a>
				</nav>
			</div>
	  </header>
    </div>
    <!--END NAV-->


    <div class="container">
        
       <br>
       <div>
    <table class="usertable-history">
        <thead>
            <tr>
                <th class="text-center">Transaction_ID</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config.php';

            $sql = "SELECT * FROM transaction ";

            $query = mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr>
            <td class="py-2"><?php echo $rows['Transaction_ID']; ?></td>
            <td class="py-2"><?php echo $rows['Sender']; ?></td>
            <td class="py-2"><?php echo $rows['Receiver']; ?></td>
            <td class="py-2"><?php echo $rows['Amount']; ?> </td>
            <td class="py-2"><?php echo $rows['Date and Time']; ?> </td>
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>

</div>
<footer>
  <p>copyright &copy;2021 TSB.</p>
</footer>





     <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
 </body>
</html>