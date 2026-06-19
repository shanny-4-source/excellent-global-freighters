@extends('layout.app')

@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/quote.css') }}">


<section class="quote-section">
    <div class="quote-header">
        <h1>Request a Quote</h1>
        <p>Share the details of your shipment and our team will respond within 24 hours.</p>
    </div>

    <div class="quote-container">
        <div class="quote-form-card">

            @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
            <form action="{{ route('quote.send') }}" method="POST">
    @csrf
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="fullName">Full Name *</label>
                       <input type="text" id="fullName" name="fullName" required>
                    </div>
                    <div class="form-group">
                        <label for="companyName">Company Name</label>
                        <input type="text" id="companyName" name="companyName">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="phoneNumber">Phone Number *</label>
                        <input type="tel" id="phoneNumber" name="phoneNumber" required>
                    </div>
                    <div class="form-group">
                        <label for="emailAddress">Email Address *</label>
                        <input type="email" id="emailAddress" name="emailAddress" required>
                    </div>
                </div>

                <div class="form-group full-width">
                    <label for="serviceRequired">Service Required *</label>
                    <div class="select-wrapper">
                        <select id="serviceRequired" name="serviceRequired" required>
                            <option value="" disabled selected>Select a service</option>
                            <option value="air-freight">Air Freight Forwarding</option>
                            <option value="sea-freight">Sea Freight (FCL & LCL)</option>
                            <option value="road-freight">Road Freight</option>
                            <option value="customs-clearance">Customs Clearance & Compliance</option>
                            <option value="idf-processing">IDF Processing</option>
                            <option value="courier-services">Courier Services</option>
                            <option value="relocations">Office & Home Relocations</option>
                            <option value="warehousing">Warehousing & Distribution</option>
                            <option value="pet relocation">Pet relocation</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="originCountry">Origin Country *</label>
                        <input type="text" id="originCountry" name="originCountry" required>
                    </div>
                    <div class="form-group">
                        <label for="destinationCountry">Destination Country *</label>
                        <input type="text" id="destinationCountry" name="destinationCountry" required>
                    </div>
                </div>

                <div class="form-group full-width">
                    <label for="cargoDetails">Cargo Details *</label>
                    <textarea id="cargoDetails" name="cargoDetails" rows="4" required></textarea>
                </div>

                <div class="form-group full-width">
                    <label for="additionalMessage">Additional Message</label>
                    <textarea id="additionalMessage" name="additionalMessage" rows="4"></textarea>
                </div>

                <div class="form-action">
                    <button type="submit" class="quote-submit-btn">
                        <span>Send Request</span>
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </div>

            </form>
        </div>
    </div>
</section>
@endsection