<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
//    private $bill;
//    private $billProducts;
    public $sub;
    public $mes;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $subject, $message)
    {
        //
//        $this->bill = $bill;
//        $this->billProducts = $billProducts;
        $this->mes = $message;
        $this->sub = $subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
//        return $this->view('home.mail.send')
//            ->subject('Shop-Computer bill detail')
//            ->with(['bill' => $this->bill,
//                    'billproducts' => $this->billProducts,
//            ]);
        $e_subject = $this->sub;
        $e_message = $this->mes;
        return  $this->view('home.mail.senddemo', compact('e_message'))->subject($e_subject);

    }
}
