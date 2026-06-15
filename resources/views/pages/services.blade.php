@extends('layout.app')

@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/services.css') }}">

<section class="services-section">
    <div class="services-header">
        <h1>Our Services</h1>
        <p>End-to-end logistics solutions for every shipment, every destination.</p>
    </div>

    <div class="services-container">
        <div class="services-grid">
            
            <div class="service-card">
                <div class="service-img-wrapper">
                    <img src="/assets/images/service/airfreight.jpg" alt="Air Freight">
                    <div class="service-icon-badge"><i class="fas fa-plane"></i></div>
                </div>
                <div class="service-content">
                    <h3>Air Freight Forwarding</h3>
                    <p>Door-to-door freight solutions for imports and exports with global carrier partnerships, priority clearance, and full tracking.</p>
                    <a href="/quote" class="request-quote-btn">Request Quote <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="service-card">
                <div class="service-img-wrapper">
                    <img src="/assets/images/service/seafright.jpg" alt="Sea Freight">
                    <div class="service-icon-badge"><i class="fas fa-ship"></i></div>
                </div>
                <div class="service-content">
                    <h3>Sea Freight (FCL & LCL)</h3>
                    <p>Full Container Load and Less than Container Load services from major global ports with reliable schedules and competitive rates.</p>
                    <a href="/quote" class="request-quote-btn">Request Quote <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="service-card">
                <div class="service-img-wrapper">
                    <img src="/assets/images/service/roadfreight.jpg" alt="Road Freight">
                    <div class="service-icon-badge"><i class="fas fa-truck"></i></div>
                </div>
                <div class="service-content">
                    <h3>Road Freight</h3>
                    <p>Comprehensive road transport across East Africa and beyond with modern fleets and end-to-end GPS tracking.</p>
                    <a href="/quote" class="request-quote-btn">Request Quote <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="service-card">
                <div class="service-img-wrapper">
                    <img src="/assets/images/service/customs.jpg" alt="Customs Clearance">
                    <div class="service-icon-badge"><i class="fas fa-file-contract"></i></div>
                </div>
                <div class="service-content">
                    <h3>Customs Clearance</h3>
                    <p>Expert and fast logistics handling of documentation, duty calculations, and strict compliance to avoid delays at the port.</p>
                    <a href="/quote" class="request-quote-btn">Request Quote <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="service-card">
                <div class="service-img-wrapper">
                    <img src="/assets/images/service/idf.jpg" alt="IDF Processing">
                    <div class="service-icon-badge"><i class="fas fa-clipboard-list"></i></div>
                </div>
                <div class="service-content">
                    <h3>IDF Processing</h3>
                    <p>Dedicated processing for Import Declaration Forms (IDF) ensuring your documentation moves flawlessly ahead of schedule.</p>
                    <a href="/quote" class="request-quote-btn">Request Quote <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="service-card">
                <div class="service-img-wrapper">
                    <img src="/assets/images/service/courier.jpg" alt="Courier Services">
                    <div class="service-icon-badge"><i class="fas fa-box-open"></i></div>
                </div>
                <div class="service-content">
                    <h3>Courier Services</h3>
                    <p>Reliable, national, and international express services for high-value documents, small parcels, and time-sensitive packages.</p>
                    <a href="/quote" class="request-quote-btn">Request Quote <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="service-card">
                <div class="service-img-wrapper">
                    <img src="/assets/images/service/relocation.jpg" alt="Office & Home Relocation">
                    <div class="service-icon-badge"><i class="fas fa-truck-ramp-box"></i></div>
                </div>
                <div class="service-content">
                    <h3>Office & Home Relocations</h3>
                    <p>Professional packing, loading, transport, and unpacking services tailored safely for corporate offices and homes across Kenya.</p>
                    <a href="/quote" class="request-quote-btn">Request Quote <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="service-card">
                <div class="service-img-wrapper">
                    <img src="/assets/images/service/warehousing.jpg" alt="Warehousing">
                    <div class="service-icon-badge"><i class="fas fa-warehouse"></i></div>
                </div>
                <div class="service-content">
                    <h3>Warehousing Solutions</h3>
                    <p>Secure, monitored, and scalable commercial storage spaces paired with accurate inventory management and delivery control.</p>
                    <a href="/quote" class="request-quote-btn">Request Quote <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="service-card">
                <div class="service-img-wrapper">
                    <img src="/assets/images/service/pet.jpg" alt="Pet Relocation">
                    <div class="service-icon-badge"><i class="fas fa-paw"></i></div>
                </div>
                <div class="service-content">
                    <h3>Pet Relocation</h3>
                    <p>Safe transportation solutions for pets during moves.</p>
                    <a href="/quote" class="request-quote-btn">Request Quote <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection