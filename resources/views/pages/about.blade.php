@extends('layout.app')

@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/about.css') }}">

<section class="about-section">
    <div class="about-header">
        <h1>About EGCFL</h1>
        <p>Reliable, customer-focused logistics solutions since 2020.</p>
    </div>

    <div class="about-container">
        <div class="story-block">
            <div class="story-image">
                <img src="path-to-your-team-image1.jpg" alt="EGCFL Logistics Team">
            </div>
            <div class="story-content">
                <span class="sub-badge">OUR STORY</span>
                <h2>Leading logistics companies present in Kenya </h2>
                <p>Excellent Global Cargo Freighters Ltd specializes in creating and forwarding logistics solutions. We were founded in 2020 along Eastern Bypass Road in Embakasi, Nairobi. We provide customer-specific solutions via the company's value-creating services.</p>
                <p>EGCFL has a comprehensive service network and platform that allow customers to make right moves for their business.
                <p>The company's dedicated and experienced professionals always offer tailor-made logistic solutions, customized to the particular needs of out customers.</p>
            </div>
        </div>

        <div class="mv-grid">
            <div class="mv-card">
                <div class="mv-icon">
                    <i class="fas fa-bullseye"></i>
                </div>
                <h3>Our Mission</h3>
                <p>We focus on designing, building and delivering complex, best in class and cost effective logistics solutions, and establish long-term relationships with our clients based on trust and mutual benefit.</p>
            </div>
            <div class="mv-card">
                <div class="mv-icon">
                    <i class="fas fa-eye"></i>
                </div>
                <h3>Our Vision</h3>
                <p>We are always focussed to perform our every required task with commitment to integrity, honestly, tranparency, creativity, and with respect for everyone.</p>
            </div>
        </div>

        <div class="values-section">
            <span class="sub-badge center">CORE VALUES</span>
            <h2 class="section-title">What drives us forward</h2>
            
            <div class="values-grid">
                <div class="value-card">
                    <div class="value-icon"><i class="fas fa-shield-alt"></i></div>
                    <h4>Integrity</h4>
                    <p>Honest, transparent dealings with every client and partner.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon"><i class="fas fa-award"></i></div>
                    <h4>Excellence</h4>
                    <p>We pursue the highest standard in every shipment we handle.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon"><i class="fas fa-heart"></i></div>
                    <h4>Customer Focus</h4>
                    <p>Your goals are our priority — always.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon"><i class="fas fa-users"></i></div>
                    <h4>Teamwork</h4>
                    <p>We achieve more by working together, internally and with partners.</p>
                </div>
            </div>
        </div>

        <div class="team-intro-section">
            <span class="sub-badge center">OUR TEAM</span>
            <h2 class="section-title">Professionals who deliver</h2>
            <p class="team-subtitle">From licensed customs clearing agents to seasoned freight specialists and friendly customer success managers, every member of the EGCFL team is committed to moving your cargo with skill and care.</p>
            
            <div class="team-banner-image">
                <img src="path-to-your-team-image2.jpg" alt="EGCFL Team Banner">
            </div>
        </div>
    </div>
</section>
@endsection