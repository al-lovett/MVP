@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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
</div>
<div id="containerhome">
  <div class="col-md-8">
    <div class="card">
      <div class="card" style="width: 18rem;" class="companynamecard">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Company Bio</h5>
          <p class="card-text">Quick Company Bio for Customers.</p>
          <a href="/addcompany" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
            Featured
        </div>
        <div class="container">
          <div class="row">
            <div class="col-sm">
              <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Package 1 </h5>
                  <h6 class="card-subtitle mb-2 text-muted">Service Breakdown</h6>
                  <p class="card-text">1 foot job done</p>
                  <a href="#" class="card-link">Add Company to quote or Bill</a>
                  <a href="/home" class="card-link">Home</a>
                </div>
            <div class="col-sm">
              <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Package 2 </h5>
                  <h6 class="card-subtitle mb-2 text-muted">Service Breakdown</h6>
                  <p class="card-text">1 client more than one feet jobs done</p>
                  <a href="#" class="card-link">Add Company to quote or Bill</a>
                  <a href="/home" class="card-link">Home</a>
                </div>
            </div>
            <div class="col-sm">
              <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Package 3 </h5>
                  <h6 class="card-subtitle mb-2 text-muted">Service Breakdown</h6>
                  <p class="card-text">more than 1 client more than one feet jobs done</p>
                  <a href="#" class="card-link">Add Company to quote or Bill</a>
                  <a href="/home" class="card-link">Home</a>
                </div>
            </div>
          </div>
        </div>
    
      </div>

    </div>
  </div>
</div>
@endsection
