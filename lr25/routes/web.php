<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

Route::get('/send-test-email', function () {
    $details = [
        'title' => 'Привет из Laravel!',
        'body'  => 'Это тестовое сообщение, отправленное через Laravel.'
    ];

    Mail::to('recipient@example.com')->send(new TestMail($details));

    return 'Письмо отправлено';
}); 