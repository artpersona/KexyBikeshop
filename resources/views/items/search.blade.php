@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center"> <h1> Product </h1> </div>
            <div class="content">
            <div class="container px-lg-5">
                <div class="row mx-lg-n5">
                    <div class="col py-3"> <label> Total Number of Items: [ ] </label></div>
                        <div class="col py-3"> <label> Items Quantity below 10: [ ] </label></div>
                 </div>
            </div>
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                    <div class="col"> </div>
                        <div class="col"> 
                        <form class="form-inline d-flex justify-content-center md-form form-sm"  type="get" action="/search">
                            <input class="form-control form-control-sm mr-3 w-75" type="search"  id="search" name="search" placeholder="Search Product" aria-label="Search">
                                <i class="fas fa-search" aria-hidden="true"></i>
                        </form>
                        </div>
                        <div class="col">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal" style="margin-top:0px">
                             Add Product
                        </button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                         <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"> Create a New Item </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    <form action="/items" method="post" action="/items">
                                     @csrf
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="product_code"> Product Code:
                                            <input type="text" class="form-control" id="product_code" name="product_code" required> </label>
                                        </div>
                                        <div class="form-group">
                                            <label for="product_name"> Product Name:
                                            <input type="text" class="form-control" id="product_name" name="product_name" required>  </label>
                                        </div>
                                        <div class="form-group">
                                            <label for="category"> Category:
                                            <input type="text" class="form-control" id="category" name="category" required>  </label>
                                        </div>
                                        <div class="form-group">
                                            <label for="quantity"> Quantity:
                                            <input type="text" class="form-control" id="quantity" name="quantity" required>  </label>
                                        </div>
                                        <div class="form-group">
                                            <label for="selling_price"> Selling Price:
                                            <input type="text" class="form-control" id="selling_price" name="selling_price" required>  </label>
                                        </div>
                            
                                    </div>
                                         <div class="modal-footer">
                                         <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                         <button type="submit" class="btn btn-light"> Add Item</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                            </div>
                            </div>
                            <div class="col"></div>
            </div>
            <div class="container">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th> Product Code </th>
                            <th> Product Name </th>
                            <th> Category </th>
                            <th> Quantity</th>
                            <th> Selling Price </th>
                            <th> Action </th>
                         </tr>
                    </thead>
                    <tbody>
                @foreach($items as $item)
                <tr>
                    <td> {{ $item -> product_code}}</td> 
                    <td> {{ $item -> product_name}}</td>
                    <td> {{ $item ->category}}</td>
                    <td> {{ $item ->quantity}}</td>
                    <td> {{ $item ->selling_price}}</td>
                    <td> 
                    <a href="items/{{$item ->id}}/edit"> <button class="btn btn-light"> Edit </button> </a>
                    <form action="{{route ('items.destroy',$item->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-light"> Delete </button>
                    </td>
                </tr> 
             @endforeach
             </tbody>
             </table>
             </div>
        </div>
@endsection
