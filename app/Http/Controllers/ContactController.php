<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Models\ContactMessage;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use Throwable;

class ContactController extends Controller
{
    public function store(StoreContactRequest $request): JsonResponse|RedirectResponse
    {
        $data = $request->safe()->only(['name', 'email', 'phone', 'service', 'message']);

        $message = ContactMessage::create($data + ['ip_address' => $request->ip()]);

        // The message is already saved, so an email failure must not break the form.
        try {
            $body = "Name: {$message->name}\nEmail: {$message->email}\nPhone: {$message->phone}\n"
                ."Service: {$message->service}\n\n{$message->message}";

            Mail::raw($body, function ($mail) use ($message) {
                $mail->to(config('site.email'))
                    ->replyTo($message->email, $message->name)
                    ->subject('New website enquiry from '.$message->name);
            });
        } catch (Throwable $e) {
            report($e);
        }

        $text = 'Thank you. Your message has been received and we will contact you soon.';

        return $request->expectsJson()
            ? response()->json(['message' => $text])
            : back()->with('status', $text);
    }
}
