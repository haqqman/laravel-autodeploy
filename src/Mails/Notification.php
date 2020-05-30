<?php

namespace Haqqman\Autodeploy\Mails;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Notification extends Mailable
{
    use Queueable, SerializesModels;

    public $view;

    /**
     * Create a new message instance.
     *
     * @param $view string
     *
     * @return void
     */
    public function __construct($view)
    {
        $this->view = $view;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view($this->view)
            ->subject(config('app.name').' auto deploy notification');
    }
}
