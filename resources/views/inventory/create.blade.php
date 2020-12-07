@extends('layouts.app')
@section('content')
    <div class="container">
    <form action="/inventories" method="post" action="/inventories">
     @csrf
     <div class="shadow p-3 mb-5 bg-white rounded">
     <div class="row">
    <div class="col align-self-start">
    <h1> Create a New Item</h1>
    <label for="item_code"> Item Code: </label>
            <input type="text" id="item_code" name="item_code" required>
    <label for="item_name"> Item Name: </label>
            <input type="text" id="item_name" name="item_name" required>
            <label for="category"> Category: </label>
            <input type="text" id="category" name="category" required>
            <label for="supplier"> Supplier: </label>
            <input type="text" id="supplier" name="supplier" required>
        <label for="date_received"> Date Received: </label>
            <input type="text" id="date_received" name="date_received" required>
        <label for="original_price"> Original Price: </label>
            <input type="text" id="original_price" name="original_price" required>
            <label for="selling_price"> Selling Price: </label>
            <input type="text" id="selling_price" name="selling_price" required>
            <label for="quantity"> Quantity: </label>
            <input type="text" id="quantity" name="quantity" required>
        <label for="quantity_left"> Quantity Left: </label>
            <input type="text" id="quantity_left" name="quantity_left" required>
            <label for="total"> Total: </label>
            <input type="text" id="total" name="total" required>
            <label for="profit"> Profit: </label>
            <input type="text" id="profit" name="profit" required>
            <br>
            <button type="submit" value="Add Item" class="btn btn-light">
            Add Item
            </button> </form>
</form>
    </div>
    <div class="col align-self-center">
    </div>
    <div class="col align-self-end"></div>
  </div>
</div>
</div>
<p class="msg"> {{session ('msg')}}</p>
@endsection
