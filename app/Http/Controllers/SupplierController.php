<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    public function supplier1(){
        $supplier = Supplier::paginate(5);
    
            return view('supplier')
                    ->with('title', 'Data Supplier')
                    ->with('supplier', $supplier);
        }
}
