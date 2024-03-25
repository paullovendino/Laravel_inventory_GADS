<?php

namespace App\Models\for_inventory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products_table extends Model
{
    use HasFactory;

    //Table name
    protected $table = 'products_table';

    //
    public $timestamps = false; //Disable timestamps
    public $primaryKey = 'item_id'; //Set Primary Key

    //
    protected $fillable = [
        //Item id
        'item_id',
        
        //Need Info
        'Model_Name',
        'Category',
        'Department_assigned_item_location',
        'expected_quantity',
        'actual_quantity',
        'Date_Arrived_Listed_Date',
        'Date_Checked',
        'SKU_Serial_Number',

        //Auto Generate
        'Model_code',
    ];
}
