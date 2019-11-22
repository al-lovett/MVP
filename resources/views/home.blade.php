@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>

<div class="container-fluid" >
  <div class="col-md-10"  >
    <div class="card" >
      <div class="card" style="width: 100%;" class="companynamecard">
        <img src="images/feet_doc.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Company Bio "Smell My Feet"</h5>
          <p class="card-text">Quick Company Bio for Foot Service Customers.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <a href="/addcompany" class="btn btn-primary">Customer Quote or Billing Orders</a>
          <a href="/dynamic_pdf" class="btn btn-primary">Get PDF Printout</a>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
            Featured Service Packages
        </div>
        <div class="container-fluid" style="text-align: center">
          <div>

            <div class="col-sm">
              <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Package 1 </h5>
                  <h6 class="card-subtitle mb-2 text-muted">Service Breakdown</h6>
                  <p class="card-text">1 foot job done</p>
                  <a href="/pk1" class="card-link">More Details</a>

                </div>
              </div>
            </div>
            <div class="col-sm">
              <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Package 2 </h5>
                  <h6 class="card-subtitle mb-2 text-muted">Service Breakdown</h6>
                  <p class="card-text">1 client more than one feet jobs done</p>
                  <a href="/pk2" class="card-link">More Details</a>

                </div>
              </div>
            </div>
            <div class="col-sm">
              <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Package 3 </h5>
                  <h6 class="card-subtitle mb-2 text-muted">Service Breakdown</h6>
                  <p class="card-text">more than 1 client more than one feet jobs done</p>
                  <a href="/pk3" class="card-link">More Details</a>

                </div>
              </div>
            </div>


      </div>

    </div>
  </div>
</div>
</div>
@endsection
