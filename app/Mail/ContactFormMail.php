<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contact)
    {
        $this->contact = $contact;
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function build()
    {
        return $this->view('admin.contact.email')->with([
            'name'          => $this->contact['name'],
            'email'         => $this->contact['email'],
            'number'        => $this->contact['number'],
            'subject'       => $this->contact['subject'],
            'type'          => $this->contact['type'],
            'thankuMessage' => $this->contact['thankuMessage'],
            'processingTime'=> $this->contact['processingTime'],
            'text'          => $this->contact['message']
        ]);
    }
}
