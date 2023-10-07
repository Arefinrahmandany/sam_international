<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewPassportNotification extends Notification
{
    use Queueable;

    public $passport_number;
    public $name;
    public $email;
    public $applying_country;
    public $agent_via;

    /**
     * Create a new notification instance.
     */
    public function __construct($newPassportdata)
    {
        $this -> passport_number    = $newPassportdata['passport_number'];
        $this -> name               = $newPassportdata['name'];
        $this -> email              = $newPassportdata['email'];
        $this -> applying_country   = $newPassportdata['applying_country'];
        $this -> agent_via          = $newPassportdata['agent_via'];
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
