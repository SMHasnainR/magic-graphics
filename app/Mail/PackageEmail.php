<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PackageEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $package;

    public $clientDetails;

    /**
     * Create a new message instance.
     */
    public function __construct($request)
    {
        $packages = collect(config('constants.packages'));
        $this->package = $packages->firstOrFail(function($item) use($request) {
            return $item['id'] == $request['package_id'];
        });
        $this->clientDetails = $request;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Package Email',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.package',
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
