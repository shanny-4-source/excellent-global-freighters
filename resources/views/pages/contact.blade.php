@extends('layout.app')

@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/contact.css') }}">

<section class="contact-section">
    <div class="contact-header">
        <h1>Contact Us</h1>
        <p>We're here to help with your logistics needs — get in touch with our team today.</p>
    </div>

    <div class="contact-container">
        
        <div class="contact-info-wrapper">
            <div class="info-card">
                <div class="icon-box">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="info-text">
                    <h3>Office Address</h3>
                    <p>Eastern Bypass Road<br>Embakasi, Nairobi<br>Kenya</p>
                </div>
            </div>

            <div class="info-card">
                <div class="icon-box">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="info-text">
                    <h3>Email</h3>
                    <p><a href="mailto:info@excellentcargofreighters.co.ke">info@excellentcargofreighters.co.ke</a></p>
                </div>
            </div>

            <div class="info-card">
                <div class="icon-box">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <div class="info-text">
                    <h3>Phone</h3>
                    <p><a href="tel:+254141671889">+254 141 671889</a></p>
                </div>
            </div>

            <div class="info-card">
                <div class="icon-box">
                    <i class="fas fa-clock"></i>
                </div>
                <div class="info-text">
                    <h3>Business Hours</h3>
                    <p>Monday – Friday<br>8:00 AM – 5:00 PM</p>
                </div>
            </div>
        </div>

        <div class="contact-form-wrapper">
            <h2>Send us a message</h2>
            <form id="contactForm" novalidate>
                <div class="form-row">
                    <div class="form-group">
                        <label for="name">Your Name *</label>
                        <input type="text" id="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" id="email" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="tel" id="phone">
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject *</label>
                        <input type="text" id="subject" required>
                    </div>
                </div>

                <div class="form-group full-width">
                    <label for="message">Message *</label>
                    <textarea id="message" rows="6" required></textarea>
                </div>

                <button type="submit" class="submit-btn">
                    <span>Send Message</span>
                    <i class="fas fa-paper-plane"></i>
                </button>
            </form>
        </div>
    </div>
</section>



@endsection