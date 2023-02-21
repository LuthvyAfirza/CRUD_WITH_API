<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Table;

class Table_C extends Controller
{
    public function table()
    {
        $data_table = Table::all();
        return view('table.index', compact('data_table'));
    }
}
