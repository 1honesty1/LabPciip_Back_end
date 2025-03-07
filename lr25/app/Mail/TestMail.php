<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;

    /**
     * Конструктор письма.
     *
     * @param array $details – данные для отображения в шаблоне письма.
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Построение письма.
     */
    public function build()
    {
        return $this->subject('Тестовое письмо от Laravel')
                    ->view('emails.test');
    }
} 