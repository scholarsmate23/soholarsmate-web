<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ApplicationReceived extends Mailable
{
    use Queueable, SerializesModels;
    public $application;
    public $attachmentPath;



    /**
     * Create a new message instance.
     */
    public function __construct($application, $attachmentPath)
    {
        $this->application = $application;
        $this->attachmentPath = $attachmentPath;
    }

    /**
     * Get the message envelope.
     */

    public function build()
    {
        $filePath = storage_path('app/' . $this->attachmentPath);
        $fileExtension = pathinfo($filePath, PATHINFO_EXTENSION);
        $fileName = 'Resume_' . $this->application->name . '.' . $fileExtension;
        return $this->subject('Application Received')
            ->view('emails.application_received')
            ->with([
                'name' => $this->application->name,
                'email' => $this->application->email,
                'phone' => $this->application->phone,
            ])
            ->attach($filePath, [
                'as' => $fileName, // Use dynamic file name with correct extension
                'mime' => mime_content_type($filePath), // Get the MIME type dynamically
            ])
            ->cc(['sarveshsingh2194@gmail.com', 'scholerbgp23@gmail.com']); // Multiple CC emails
    }

    /**
     * Get the message content definition.
     */

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
}
