@extends('layouts.adminapp')



@section('content')

  <!-- Bordered Table -->
  <div class="card mt-5 mx-5">
      <h5 class="card-header">All  Products</h5>
      <div class="d-flex justify-content-end">
          <a href="/seller/add-products">
            <button class="btn btn-primary ">Add Products</button>

        </a>
        </div>
      <div class="card-body">
      <div class="table-responsive text-nowrap">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Image</th>
              <th>Status</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>

          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!--/ Bordered Table -->
@endsection
