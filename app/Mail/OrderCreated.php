<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderCreated extends Mailable
{
    use Queueable, SerializesModels;

	 protected $name;
	 protected $total;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $total)
    {
        $this->name = $name;
        $this->total = $total;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.order_created', [
			  'name' 	=> $this->name,
			  'total' 	=> $this->total 
			  ]);
    }
}