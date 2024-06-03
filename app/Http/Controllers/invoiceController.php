<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class invoiceController extends Controller
{
    public function Invoice()
    {
        $data = [
            'id' => 1,
            'name' => "Azhan",
            'email' => "azhanmalick@gmail.com",
            'total' => 1208,
            'subtotal' => 1203.00,
            'createdAt' => "17-11-2005"
        ];
        $pdf = Pdf::loadView('invoice_pdf', $data);
        return $pdf->stream('invoice.pdf');
    }
}
