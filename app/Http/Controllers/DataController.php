<?php

namespace App\Http\Controllers;

use App\Models\MyApp;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function getTable(){

        $tableData = MyApp::getData();
        return $tableData;
    }
}
