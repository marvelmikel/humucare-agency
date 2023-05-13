<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<meta name="description" content="Smarthr - Bootstrap Admin Template">
<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
<meta name="author" content="Dreamguys - Bootstrap Admin Template">
<meta name="robots" content="noindex, nofollow">
<title> Applications Page </title>

<link rel="shortcut icon" type="image/x-icon" href="assets/images/logoIcon/favicon.png">

<link rel="stylesheet" href="asset/css/bootstrap.min.css">

<link rel="stylesheet" href="asset/css/font-awesome.min.css">

<link rel="stylesheet" href="asset/css/line-awesome.min.css">

<link rel="stylesheet" href="asset/css/style.css">

</head>

<body>
@include('partials.notify')
    <div class="card">

<div class="card-body">
   <h1> Humucare Assistance Application </h1>
<div class="row">
<div class="col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title mb-0"> Application Assitance Form </h4>
</div>
<div class="card-body">
<form action="{{route('processTransaction')}}" method="post">
    @csrf
<div class="form-group row">
<label class="col-form-label col-lg-2">First Name</label>
    <div class="col-lg-10">
        <div class="input-group">
            <div class="input-group-prepend">
            </div>
            <input type="text" class="form-control" placeholder="First Name"
                aria-label="First Name" aria-describedby="basic-addon1" name ="firstname" required >
        </div>
    </div>
    
    <label class="col-form-label col-lg-2">Last  Name</label>
    <div class="col-lg-10">
        <div class="input-group" style ="padding-top:10px;">
            <div class="input-group-prepend">
                </div>
            <input type="text" class="form-control" placeholder="Last Name"
                aria-label="Last Name" aria-describedby="basic-addon1" name ="lastname"  required >
        </div>
    </div>

<label class="col-form-label col-lg-2">Email</label>
    <div class="col-lg-10">
        <div class="input-group" style ="padding-top:10px;">
            <div class="input-group-prepend">
                </div>
            <input type="email" class="form-control" placeholder="example@mail.com"
                aria-label="Email" aria-describedby="basic-addon1" name ="email" required >
        </div>
    </div>

<label class="col-form-label col-lg-2">Assistance Type </label>
    <div class="col-lg-10">
        <div class="input-group" style ="padding-top:10px;">
            <div class="input-group-prepend">
                </div>

                <select class="form-control" required name ="type"> 
                <option value =""> Select </option>
                <option value="Accommodation Assistance"> Accommodation Assistance </option>
                <option value =" VISA Assistance "> VISA Assistance </option>
                <option value ="Ticket Assistance"> Ticket Assistance </option>
                <option value ="Global Talent VISA"> Global Talent VISA </option>
                <option value ="Lawyer or Accountant Assistance"> Lawyer or Accountant Assistance </option>
                </select>
        </div>
    </div>
    <label class="col-form-label col-lg-2">Fee Payable </label>
    <div class="col-lg-10">
        <div class="input-group" style ="padding-top:10px;">
            <div class="input-group-prepend">
            <span class="input-group-text">£</span>
                </div>
            <input type="text" class="form-control" placeholder="example@mail.com"
                aria-label="Email" aria-describedby="basic-addon1" name ="amount" value ="5.00" disabled >
        </div>
    </div>
    <div class="input-group" style ="padding-top:10px;">
    <div class="col-lg-10 text-center" >
   
    <button type="submit" class="btn btn-primary btn-lg"> Pay Via PayPal </button>
</form>
</div>
</div>

</div>
</div>
</div>
</div>
</div>

<script src="asset/js/jquery-3.5.1.min.js"></script>

<script src="asset/js/popper.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>

<script src="asset/js/jquery.slimscroll.min.js"></script>

<script src="asset/js/app.js"></script>
</body>
</body>




<footer>

</footer>



</html>


