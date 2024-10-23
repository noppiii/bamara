<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ReminderPaymentMail extends Mailable
{
    use Queueable, SerializesModels;

    public $fullName;
    public $products;
    public $totalPrice;
    public $paymentMethod;
    public $snapToken;

    /**
     * Create a new message instance.
     */
    public function __construct($fullName, $products, $totalPrice, $paymentMethod, $snapToken)
    {
        $this->fullName = $fullName;
        $this->products = $products;
        $this->totalPrice = $totalPrice;
        $this->paymentMethod = $paymentMethod;
        $this->snapToken = $snapToken;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Reminder Payment Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.reminder-payment',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
