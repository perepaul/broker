@extends('layouts.admin')

@section('content')

<section class="flexbox-container">
    <div class="col-12 d-flex align-items-center justify-content-center">
      <div class="col-md-4 col-10 p-0">
        <div class="card-header bg-transparent border-0">
          <h2 class="error-code text-center mb-2">400</h2>
          <h3 class="text-uppercase text-center">Bad Request</h3>
        </div>
        <div class="card-content">
          <div class="row py-2">
            <div class="col-12 col-sm-6 col-md-6">
              <a href="/" class="btn btn-primary btn-block"><i class="ft-home"></i> Back to Home</a>
            </div>
            <div class="col-12 col-sm-6 col-md-6">
              <a href="#" class="btn btn-danger btn-block"><i class="ft-search"></i>  Advanced search</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection