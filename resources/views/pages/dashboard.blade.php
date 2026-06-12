@extends('layout.app')

@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">

<section class="hero"
    style="background-image:url('{{ asset('assets/images/hero/backg.jpg') }}');">


    <div class="overlay"></div>

    <div class="container hero-content">

        <span class="badge bg-danger">
            Trusted Since 2020 • Nairobi, Kenya
        </span>

        <h1>
            Moving Your World,
            <span class="text-warning">
                Delivering Excellence
            </span>
        </h1>

        <p>
            International Freight Forwarding,
            Customs Clearance,
            Air Freight,
            Sea Freight,
            Road Freight and Relocation Services.
        </p>

        <a href="/quote" class="btn btn-danger btn-lg">
            Request Quote
        </a>

    </div>

</section>

<section class="about-section">
    <div class="about-container">

        <!-- Left Content -->
        <div class="about-content">
            <span class="section-tag">ABOUT XCELLENT</span>

            <h2>
                Moving Your World,<br>
                Delivering Excellence
            </h2>

            <p>
                Xcellent Global Cargo Freighters Ltd was founded in Nairobi, Kenya
                with a mission to make international logistics simple, transparent,
                and dependable. From customs clearance to global freight forwarding,
                we provide reliable logistics solutions across multiple continents.
            </p>

            <p>
                Whether you're shipping a single package or managing large-scale
                cargo operations, our experienced team ensures every shipment
                reaches its destination safely, efficiently, and on time.
            </p>

            <ul class="about-features">
                <li>Licensed customs clearing agents</li>
                <li>Sea, Air & Land Freight Solutions</li>
                <li>Competitive global shipping rates</li>
                <li>Dedicated customer support team</li>
            </ul>

            <a href="/about" class="learn-btn">
                Learn More About Us →
            </a>
        </div>

        <!-- Right Image -->
        <div class="about-image">
            <img src="images/about-logistics.jpg" alt="Xcellent Cargo Team">

            <div class="experience-card">
                <h3>5+</h3>
                <p>Years Delivering Excellence</p>
            </div>
        </div>

    </div>
</section>

<section class="services-section">

    <div class="section-header">
        <span>WHAT WE DO</span>
        <h2>Comprehensive Logistics Services</h2>
        <p>
            Full-service freight and relocation solutions tailored to your needs.
        </p>
    </div>

    <div class="services-grid">

        <div class="service-card">
            <div class="icon-box">
                <i class="fas fa-plane"></i>
            </div>
            <h3>Air Freight Import & Export</h3>
            <p>Fast, secure air freight solutions worldwide.</p>
        </div>

        <div class="service-card">
            <div class="icon-box">
                <i class="fas fa-ship"></i>
            </div>
            <h3>Sea Freight (FCL & LCL)</h3>
            <p>Cost-effective international ocean shipping.</p>
        </div>

        <div class="service-card">
            <div class="icon-box">
                <i class="fas fa-truck"></i>
            </div>
            <h3>Road Freight</h3>
            <p>Regional and cross-border transportation.</p>
        </div>

        <div class="service-card">
            <div class="icon-box">
                <i class="fas fa-file-signature"></i>
            </div>
            <h3>Customs Clearance</h3>
            <p>Fast and compliant border clearance services.</p>
        </div>

        <div class="service-card">
            <div class="icon-box">
                <i class="fas fa-file-alt"></i>
            </div>
            <h3>IDF Processing</h3>
            <p>Efficient Import Declaration Form handling.</p>
        </div>

        <div class="service-card">
            <div class="icon-box">
                <i class="fas fa-box"></i>
            </div>
            <h3>Courier Services</h3>
            <p>Reliable door-to-door parcel delivery.</p>
        </div>

        <div class="service-card">
            <div class="icon-box">
                <i class="fas fa-home"></i>
            </div>
            <h3>Office & House Relocation</h3>
            <p>Stress-free local and international moving.</p>
        </div>

        <div class="service-card">
            <div class="icon-box">
                <i class="fas fa-globe"></i>
            </div>
            <h3>International Removals</h3>
            <p>Move abroad confidently with our experts.</p>
        </div>

        <div class="service-card">
            <div class="icon-box">
                <i class="fas fa-paw"></i>
            </div>
            <h3>Pet Relocation</h3>
            <p>Safe transportation solutions for pets.</p>
        </div>

        <div class="service-card">
            <div class="icon-box">
                <i class="fas fa-gift"></i>
            </div>
            <h3>Gift Handling</h3>
            <p>Worldwide gift forwarding and delivery.</p>
        </div>

    </div>

    <div class="services-btn">
        <a href="/services">View All Services →</a>
    </div>

</section>

@endsection