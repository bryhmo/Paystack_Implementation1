<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mypayment</title>
    <style type="text/css"> 
    body{
        background: #f5f5f5
    }
    .rounded{
        border-radius: 1rem
    }
    .nav-pills.nav-link{
        color: #555
    }
    .nav-pills.nav-link.active{color: white}input[type="radio"]{margin-right: 5px}
    .bold{
        font-weight:bold
    }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<form action="" method="post">
    @csrf
<div class="container py-5">
    <!-- For demo purpose -->
    <div class="row mb-4">
        <div class="col-lg-8 mx-auto text-center">
            <h1 class="display-6">Enter your Basic Details Here</h1>
        </div>
    </div> <!-- End -->
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card ">
                <div class="card-header">
                    <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
                        <!-- Credit card form tabs -->
                        <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-9">
                            <li class="nav-item"> <a data-toggle="pill" href="#credit-card" class="nav-link active "> <i class="fas fa-credit-card mr-2"></i>Please Enter Your Card info</a> </li>
                        </ul>
                    </div> <!-- End -->
                    <!-- Credit card form content -->
                    <div class="tab-content">
                        <!-- credit card info-->
                        <div id="credit-card" class="tab-pane fade show active pt-3">
                            <form role="form" onsubmit="event.preventDefault()">
                                <div class="form-group" class="nav bg-light nav-pills rounded nav-fill mb-9"> <label for="username">
                                        <h6>Full Name</h6>
                                    </label> <input type="text" name="username" placeholder="Card Owner Name" required class="form-control "> </div>
                                <div class="form-group"> <label for="cardNumber">
                                <div class="form-group"> <label for="cardname">
                                        <h6>Enter the Email Here</h6>
                                    </label> <input type="email" name="email" placeholder="Enter a valid Email Here" required class="form-control "> </div>
                                <div class="form-group"> <label for="email">

                                <div class="form-group"> <label for="amount">
                                        <h6>Enter the Amount Here</h6>
                                    </label> <input type="number" name="amount" placeholder="Enter the Amount Here" required class="form-control "> </div>
                                <div class="form-group"> <label for="amount">
                                <div class="card-footer"> <button type="button" class="subscribe btn btn-primary btn-block shadow-sm">Proceed to confirm Payment</button>
                            </form>
                        </div>
                    </div> <!-- End -->
                    <!-- Paypal info -->
                    
                   <!-- End -->
                   
                    <!-- bank transfer info -->
                
                    <!-- End -->
                </div>
            </div>
        </div>
    </div>
</form>




    
</body>
   
</html>