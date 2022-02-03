<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
	<style>
	.po
	{
	color:yellow;	
		
	}
	body
	{
		background:url("pexels-stein-egil-liland-3408744.jpg");
		background-size:cover;
		background-repeat:no-repeat;
	}
	input{
		font-size:20px;
		width:260px;
	    overflow:hidden
        color:white;
        outline:none;	
		border:none;
	}
	label
	{
		font-size:40px;
	}
	
	
	</style>
  </head>
  <body>
  <h1 align="center" style="color:green;">Donate us</h1>
  <div class="row">
  <div class="col-4"></div>
  <div class="col-4">
  <div class="row">
  <div class="col-3"></div>

  <div class="col-5">
  <br>
  <br>
  <br>
  <form  action"" method="post" class="po">
    <label>Name</label><br>
    <input type="textbox" name="name" id="name" placeholder="Enter your name"/><br/><br/>
    <label>Amount</label><br>
	<input type="textbox" name="amt" id="amt" placeholder="Enter amount"/><br/><br/>
    <label>Mobile</label><br>
	<input type="textbox" name="mobile"  placeholder="Enter moblile number"/><br/><br/>
    <label>E-mail</label>
	<input type="email" name="email"  placeholder="Enter email"/><br/><br/>
    <input type="button" name="submit" id="btn" value="Pay Now" onclick="pay_now()">
</form>
</div>
<div class="col-4"></div>
</div>
</div>
<div class="col-4"></div>
</div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
<script>

function pay_now()
{
var name=jQuery('#name').val();
var amt=jQuery('#amt').val();
var options = {
    "key": "rzp_test_Chm1Dr0sMkoNXf", 
    "amount":amt*100, 
    "currency": "INR",
    "name": "Donation",
    "description": "please helps children",
    "image": "OIP (2).jpeg",
    "handler": function (response){             
	console.log(response);
	
    }
};
var rzp1 = new Razorpay(options);
    rzp1.open();
	}
	
	
</script>





