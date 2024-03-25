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

    public function create(Request $request){
        // dd($request);
        $validator = Validator::make($request->all(), [
            'Model_Name' => 'required|string|max:255',
            'Category' => 'required|string|max:255',
            'Department_assigned_item_location' => 'required|string|max:255',
            'expected_quantity' => 'required|integer',
            'actual_quantity' => 'required|integer',
            'Date_Arrived_Listed_Date' => 'nullable|date_format:m-d-y',
            'Date_Checked' => 'nullable|date_format:m-d-y',
            'SKU_Serial_Number' => 'required|string|max:255'
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => false,
                'code' => 404,
                'error' => $validator->errors(),
                'data' => null
            ], 404);
        }else{
             $item = products_table::create([
                'Model_Name' => $request->Model_Name,
                'Category' => $request->Category,
                'Department_assigned_item_location' => $request->Department_assigned_item_location,
                'expected_quantity' => $request->expected_quantity,
                'actual_quantity' => $request->actual_quantity,
                'Date_Arrived_Listed_Date' => $request->Date_Arrived_Listed_Date,
                'Date_Checked' => $request->Date_Checked,
                'SKU_Serial_Number' => $request->SKU_Serial_Number,
            ]);

            if($item){
                return response()->json([
                   'status' => true,
                   'code' => 200,
                   'message' => 'Item created successfully',
                   'product' => $item
                ], 200);
            }else{
                return response()->json([
                    'status' => false,
                    'code' => 404,
                    'message' => 'Item create request failed'
                ], 404);
            }
        }
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
         $validator = Validator::make($request->all(), [
            'id' => 'required',
            'Model_Name' => 'required|string|max:255',
            'Category' => 'required|string|max:255',
            'Department_assigned_item_location' => 'required|string|max:255',
            'expected_quantity' => 'required|integer',
            'actual_quantity' => 'required|integer',
            'Date_Arrived_Listed_Date' => 'nullable|date',
            'Date_Checked' => 'nullable|date',
            'SKU_Serial_Number' => 'required|string|max:255'
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => false,
                'code' => 405,
                'error' => $validator->errors(),
                'data' => null,
            ], 405);
        }else{
            $item = products_table::find($request->input('id'));
            if($item){
                $item->update([
                    'Model_Name' => $request->Model_Name,
                    'Category' => $request->Category,
                    'Department_assigned_item_location' => $request->Department_assigned_item_location,
                    'expected_quantity' => $request->expected_quantity,
                    'actual_quantity' => $request->actual_quantity,
                    'Date_Arrived_Listed_Date' => $request->Date_Arrived_Listed_Date,
                    'Date_Checked' => $request->Date_Checked,
                    'SKU_Serial_Number' => $request->SKU_Serial_Number,
                ]);
                return response()->json([
                    'status' => true,
                    'code' => 200,
                    'message' => 'Item updated successfully',
                    'product' => $item
                  ], 200);
            }else{
                return response()->json([
                    'status' => false,
                    'code' => 404,
                    'error' => 'Item not found',
                    'data' => null,
                ], 404);
            }
        }
    }

    public function filter(Request $request){ //waiting for frontend

    }
}
