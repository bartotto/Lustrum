<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class NewPost extends Notification{
    use Queueable;

    protected $my_notification;
    
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($msg){
        $this->my_notification = $msg;
        }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable){
        return ['mail'];
        }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable){
        return (new MailMessage)
                    ->subject('New Post!'.$this->my_notification)
                    ->line('Er is een nieuwe bijdrage gemaakt in het Lustrum Caligula Blog')
                    ->action('Read Post', url('www.cloudways.com'))
                    ->line('Mooi toch?');
        }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable){
        return [
            //
            ];
        }
    }
