
@extends('layouts.adminapp')



@section('content')
{{-- {{ dd($data[0]->name) }} --}}

<div class="col-xxl mt-5">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Update Product</h5>
                      <a href="/seller/all-products">

                          <button class=" float-end btn btn-danger"> Back</button>
                        </a>
                      {{-- <small >BACK</small> --}}
                    </div>
                    <div class="card-body">
                      <form enctype="multipart/form-data" method="POST" action="{{ url('/seller/update-product/'.$data[0]->id) }}">
                            @csrf
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="basic-default-name" value="{{ $data[0]->name }}" name="name" required />
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Price</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{ $data[0]->price }}" id="basic-default-name" name="price" required />
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label"  for="basic-default-name">Description</label>
                          <div class="col-sm-10">
                            <textarea name="description"  class="form-control" id="description" cols="30" rows="3" required>
                                {{ $data[0]->description }}
                            </textarea>
                            {{-- <input type="text" class="form-control" id="basic-default-name" name="description" /> --}}
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Quantity</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{ $data[0]->quantity }}" id="basic-default-name" required name="quantity" />
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Image</label>
                          <div class="col-sm-10">
                            <input type="file" accept="image/*" required class="form-control" id="basic-default-name" name="image" />
                          </div>
                        </div>

                        <div class="form-check">

                            <input class="form-check-input" type="radio" name="visible" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                              Visible
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="visible" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                              Not Visible
                            </label>
                          </div>

                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">UPDATE</button>
                          </div>
                        </div>

                      </form>
                    </div>
                  </div>
                </div>


                @endsection
