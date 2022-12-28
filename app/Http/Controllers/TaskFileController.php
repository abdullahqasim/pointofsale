<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ImportTaskFile;
use App\Models\TaskFileRecords;

class TaskFileController extends Controller
{
    public function importView(Request $request){
        return view('importFile');
    }
 
    public function import(Request $request){
        $file = $request->file('file')->store('files');
        Excel::import(new ImportTaskFile, $file);

        $taskFileRecord = new TaskFileRecords();
        $taskFileRecord->file_path = $file;
        $taskFileRecord->save();

        return redirect()->back();
    }

    public function listing()
    {
        $taskFileRecords = TaskFileRecords::all();
        return view('listing', compact('taskFileRecords'));
    } 
}
