<?php

namespace App\Http\Controllers;

use App\Models\for_inventory\products_table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InventoryController extends Controller
{
    public function index(){
        $data = products_table::All();

        return response()->json([
            'status' => true,
            'code' => 200,
            'error' => null,
            'data' => $data,
        ], 200);
    }

    public function create(){

    }

    public function delete(Request $request){
        $validator = Validator::make($request->all(), [
            'id' => 'required',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => false,
                'code' => 405,
                'error' => $validator->errors(),
                'data' => null,
            ], 405);
        }

        $item = products_table::find($request->input('id'));

        if($item == null){
            return response()->json([
                'status' => false,
                'code' => 404,
                'error' => 'Item not found',
                'data' => null,
            ], 404);
        }

        $affectedRows = $item->delete();

        if($affectedRows > 0){
            return response()->json([
                'status' => true,
                'code' => 200,
                'error' => null,
                'data' => $affectedRows,
            ], 200);
        }else{
            return response()->json([
                'status' => false,
                'code' => 404,
                'error' => 'Delete Request Failed',
                'data' => null,
            ], 404);
        }
    }

    public function update(Request $request){

    }

    public function search(Request $request){
        $data = products_table::where('id', $request->input('id'))
        ->orWhere('Model_Name', $request->input('modelName'))
        ->orWhere('Category', $request->input('category'))
        ->orWhere('Department_assigned_item_location', $request->input('department'))
        ->orWhere('SKU_Serial_Number', $request->input('sku'))
        ->get();

        return response()->json([
            'status' => true,
            'code' => 200,
            'error' => null,
            'data' => $data,
        ], 200);
    }

    public function filter(Request $request){ //waiting for frontend
        
    }
}
