@extends('layouts.adminapp')



@section('content')

{{-- {{ dd($products); }} --}}
<!-- Bordered Table -->
<div class="card mt-5 mx-5">
    @if(session('message'))
    <h1 class="alert alert-success"> {{session('message')}}</h1>
    @endif
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
            @foreach ($products as $item)
            <tr>
                <td>{{$item->id  }}</td>
                <td>{{$item->name  }}</td>
                <td><img src="/{{ $item->image }}" alt="" height="100px" width="100px"></td>

                <td>
                    @if ($item->visible == 1)
                    <div class="alert alert-primary" role="alert">
                        Visible
                      </div>
                      @else
                      <div class="alert alert-danger" role="alert">
                          Not Visible
                        </div>
                      @endif


                </td>
                <td>{{$item->price  }}</td>
                <td>{{$item->quantity  }}</td>
                <td>
                    <a href="/seller/update-product/{{$item->id  }}" class="btn btn-sm btn-primary">
                        Update
                    </a>
                    <form action="/seller/delete-product/{{$item->id  }}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-sm btn-danger">
                            Delete
                        </button>
                    </form>



                </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!--/ Bordered Table -->
@endsection
