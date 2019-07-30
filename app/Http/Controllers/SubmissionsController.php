<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Submissions;

class SubmissionsController extends BaseController
{
    public function store(Request $request) {
        Submissions::create([
            'input1' => $request->input1,
            'input2' => $request->input2,
            'input3' => $request->input3,
            'input4' => $request->input4,
            'input5' => $request->input5
        ]);

        $mpdf = new \Mpdf\Mpdf();
        $html = '
        <style>
        .rounded {
            border:0.1mm solid #220044;
            padding: 10px;
            margin: 5px;
            border-radius: 2mm;
            background-clip: border-box;
        }
        </style>
        <body>
        <div class="rounded">' . $request->input1 . '</div>' .
        '<div class="rounded">' . $request->input2 . '</div>' .
        '<div class="rounded">' . $request->input3 . '</div>' .
        '<div class="rounded">' . $request->input4 . '</div>' .
        '<div class="rounded">' . $request->input5 . '</div></body>';

        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }
}
