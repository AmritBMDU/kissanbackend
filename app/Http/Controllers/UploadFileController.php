<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\RewardsImport;

class UploadFileController extends Controller
{
    public function uploadExcel(Request $request)
    {
        $request->validate([
            'excel_file' => 'required|mimes:xls,xlsx',
        ]);

        $file = $request->file('excel_file');

        // Process the uploaded Excel file using the import class
        Excel::import(new RewardsImport, $file);

        return redirect()->back()->with('success', 'Excel data imported and stored in the rewards table.');
    }
}
