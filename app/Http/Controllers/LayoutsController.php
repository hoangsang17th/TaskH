<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MailTaskGo;
use Mail;
class LayoutsController extends Controller
{
    //phsang
    public function mail()
    {
        # code...
        Mail::to('hnvnam.19it3@vku.udn.vn')->send(new MailTaskGo('TaskGo'));
        return 'Email sent Successfully';
    }
}
