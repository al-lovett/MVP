<!DOCTYPE html>
<html>
 <head>
  <title>Customer Information and PDF Option</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
   }
  </style>
 </head>
 <body>
  <br />
  <div class="container">
   <h3 align="center">Feet Customers</h3><br />

   <div class="row">
    <div class="col-md-7" align="right">
     <h4>Services</h4>
    </div>
    <div class="col-md-5" align="right">
     <a href="{{ url('dynamic_pdf/pdf') }}" class="btn btn-danger">Convert into PDF</a>
    </div>
   </div>
   <br />
   <div class="table-responsive">
    <table class="table table-striped table-bordered">
     <thead>
      <tr>
       <th>Company Name</th>
       <th>Contact Name</th>
       <th>Address</th>
       <th>Phone</th>
       <th>Fax</th>
       <th>Email</th>
       <th>Package</th>
       <th>Additional Notes</th>
      </tr>
     </thead>
     <tbody>
     @foreach($customer_data as $sevices)
      <tr>
       <td>{{ $sevices->customer_name }}</td>
       <td>{{ $sevices->contact_name }}</td>
       <td>{{ $sevices->address }}</td>
       <td>{{ $sevices->Phone }}</td>
       <td>{{ $sevices->fax }}</td>
       <td>{{ $sevices->email }}</td>
       <td>{{ $sevices->package }}</td>
       <td>{{ $sevices->additionalNotes }}</td>
      </tr>
     @endforeach
     </tbody>
    </table>
   </div>
  </div>
 </body>
</html>
