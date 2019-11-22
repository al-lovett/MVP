<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;

class DynamicPDFController extends Controller
{
    public function index(){

      $customer_data =$this->get_customer_data();
      return view('dynamic_pdf')->with('customer_data', $customer_data);
    }

    public function get_customer_data(){

      $customer_data = DB::table('services')
                        ->limit(1)
                        ->get();
        return $customer_data;
    }
    function pdf()
    {
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->convert_customer_data_to_html());
        return $pdf->stream();
    }
    function convert_customer_data_to_html()
    {
     $customer_data = $this->get_customer_data();
     $output = '
     <h3 align="center">Customer Job</h3>
     <table width="100%" style="border-collapse: collapse; border: 0px;">
      <tr>
    <th style="border: 1px solid; padding:12px;" width="20%">Company Name</th>
    <th style="border: 1px solid; padding:12px;" width="30%">Contact</th>
    <th style="border: 1px solid; padding:12px;" width="15%">Address</th>
    <th style="border: 1px solid; padding:12px;" width="15%">Phone</th>
    <th style="border: 1px solid; padding:12px;" width="20%">Fax</th>
    <th style="border: 1px solid; padding:12px;" width="20%">Email</th>
    <th style="border: 1px solid; padding:12px;" width="20%">Package</th>
    <th style="border: 1px solid; padding:12px;" width="20%">Additional Notes</th>
   </tr>
     ';
     foreach($customer_data as $service)
     {
      $output .= '
      <tr>
       <td style="border: 1px solid; padding:12px;">'.$service->company_name.'</td>
       <td style="border: 1px solid; padding:12px;">'.$service->contact_name.'</td>
       <td style="border: 1px solid; padding:12px;">'.$service->address.'</td>
       <td style="border: 1px solid; padding:12px;">'.$service->phone.'</td>
       <td style="border: 1px solid; padding:12px;">'.$service->fax.'</td>
       <td style="border: 1px solid; padding:12px;">'.$service->email.'</td>
       <td style="border: 1px solid; padding:12px;">'.$service->package.'</td>
       <td style="border: 1px solid; padding:12px;">'.$service->additionalNotes.'</td>
      </tr>
      ';
     }
     $output .= '</table>';
     return $output;
    }
}
