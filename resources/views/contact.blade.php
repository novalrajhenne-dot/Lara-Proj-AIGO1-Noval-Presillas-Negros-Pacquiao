@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endpush

@section('content')
    <main class="contact-page">
        <h1>Contact SILONG</h1>
        <p>Questions about the café? Send us an inquiry.</p>

        <div class="contact-columns">
            <section>
                <h2>Visit us</h2>
                <p>Ampayon, Butuan City, near Caraga State University</p>
                <p>Proposed hours: Monday to Saturday, 9 AM to 7 PM</p>
                <p>Sample email: hello@silong.example</p>
                <p>Facebook and Instagram pages coming soon.</p>
            </section>

            <section>
                <h2>Send an inquiry</h2>
                <p>This form checks your entries in the browser. It does not send email.</p>

                <form id="contact-form" novalidate>
                    <label for="full-name">Full name</label>
                    <input id="full-name" type="text" autocomplete="name" required>
                    <small id="full-name-error" class="contact-error"></small>

                    <label for="email">Email</label>
                    <input id="email" type="email" autocomplete="email" required>
                    <small id="email-error" class="contact-error"></small>

                    <label for="subject">Subject</label>
                    <input id="subject" type="text" required>
                    <small id="subject-error" class="contact-error"></small>

                    <label for="message">Message</label>
                    <textarea id="message" rows="5" required></textarea>
                    <small id="message-error" class="contact-error"></small>

                    <button type="submit">Check inquiry</button>
                    <p id="contact-status" role="status"></p>
                </form>
            </section>
        </div>
    </main>
@endsection

@push('scripts')
    <script src="{{ asset('js/contact.js') }}" defer></script>
@endpush