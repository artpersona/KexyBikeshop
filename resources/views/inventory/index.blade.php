@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center"> <h1> Inventory </h1> </div>
            <div class="content">
            <div class="container px-lg-5">
                <div class="row mx-lg-n5">
                    <div class="col py-3"> <label> Total Number of Items: [ ] </label></div>
                        <div class="col py-3"> <label> Items Quantity below 10: [ ] </label></div>
                 </div>
            </div>
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-top:0px">
                        Add Product
                   </button>
                        <div class="col">
                        
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                         <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"> Create a New Item </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    <form action="/inventories" method="post" action="/inventories">
                                     @csrf
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="item_code"> Item Code:
                                            <input type="text" class="form-control" id="item_code" name="item_code" required> </label>
                                        </div>
                                        <div class="form-group">
                                            <label for="item_name"> Item Name:
                                            <input type="text" class="form-control" id="item_name" name="item_name" required>  </label>
                                        </div>
                                        <div class="form-group">
                                            <label for="category"> Category:
                                            <input type="text" class="form-control" id="category" name="category" required>  </label>
                                        </div>
                                        <div class="form-group">
                                            <label for="supplier"> Supplier:
                                            <input type="text" class="form-control" id="supplier" name="supplier" required>  </label>
                                        </div>
                                        <div class="form-group">
                                            <label for="date_received"> Date Received:      </label>
                                            <input type='text' data-language='en' class="datepicker-here form-control" data-position="right top" id="date_received" name="date_received" required/>
                                         
                                        </div>
                                        <div class="form-group">
                                            <label for="original_price"> Original Price:
                                            <input type="text" class="form-control" id="original_price" name="original_price" required>  </label>
                                        </div>
                                        <div class="form-group">
                                            <label for="selling_price"> Selling Price:
                                            <input type="text" class="form-control" id="selling_price" name="selling_price" required>  </label>
                                        </div>
                                        <div class="form-group">
                                            <label for="quantity"> Quantity:
                                            <input type="text" class="form-control" id="quantity" name="quantity" required>  </label>
                                        </div>
                                        <div class="form-group">
                                            <label for="quantity_left"> Quantity Left:
                                            <input type="text" class="form-control" id="quantity_left" name="quantity_left" required>  </label>
                                        </div>
                                        <div class="form-group">
                                            <label for="total"> Total:
                                            <input type="text" class="form-control" id="total" name="total" required>  </label>
                                        </div>
                                        <div class="form-group">
                                            <label for="total"> Profit:
                                            <input type="text" class="form-control" id="profit" name="profit" required>  </label>
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
                        <div class="col"> </div> 
                 </div>
            </div>
                <table class="table table-bordered" id="data-table">
                    <thead>
                        <tr>
                            <th> Item Code </th>
                            <th> Item Name </th>
                            <th> Category </th>
                            <th> Supplier </th>
                            <th> Date Received </th>
                            <th> Original Price</th>
                            <th> Selling Price </th>
                            <th> Quantity </th>
                            <th> Quantity Left</th>
                            <th> Total</th>
                            <th> Profit </th>
                            <th> Action </th>
                         </tr>
                    </thead>
                    <tbody>
                    @foreach($inventory as $inventory)
                <tr>
                    <td> {{ $inventory -> item_code}}</td> 
                    <td> {{ $inventory -> item_name}}</td> 
                    <td> {{ $inventory -> category}}</td> 
                    <td> {{ $inventory -> supplier}}</td> 
                    <td> {{ $inventory -> date_received}}</td> 
                    <td> {{ $inventory -> original_price}}</td> 
                    <td> {{ $inventory -> selling_price}}</td> 
                    <td> {{ $inventory -> quantity}}</td> 
                    <td> {{ $inventory -> quantity_left}}</td> 
                    <td> {{ $inventory -> total}}</td> 
                    <td> {{ $inventory -> profit}}</td> 
                    <td> 
                    
                    <button type="submit" class="btn btn-light" data-toggle="modal" data-target="#exampleModal1" style="margin-top:0px"> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg> Edit </button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                         <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"> Edit Item </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form method="post" action="/inventories/{{ $inventory-> id}}">
                                    @csrf
                                    @method('put')
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="item_code"> Item Code:
                                            <input type="text" class="form-control" id="item_code" name="item_code" value="{{ $inventory-> item_code}}" required> </label>
                                        </div>
                                        <div class="form-group">
                                            <label for="item_name"> Item Name:
                                            <input type="text" class="form-control" id="item_name" name="item_name" value="{{ $inventory-> item_name}}" required>  </label>
                                        </div>
                                        <div class="form-group">
                                            <label for="category"> Category:
                                            <input type="text" class="form-control" id="category" name="category" value="{{ $inventory -> category}}" required>  </label>
                                        </div>
                                        <div class="form-group">
                                            <label for="supplier"> Supplier:
                                            <input type="text" class="form-control" id="supplier" name="supplier" value="{{ $inventory -> supplier}}" required>  </label>
                                        </div>
                                        <div class="form-group">
                                            <label for="date_received"> Date Received:
                                            <input type="text" class="form-control" id="date_received" name="date_received" value="{{ $inventory -> date_received}}" required>  </label>
                                        </div>
                                        <div class="form-group">
                                            <label for="original_price"> Original Price:
                                            <input type="text" class="form-control" id="original_price" name="original_price" value="{{ $inventory -> original_price}}" required>  </label>
                                        </div>
                                        <div class="form-group">
                                            <label for="selling_price"> Selling Price:
                                            <input type="text" class="form-control" id="selling_price" name="selling_price" value="{{ $inventory -> selling_price}}" required>  </label>
                                        </div>
                                        <div class="form-group">
                                            <label for="quantity"> Quantity:
                                            <input type="text" class="form-control" id="quantity" name="quantity" value="{{ $inventory -> quantity}}" required>  </label>
                                        </div>
                                        <div class="form-group">
                                            <label for="quantity_left"> Quantity Left:
                                            <input type="text" class="form-control" id="quantity_left" name="quantity_left" value="{{ $inventory -> quantity_left}}" required>  </label>
                                        </div>
                                        <div class="form-group">
                                            <label for="total"> Total:
                                            <input type="text" class="form-control" id="total" name="total" value="{{ $inventory -> total}}" required>  </label>
                                        </div>
                                        <div class="form-group">
                                            <label for="profit"> Profit:
                                            <input type="text" class="form-control" id="profit" name="profit" value="{{ $inventory -> profit}}" required>  </label>
                                        </div>
                            
                                    </div>
                                         <div class="modal-footer">
                                         <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                         <button type="submit" class="btn btn-light"> Update Item</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                    <form action="{{route ('inventories.destroy',$inventory->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-light"> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/></svg>Delete </button>
                    </form> </td>
                </tr> 
             @endforeach
             </tbody>
             </table>
            </div>
        </div>
@endsection
