<!DOCTYPE html>
<html lang="en">

<head>
    <!--- Basic Page Needs  -->
    <meta charset="utf-8">
    <title>Pure Strategy 2x4 | Final RO</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Specific Meta  -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <link rel="stylesheet" href="assets/css/magnificpopup.css">
    <link rel="stylesheet" href="assets/css/jquery.mb.YTPlayer.min.css">
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/style6.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="assets/img/icon/favicon.png">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>
 	<!-- preloader area start -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>
    <!-- preloader area end -->

  	<div class="container contact-form">
	    <form method="post" action="">
	        <h3>PURE STRATEGY SOLUTION</h3>
	       	<div class="row">
	        <?php
				$baris=2;
				$kolom=4;
				  
				$a=$_POST['a'];
				$b=$_POST['b'];
				$c=$_POST['c'];
				$d=$_POST['d'];
				$e=$_POST['e'];
				$f=$_POST['f'];
				$g=$_POST['g'];
				$h=$_POST['h'];

				$data = array(array($a,$b,$c,$d), array($e,$f,$g,$h));

				echo"<div class='m1'>";
				 	echo"<div align='center'>";
				     	echo"<h5>START MATRIKS</h5>";
				      	echo"<table border='2'>";
				      		echo"<tr align='center'>";
				      			echo "<td rowspan='2'><b> PEMAIN A </b></td>";        
					            echo "<td colspan='4'><b> PEMAIN B </b></td>";
				        	echo"</tr>";
				        	echo"<tr align='center'>";
					        	$z=0;
					          	for($i=0; $i<$kolom; $i++)
					          	{
					            	$z += 1;
					            	echo "<td><b>B$z</b></td>";        
					          	}
				        	echo"</tr>";

				      		$z = 0;
				      		for($i=0; $i<$baris; $i++)
				      		{
						        $z += 1;
						        echo "<tr align='center'>";
				          		echo "<td><b>A$z</b></td>";
				        		for($j=0; $j<$kolom; $j++)
						        {
						        	echo "<td>",($data[$i][$j]), "</td>";
						        }
				        		echo"</tr>";
				      		}
				      	echo"</table>";
			    	echo"</div>";
			    echo"</div>";

				//BARIS
				$arr1 = [$a,$b,$c,$d];
				$min1 = min($arr1);
				
				$arr2 = [$e,$f,$g,$h];
				$min2 = min($arr2);
				

				//KOLOM
				$arr1 = [$a,$e];
				$max1 = max($arr1);
				
				$arr2 = [$b,$f];
				$max2 = max($arr2);
				
				$arr3 = [$c,$g];
				$max3 = max($arr3);
				
				$arr4 = [$d,$h];
				$max4 = max($arr4);

				$kosong = " ";
				$datanew = array(array($a,$b,$c,$d, $min1), array($e,$f,$g,$h,$min2));
				$datamax = array($max1,$max2,$max3,$max4,$kosong);

				echo"<div class='m2'>";
					echo"<div align='center'>";
				     	echo"<h5>FINAL MATRIKS</h5>";
				      	echo"<table border='2'>";
				      		echo"<tr align='center'>";
				      			echo "<td rowspan='2'><b> PEMAIN A </b></td>";        
					            echo "<td colspan='4'><b> PEMAIN B </b></td>";
					            echo "<td rowspan='2'><b> MINIMUM </b></td>";
				        	echo"</tr>";
				        	echo"<tr align='center'>";
					        	$z=0;
					          	for($i=0; $i<$kolom; $i++)
					          	{
					            	$z += 1;
					            	echo "<td><b> B$z</b></td>";        
					          	}
				        	echo"</tr>";

				      		$z = 0;
				      		for($i=0; $i<$baris; $i++)
				      		{
						        $z += 1;
						        echo "<tr align='center'>";
				          		echo "<td><b>A$z</b></td>";
				        		for($j=0; $j<$kolom+1; $j++)
						        {
						        	echo "<td>",($datanew[$i][$j]), "</td>";
						        }
				        		echo"</tr>";
				      		}

				      		echo "<tr align='center'>";
					        echo "<td><b>MAKSIMUM</b></td>";
					        for($i=0; $i<$kolom+1; $i++)
					        {
					          echo '<td>' . $datamax[$i] . '</td>';
					        }
					        echo"</tr>";
				      	echo"</table>";
				    echo"</div>";
				echo"</div>";

				echo"<div class='m3'>";
					echo"<div class='isi'>";
				    	  	//BARIS
							echo '<p>Nilai minimum pemain A1 = ' . $min1 . '</p>';
							echo '<p>Nilai minimum pemain A2 = ' . $min2 . '</p>';
							echo '-----------------------------';

							//KOLOM
							echo '<p>Nilai maksimum pemain B1 = ' . $max1 . '</p>';
							echo '<p>Nilai maksimum pemain B2 = ' . $max2 . '</p>';
							echo '<p>Nilai maksimum pemain B3 = ' . $max3 . '</p>';
							echo '<p>Nilai maksimum pemain B4 = ' . $max4 . '</p>';
							echo '-----------------------------';

							$maksimin = [$min1,$min2];
							$h_maksimin = max($maksimin);
							echo '<p><b>Nilai Maksimin Kolom Pemain A = ' . $h_maksimin . '</b></p>';

							$minimaks = [$max1,$max2,$max3,$max4];
							$h_minimaks = min($minimaks);
							echo '<p><b>Nilai Minimaks Baris Pemain B = ' . $h_minimaks . '</b></p>';

						  	if ($h_maksimin==$h_minimaks)
						  	{
						  		$hasil=$h_maksimin;
						  		$hasil=$h_minimaks;
						    	echo '<p><b>Nilai Saddle Point adalah = ' . $hasil . '</b></p>';
						  	}
						  	else
						  	{
						  		echo "<h5>----------------------------------------------------------------------</h5>";
						    	echo "<h5>Nilai Saddle Point Tidak Ditemukan. Penyelesaian Harus Menggunakan Mixed Strategy</h5>";
						    	echo "<h5>----------------------------------------------------------------------</h5>";
						  	}
				    echo"</div>";
				echo"</div>";
			 ?>
	        </div>
	  		<div class="form-group">
	  			<a href="index.php" class="btnCetak">Home</a>
	        </div>
	    </form>
  	</div> 
    <!-- Scripts -->
    <script src="assets/js/jquery-3.2.0.min.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/counterup.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.mb.YTPlayer.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>
</html>