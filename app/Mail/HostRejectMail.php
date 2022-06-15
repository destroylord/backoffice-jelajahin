<?php

namespace App\Mail;

use App\Models\Host;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class HostRejectMail extends Mailable
{
    use Queueable, SerializesModels;


    protected $host;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Host $host)
    {
        $this->host = $host;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('e41201302@student.polije.ac.id', 'Host Reject')
                    ->view('vendor.mail.reject.host')
                    ->with([
                        'name' => $this->host->full_name,
                    ]);
    }
}
