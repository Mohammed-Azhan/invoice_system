<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;
use App\Models\Item;
use illuminate\Support\Str;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;


class inController extends Controller
{
    public function index(Request $req){

        $invoice = new Invoice;
        $invoice->uuid = Str::uuid();
        $invoice->client_name = $req->name;
        $invoice->inv_num = $req->inv_num;
        $invoice->po_num = $req->po_num;
        $invoice->email = $req->email;
        $invoice->inv_date = $req->inv_date;
        $invoice->due_date = $req->due_date;
        $invoice->save();

        $items = [];

        $grand_total = 0;
        $line_total = 0;
        $sub_total = 0;
        $total_tax = 0;

        for ($i = 0; $i < count($req->item_name); $i++) { 
            
            $grand_total+= $req->cost[$i] * $req->quan[$i] + $req->tax[$i];
            $total_tax += $req->tax[$i];
            $sub_total +=$req->cost[$i]*$req->quan[$i];
        }
        for ($i = 0; $i < count($req->item_name); $i++) {
            $line_total += $req->cost[$i] * $req->quan[$i] + $req->tax[$i];
            $items[] = [
                'uuid' => Str::uuid(),
                'inv_num' => $req->inv_num,
                'item_name' => $req->item_name[$i],
                'desc' => $req->desc[$i],
                'cost' => $req->cost[$i],
                'quan' => $req->quan[$i],
                'tax' => $req->tax[$i],
                'line_total' => $line_total
            ];

            
        
            // Print the current item to see its content
       
        }
        DB::table('items')->insert($items);
        
        $invoice_update = Invoice::where('inv_num', $req->inv_num)->update([
            'line_total' => $sub_total,
            'grand_total' => $grand_total,
            'total_tax' => $total_tax
        ]);  

        $invoice_details = Invoice::where('inv_num', $req->inv_num)->first();
        $item_details = Item::where('inv_num', $req->inv_num)->get();
       

        $pdf = PDF::loadView('invoice_pdf', ['items' => $item_details, 'invoice' => $invoice_details]);

        // // Stream the generated PDF
        return $pdf->stream('invoice.pdf');
    

    }

    public function test(Request $req){
        dd($req->item_name);
    }
}
