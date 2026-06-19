<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class QuoteController extends Controller
{
    public function send(Request $request)
    {
        $data = [
            'fullName' => $request->fullName,
            'companyName' => $request->companyName,
            'phoneNumber' => $request->phoneNumber,
            'emailAddress' => $request->emailAddress,
            'serviceRequired' => $request->serviceRequired,
            'originCountry' => $request->originCountry,
            'destinationCountry' => $request->destinationCountry,
            'cargoDetails' => $request->cargoDetails,
            'additionalMessage' => $request->additionalMessage,
        ];

        Mail::raw(
            "NEW QUOTE REQUEST\n\n" .
            "Name: {$data['fullName']}\n" .
            "Company: {$data['companyName']}\n" .
            "Phone: {$data['phoneNumber']}\n" .
            "Email: {$data['emailAddress']}\n" .
            "Service: {$data['serviceRequired']}\n" .
            "Origin: {$data['originCountry']}\n" .
            "Destination: {$data['destinationCountry']}\n" .
            "Cargo Details: {$data['cargoDetails']}\n" .
            "Additional Message: {$data['additionalMessage']}",
            function ($message) {
                $message->to('info@excellentcargofreighters.co.ke')
                        ->subject('New Quote Request');
            }
        );

        return back()->with('success', 'Quote request sent successfully!');
    }
}
