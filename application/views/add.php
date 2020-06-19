<!doctype html>
<html>
	<head>
		  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   <style>

   		*{
   			margin: 0;
   			padding: 0;
   		}

   		header{
   			border-bottom: 1px solid grey;
   			padding-top: 20px;
   			padding-bottom: 20px;
   		}

   		#logo{
   			color: #6ADBE5;
   			font-size: 30px;
   		}
   		#watch-word{
   			display: block;
   			color: grey;
   			font-size: small;
   			margin-left: 30px;
   		}

   		#bars{
   			position: absolute;
	left: 320px;
	top: 30px;
   		}
   		#bars span{
   			display: block;
	margin: 2px;
	background: #6ADBE5;
	width: 25px;
	height: 3px;
	border-radius: 5px;
   		}

   		.spacing-left{
   			margin-left: 20px;
   		}

   		main h3{
   			margin-top: 30px;
   		}

   		main select{
   			padding: 10px;
   			border-radius: 5px;
   		}

   		input{
   			border: 1px solid #6ADBE5;
   			padding: 20px;
   			border-top: 2px solid #6ADBE5;
   			border-radius: 5px;
   			background: #EFECEC;
   		}


   		#reply{
   			background: #18ABE5;
   		}



   		footer{
   			padding-top: 30px;
   			margin-top: 50px;
   			background: #18ABE5;
   		}

   		footer small{
   			color: white;
   		}
   		#footer-icons{
   			display: block;
   			margin-top: 30px;
   			margin-left: 120px;
   		}
   		#footer-icons i{
   			padding-right: 30px;
   		}

		@media screen and (min-width: 900px) {
			header h1{
				margin-left: 100px;
			}
			#bars{
   			position: absolute;
			left: 1250px;
			top: 30px;
   			}
			   #bars span{
   			display: block;
			margin: 2px;
			background: #6ADBE5;
			width: 25px;
			height: 4px;
			border-radius: 5px;
			}
			.spacing-left{
   			margin-left: 190px;
   			}

			   main h3{
				   font-size: 30px;
				   margin-top: 50px;
			   }
			   #intro-2{
				font-size: large;
				   width: 180px;
				   letter-spacing: 1px;
				   font-weight: bolder;
			   }
			   main select{
				   padding-top: 15px;
				   padding-bottom: 15px;
				   padding-right: 160px;
				   padding-left: 30px;
				   border: 1px solid #6ADBE5;
				   background: rgb(248, 245, 245);
				   margin-top: -10px;
			   }

			   		#second-row{
						   margin-top: 20px;
					   }
					   input{
				   padding-top: 15px;
				   padding-bottom: 15px;
				   padding-right: 120px;
				   padding-left: 30px;
				   border: 1px solid #6ADBE5;
				   background: rgb(248, 245, 245);
				   margin-top: -10px;
			   }
			   #add-beneficiary{
				   margin-bottom: 50px;
				   font-size: large;
			   }
			   .right-side{
				   float: right;
				   margin-top: -90px;
				   left: 800px;
				   position: absolute;

			   }
			   #right-side-text{
				   margin-top: -120px;
				   font-size: x-large;
			   }
			   #right-side-text span{
				  display: block;
				  font-size: large;
			   }
			   #add-beneficiary-input{
				   margin-top: -50px;
				   position:absolute;
			   }

					footer{
					padding-top: 0px;
					padding-bottom: 4px;
					margin-top: 60px;
					background: #18ABE5;
				}

				footer small{
					color: white;
					margin-left: 80px;
				}
				#footer-icons{
					display: inline;
					margin-top: 30px;
					margin-left: 700px;

				}
				#footer-icons i{
					padding-right: 5px;
					padding-left: 5px;
					padding-top: 4px;
					padding-bottom: 4px;
					background: white;
					border-radius: 2000px;
					width: fit-content;margin-right: 20px;
					font-size: large;
				}
		}
        .b2 {
    padding: 20px;
    background-color: #00aeff;
    border: 0;
    margin-left: 20px;
    border-radius: 3px;
    color: #fff;
}

   </style>

 </head>
	<body>

				<header>
					<h1><span id="logo">[]</span>HNG Internship <span id="watch-word">Changing the world one intern at a time<span></h1>

					<div id="bars">
						<span></span>
						<span></span>
						<span></span>
					</div>

				</header>

				<main>

					<h3 class="spacing-left">Who are you sending to?</h3>
					<!-- <br>
					<h5 class="spacing-left" id="intro-2">Select from existing beneficiaries<h5>

						<br><br>

					<select class="spacing-left">
						<option>Select Beneficiary</option>
					</select> -->

                    <br><br>

                    <?php if (isset($_SESSION['error'])) { ?>
                            <?php echo $_SESSION['error']; ?>
                            <?php } ?>
                    <form action="" method="POST">
					<div class="spacing-left" id="second-row">
					<label id="add-beneficiary">Number</label><br><br>
					<input type="text" name="PhoneNumber" placeholder="Phone number" >
					</div>
						<br><br>

					<div class="spacing-left">
					<!-- <input type="text" placeholder="Name"> -->
						<br><br>

						<label><span>Enter Amount</span></label>
						<br><br>
						<input type="text" name="Amount" placeholder="100.00" class="">
					</div>

					<br><br>

					<div class="spacing-left">
					<input type="hidden" placeholder="Add beneficiary" id="add-beneficiary-input">
						<br><br>
                        <button class="b2" name="submit"> Send Airtime</button>
					</div>
                    </form>
				</main>

				<footer>

					<small>Copyright 2020 HNG Airtime Transfer. All Rights Reserved</small>

					<span id="footer-icons">
						<i class="fa fa-facebook"></i>
						<i class="fa fa-instagram"></i>
						<i class="fa fa-twitter"></i>
					</span>

				</footer>


		<script></script>

	</body>
</html>
