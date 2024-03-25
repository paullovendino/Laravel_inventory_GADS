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
        $data = products_table::where('Model_Name', 'ilike', '%'.$request->input('search').'%')
        ->orWhere('Category', 'ilike', '%'.$request->input('search').'%')
        ->orWhere('Department_assigned_item_location', 'ilike', '%'.$request->input('search').'%')
        ->orWhere('SKU_Serial_Number', 'ilike', '%'.$request->input('search').'%')
        ->get();

        return response()->json([
            'status' => true,
            'code' => 200,
            'error' => null,
            'data' => $data,
        ], 200);
    }

    public function filter(Request $request){
        $data = products_table::where('Model_Name', '<>', '');

        $modelName = $request->input('modelName');
        $category = $request->input('category');
        $department = $request->input('department');
        // $expectedQuantity = $request->input('expectedQuantity');
        // $actualQuantity = $request->input('actualQuantity');
        $dateArrived = $request->input('dateArrived');
        $dateChecked = $request->input('dateChecked');

        if(isset($modelName)){
            $data->where('Model_Name', $modelName);
        }

        if(isset($category)){
            $data->where('Category', $category);
        }

        if(isset($department)){
            $data->where('Department_assigned_item_location', 'ilike', '%'.$department.'%');
        }

        //Needs call from frontend

        // if(isset($expectedQuantity)){
        //     $data->where('expected_Quantity', $expectedQuantity);
        // }

        // if(isset($actualQuantity)){
        //     $data->where('actual_Quantity', $actualQuantity);
        // }

        if(isset($dateArrived)){
            $data->where('Date_Arrived_Listed_Date', $dateArrived);
        }

        if(isset($dateChecked)){
            $data->where('Date_Checked', $dateChecked);
        }

        return response()->json([
            'status' => true,
            'code' => 200,
            'error' => null,
            'data' => $data->get(),
        ], 200);
    }
}
