<?php

namespace App\Mail;
  
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
  
class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
   
    public $attributes;
  
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($attributes)
    {
        $this->attributes = $attributes;
    }
  
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('lipinskijakub.pl - '. $this->attributes['topic'])
                    ->view('emails.contact')
                    ->with([
            'attributes' => $this->attributes,
        ]);
    }
}