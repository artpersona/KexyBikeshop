<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inventory;
use RealRashid\SweetAlert\Facades\Alert;

class InventoryController extends Controller
{
    public function index(){
      $inventory = Inventory::paginate(5);
        return view('inventory.index',[
            'inventory' => $inventory,]);
    }
    public function show($id){
        
        $inventory = Inventory::findOrFail($id);
        return view('inventory.show',['inventory'=> $inventory]);
    }
    public function edit($id){
        
        $inventory = Inventory::findOrFail($id);
        return view('inventory.edit',['inventory'=> $inventory]);

    }
    public function update($id){
        
        $inventory = Inventory::findOrFail($id);

        $inventory -> item_code=request('item_code');
        $inventory-> item_name=request('item_name');
        $inventory-> category=request('category');
        $inventory -> supplier=request('supplier');
        $inventory -> date_received=request('date_received');
        $inventory -> original_price=request('original_price');
        $inventory -> selling_price=request('selling_price');
        $inventory -> quantity=request('quantity');
        $inventory -> quantity_left=request('quantity_left');
        $inventory -> total=request('total');
        $inventory -> profit=request('profit');

        Alert::success('Success', 'The item has been updated successfully.');
        $inventory -> save();
        return redirect('/inventories')->with('msg','The item has been updated.');

    }
    public function create(){
        return view('inventory.create');
    }
    public function store(){
       
        $inventory = new Inventory();

        $inventory -> item_code=request('item_code');
        $inventory-> item_name=request('item_name');
        $inventory-> category=request('category');
        $inventory -> supplier=request('supplier');
        $inventory -> date_received=request('date_received');
        $inventory -> original_price=request('original_price');
        $inventory -> selling_price=request('selling_price');
        $inventory -> quantity=request('quantity');
        $inventory -> quantity_left=request('quantity_left');
        $inventory -> total=request('total');
        $inventory -> profit=request('profit');
        
        Alert::success('Success', 'The item has been saved successfully.');
        $inventory -> save();
        return redirect('/inventories')->with('msg','The item has been saved.');
    }
    public function destroy($id) {
        Alert::toast('The item has been deleted!','success');
        $inventory = Inventory::findOrFail($id);
        $inventory->delete();

        return redirect('/inventories');
    }
}
