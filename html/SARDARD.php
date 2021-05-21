 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial scale =1.0">
	<link href="//maxcdn.bootstrap.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="icon" type="image/png" href="https://cdn3.iconfinder.com/data/icons/coronavirus-filled/32/coronavirus-26-128.png">
	<link rel="stylesheet" type="text/css" href="/webjars/bootstrap/css/bootstrap.min.css"/>
	<title>INDIA DISTRICTWISE CORONA CASES LIVE</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<style>
		h3.text-center{
			margin-top: 50px;
			font-size: 38px;
			font-family: 'Times New Roman',Times,serif;
		}
.container . search-bar{
			width: 100%;
			padding: 10px;
			float: left;
			border: #53030E 2px solid;
			margin-top: 10px;
			border-radius: 5px;
		}		
		#table-heading{
			margin-top: 5%;
		}
		h4{
			font-size: 24px;
		}


#caseList tr:first-child{
			font-weight: 600;
			background-color: #c5edf7;
			font-size: 130%;
		}
		#caseList tr td:first-child{
			font-weight: 600;
			width: 20%;
		}
		.table{
			width: 80%;
			margin-left:auto ;
			margin-right: auto;
			margin-top: 50px;
		}
		#caseList tr td:nth-child(2){
			color: red;
		}
        #caseList tr td:nth-child(3){
			color: green;
		}
#caseList tr td:nth-child(4){
			color: black;
		}
        #caseList tr td:nth-child(5){
			color: red;
		}



	<section>
		<div class="mb-3"
		<h3> class="text-center">DISTRICTWISE CORONA CASES IN INDIA</h3>
	</div>
<div class="container">
		<form method ="POST" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>>
			<select class="search-bar" name="state" onchange="this.form.submit()">
				<option value="state" disabled selected> Select your state here</option>
                    <select name="state" id="state" class="form-control">
               <option value="Andhra Pradesh">Andhra Pradesh</option>
               <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
               <option value="Arunachal Pradesh">Arunachal Pradesh</option>
               <option value="Assam">Assam</option>
               <option value="Bihar">Bihar</option>
               <option value="Chandigarh">Chandigarh</option>
               <option value="Chhattisgarh">Chhattisgarh</option>
               <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
               <option value="Daman and Diu">Daman and Diu</option>
               <option value="Delhi">Delhi</option>
               <option value="Lakshadweep">Lakshadweep</option>
               <option value="Puducherry">Puducherry</option>
               <option value="Goa">Goa</option>
               <option value="Gujarat">Gujarat</option>
               <option value="Haryana">Haryana</option>
               <option value="Himachal Pradesh">Himachal Pradesh</option>
               <option value="Jammu and Kashmir">Jammu and Kashmir</option>
               <option value="Jharkhand">Jharkhand</option>
               <option value="Karnataka">Karnataka</option>
               <option value="Kerala">Kerala</option>
               <option value="Madhya Pradesh">Madhya Pradesh</option>
               <option value="Maharashtra">Maharashtra</option>
               <option value="Manipur">Manipur</option>
               <option value="Meghalaya">Meghalaya</option>
               <option value="Mizoram">Mizoram</option>
               <option value="Nagaland">Nagaland</option>
               <option value="Odisha">Odisha</option>
               <option value="Punjab">Punjab</option>
               <option value="Rajasthan">Rajasthan</option>
               <option value="Sikkim">Sikkim</option>
               <option value="Tamil Nadu">Tamil Nadu</option>
               <option value="Telangana">Telangana</option>
               <option value="Tripura">Tripura</option>
               <option value="Uttar Pradesh">Uttar Pradesh</option>
               <option value="Uttarakhand">Uttarakhand</option>
               <option value="West Bengal">West Bengal</option>

			</select>
		</form>
	</div>

	<div class="table-responsive">
		<h4 class="text-center"  id="table-heading">Districtwise corona cases of
			.<?php
			$state="Andhra Pradesh";
			if($_SERVER["REQUEST_METHOD"]=="POST")
			{
				$STTE = test_input($_POST['state']);
			}
			echo $state;
			?></h4>

			<table class="table table-bordered table-striped text-center" id="casesList">

				<tr>
				<td>District</td>
					<td>Confirmed</td>
					<td>Recovered</td>
					<td>Decreased</td>
					<td>Active</td>
						.<?php 
			   function test_input($data){
			     $data = trim($data),
			     $data = stripslashes($data);
			     $data = htmlspecialchars($data);
			     return $data;
			}
$data = file_get_contents('https://api.covid19india.org/district wise json');
			$coronalive = json_decode($data,True);
			$disrictcount = count($coronalive['districts']);
			$i=1;
			while($i < $districtcount){
			if($coronalive['districts'][$i]['state'] = $state){
			?>
			<tr>
				<td><?php echo $coronalive['districts']['$i']['districts'];?></td>
                <td><?php echo $coronalive['districts']['$i']['confirmed'];?></td>
                <td><?php echo $coronalive['districts']['$i']['recovered'];?></td>
                <td><?php echo $coronalive['districts']['$i']['decreased'];?></td>
                <td><?php echo $coronalive['districts']['$i']['active']. "<br>";?></td>
            </tr>
            <?php
             }
        $i++;
    }

                
                




</section>
</body>
</html>