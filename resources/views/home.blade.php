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
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
            Featured
        </div>
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <div class="dropdown-menu">
            <span class="dropdown-item-text">Package Options</span>
            <a class="dropdown-item" href="#">Package 1</a>
            <a class="dropdown-item" href="#">Package 2</a>
            <a class="dropdown-item" href="#">Package 3</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection
