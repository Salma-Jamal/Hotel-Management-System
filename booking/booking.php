
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

    
</head>
<body>
   <main id="booking-page">
    <div class="container">
      <div class="overlay"></div>
        <div class="row">
          <div class="col-md-8">
           <div id="booking_advanced">
               
            <div id="main_title_a_left upper">
                <h1>Booking Online</h1>
            </div>
               
        <div class="row">
            <form id="booking_form_advanced" action="insert.php " method="post" >
                <div class="col-md-6">
                   <div class="form-group">
                        <label>Your Name</label>
                        <input name="name" type="text" class="form-control" placeholder="Your Name">
                   </div>
                </div>
                
                <div class="col-md-6">
                   <div class="form-group">
                     <label>Email Address</label>
                       <div class="input-group">
                           <input name="email" type="email" class="form-control" placeholder="Your Email">
                           <div class="input-group-addon">@gmail.com</div>
                       </div>
                   </div>
                </div>

                <div class="col-md-6">
                   <div class="form-group">
                        <label>Phone Number</label>
                        <input name="phone" type="text" class="form-control" placeholder="Your Phone Number">
                   </div>
                </div>

                <div class="col-md-6">
                   <div class="form-group">
                     <label>Country</label>
                     <input name="country" type="text" class="form-control" placeholder="Your Country">
                   </div>
                </div>
                
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Arrival</label>
                        <div class="form-date">
                            <input type="text" class="datepicker form-control" name="arrival" value="">
                        </div>
                    </div>
                </div>

                
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Departure</label>
                        <div class="form-date">
                            <input type="text" class="datepicker form-control" name="departure" value="">
                        </div>
                    </div>
                </div>
                
                <div class="col-md-12">
                    <div class="form-group">
                        <label> type room </label>
                        <div class="form-date">
                            <input type="text" class="datepicker form-control" name="typeroom" value="">
                        </div>
                    </div>
                </div>
             <div class="col-md-3">
                <input type="submit"  name =" submit" value="submit" class="btn btn-danger">
    


               
                </div>
            
            
            </form>
                </div>
               </div>
              </div>
          </div>
        </div>
        
       
       </div>


       <br><br><br>
  </main>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/tether.min.js"></script>

</body>
</html>
    
