<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QrCodeController extends Controller
{
    public function qrCode()
    {
        return view('super-admin/Dashboard/Qr-Code/qrcode');
    }

    public function qrCodeView()
    {
        return view('super-admin/Dashboard/Qr-Code/qr-code-view');
    }

    public function qr_Code()
    {
        return view('super-admin/Dashboard/Qr-Code/qr-code');
    }
}
