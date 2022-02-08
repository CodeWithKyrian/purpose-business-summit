<?php

namespace App\Notifications;

use App\Models\Ticket;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class TicketRegistered extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * The number of times the job may be attempted.
     *
     * @var int
     */
    public $tries = 5;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  User  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable) : MailMessage
    {
        $notifiable->load('ticket');

        return (new MailMessage)
                    ->line('Hello ' . $notifiable->firstname . ', congrats on purchasing a ticket to attend The Purpose Business Summit. We are delighted to see you on the 19th of March, 2022.')
                    ->line('Please, keep your ticket safe as this will be used to verify your access to the event center. Below are your ticket details:')
                    ->line('Ticket Name: '. $notifiable->ticket->name. ', Ticket Code: '. $notifiable->ticket_code. ', Full Name: ' . $notifiable->fullname . '.')
                    ->action('Check Ticket', route('search', ['tcode' => $notifiable->ticket_code]))
                    ->line('Thank you for choosing PBS!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
