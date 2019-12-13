<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Services\BillServiceInterface;
use App\Services\MailServiceInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail as MailData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SendMailController extends Controller
{
    /**
     * @var BillServiceInterface
     */
    private $billService;
    /**
     * @var MailServiceInterface
     */
    private $mailService;

    public function __construct(MailServiceInterface $mailService)
    {
        $this->mailService = $mailService;
    }

    public function form()
    {
        return view('home.mail.form');
    }

    public function sendMail(Request $request)
    {
        $bill = $this->mailService->getBill();
        $billProducts = $this->mailService->getBillsProducts();

        $this->mailService->sendMailToUser($request, $bill, $billProducts);

        $this->clearSession();
        return redirect()->back();
    }

    public function formdemo(){
        return view('home.mail.formdemo');
    }

    public function sendMaildemo(Request $get){
        $email= $get->email;
        $subject= $get->subject;
        $message= $get->message;
        Mail::to($email)->send(new SendMail($subject, $message));
    }

    public function clearSession(): void
    {
        Session::flush();
    }

    public function thankyou(){
        return view('home.mail.thankyou');
    }
}
