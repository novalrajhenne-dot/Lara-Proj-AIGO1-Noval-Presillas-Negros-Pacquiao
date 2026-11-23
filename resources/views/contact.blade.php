@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endpush

@section('content')
    <div class="contact-page">
        <h1>Contact SILONG</h1>
        <p>Plan a visit to SILONG or try our inquiry form.</p>

        <div class="contact-columns">
            <section class="contact-details">
                <h2>Visit us</h2>
                <p><strong>Location:</strong> Ampayon, Butuan City, near Caraga State University</p>
                <p><strong>Operating hours:</strong> Monday to Saturday, 9 AM to 7 PM</p>
                <p><strong>Email:</strong> hello@silongcafe.com</p>
                <p><strong>Facebook and Instagram:</strong> @silongcafe</p>
            </section>

            <section>
                <h2>Try the inquiry form</h2>
                <p>This demo checks your entries without sending an email.</p>

                <form id="contact-form" novalidate>
                    <label for="full-name">Full name</label>
                    <input id="full-name" type="text" autocomplete="name"
                           aria-describedby="full-name-error" required>
                    <small id="full-name-error" class="contact-error"></small>

                    <label for="email">Email</label>
                    <input id="email" type="email" autocomplete="email"
                           aria-describedby="email-error" required>
                    <small id="email-error" class="contact-error"></small>

                    <label for="subject">Subject</label>
                    <input id="subject" type="text"
                           aria-describedby="subject-error" required>
                    <small id="subject-error" class="contact-error"></small>

                    <label for="message">Message</label>
                    <textarea id="message" rows="5"
                              aria-describedby="message-error" required></textarea>
                    <small id="message-error" class="contact-error"></small>

                    <button type="submit">Check inquiry</button>
                    <p id="contact-status" role="status"></p>
                </form>
            </section>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/contact.js') }}" defer></script>
@endpush