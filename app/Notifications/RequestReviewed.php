<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class RequestReviewed extends Notification
{
    use Queueable;

    private $username;
    private $result;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($username, $result)
    {
        $this->username = $username;
        $this->result = $result;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    public function toArray($notifiable)
    {
        return [
            'message' => 'Request anda '. $this->result .' oleh '. $this->username .'.',
            'action' => 'status'
        ];
    }
}
