@extends('layouts.app')

@section('title', 'Layanan Xornea - Complete Academic Publishing Solutions')

@section('content')
<!-- Hero Section -->
<section class="hero-section position-relative overflow-hidden">
    <div class="container">
        <div class="row align-items-center min-vh-60">
            <div class="col-12 col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                <h1 class="display-4 display-md-3 fw-bold mb-4 text-center text-lg-start">Layanan Lengkap Publikasi Akademik</h1>
                <p class="lead text-center text-lg-start mb-4">Dari penulisan hingga publikasi, kami menyediakan solusi end-to-end untuk setiap kebutuhan penelitian Anda.</p>
                
                <!-- Quick Service Selector -->
                <div class="d-flex flex-column flex-sm-row gap-2 justify-content-center justify-content-lg-start mb-4">
                    <button class="btn btn-primary" onclick="scrollToSection('services-overview')">
                        <i class="fas fa-list me-2"></i>Lihat Semua Layanan
                    </button>
                    <button class="btn btn-outline-primary" onclick="scrollToSection('pricing')">
                        <i class="fas fa-tags me-2"></i>Cek Harga
                    </button>
                </div>
            </div>
            <div class="col-12 col-lg-6" data-aos="fade-left">
                <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=600&h=400&fit=crop" 
                         alt="Our Services" class="img-fluid rounded-4 shadow-lg w-100">
                    <!-- Service stats overlay -->
                    <div class="position-absolute bottom-0 start-0 bg-white rounded p-3 shadow m-3 animate-bounce-slow">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-award text-warning fs-4 me-2"></i>
                            <div>
                                <div class="fw-bold">8 Layanan</div>
                                <small class="text-muted">Complete Solutions</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Background elements -->
    <div class="position-absolute top-0 start-0 w-100 h-100 overflow-hidden" style="z-index: -1;">
        <div class="floating-shape bg-primary opacity-5 rounded-circle position-absolute animate-float-slow" 
             style="width: 120px; height: 120px; top: 25%; right: 15%;"></div>
        <div class="floating-shape bg-info opacity-5 rounded-circle position-absolute animate-float-reverse" 
             style="width: 90px; height: 90px; bottom: 20%; left: 10%;"></div>
    </div>
</section>

<!-- Services Overview -->
<section class="section-padding">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title" data-aos="fade-up">Layanan Unggulan Kami</h2>
            <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">Pilih layanan yang sesuai dengan kebutuhan penelitian Anda</p>
        </div>
        
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 text-center p-4 border-0 shadow">
                    <div class="feature-icon">
                        <i class="fas fa-pen-fancy"></i>
                    </div>
                    <h4 class="fw-bold mb-3">✍️ Penulisan Artikel Akademik</h4>
                    <p class="text-muted mb-4">Artikel original dengan metodologi yang kuat dan sesuai standar jurnal internasional.</p>
                    <ul class="list-unstyled text-start mb-4">
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Research design & methodology</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Literature review comprehensive</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Data analysis & interpretation</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Academic writing standards</li>
                    </ul>
                    <div class="mt-auto">
                        {{-- <div class="h5 text-primary fw-bold">Mulai dari Rp 15 juta</div> --}}
                        <a href="#pricing" class="btn btn-outline-primary">Lihat Detail</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 text-center p-4 border-0 shadow">
                    <div class="feature-icon">
                        <i class="fas fa-edit"></i>
                    </div>
                    <h4 class="fw-bold mb-3">📝 Editing & Proofreading</h4>
                    <p class="text-muted mb-4">Professional editing dengan berbagai style guide (APA, MLA, Harvard, dll.)</p>
                    <ul class="list-unstyled text-start mb-4">
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Grammar & language correction</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Citation style formatting</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Structure & flow improvement</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Native English proofreading</li>
                    </ul>
                    <div class="mt-auto">
                        {{-- <div class="h5 text-primary fw-bold">Mulai dari Rp 2 juta</div> --}}
                        <a href="#pricing" class="btn btn-outline-primary">Lihat Detail</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 text-center p-4 border-0 shadow">
                    <div class="feature-icon">
                        <i class="fas fa-search"></i>
                    </div>
                    <h4 class="fw-bold mb-3">🔎 Parafrase & Anti Plagiarisme</h4>
                    <p class="text-muted mb-4">Guarantee similarity di bawah 15% dengan tools premium dan parafrase expert.</p>
                    <ul class="list-unstyled text-start mb-4">
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Turnitin premium check</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Expert paraphrasing</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Similarity < 15% guarantee</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Multiple revision rounds</li>
                    </ul>
                    <div class="mt-auto">
                        {{-- <div class="h5 text-primary fw-bold">Mulai dari Rp 1.5 juta</div> --}}
                        <a href="#pricing" class="btn btn-outline-primary">Lihat Detail</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="card h-100 text-center p-4 border-0 shadow">
                    <div class="feature-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h4 class="fw-bold mb-3">🎯 Submit & Publikasi</h4>
                    <p class="text-muted mb-4">Full handling dari submit hingga publish di jurnal Sinta 2–6, Scopus, atau WoS.</p>
                    <ul class="list-unstyled text-start mb-4">
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Journal selection strategy</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Submission process handling</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Reviewer response assistance</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Publication guarantee</li>
                    </ul>
                    <div class="mt-auto">
                        {{-- <div class="h5 text-primary fw-bold">Mulai dari Rp 8 juta</div> --}}
                        <a href="#pricing" class="btn btn-outline-primary">Lihat Detail</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
                <div class="card h-100 text-center p-4 border-0 shadow">
                    <div class="feature-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h4 class="fw-bold mb-3">🎓 Bimbingan Skripsi/Tesis/Disertasi</h4>
                    <p class="text-muted mb-4">Mentoring intensif untuk penelitian akademik tingkat sarjana hingga doktoral.</p>
                    <ul class="list-unstyled text-start mb-4">
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Research proposal development</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Methodology consultation</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Weekly progress monitoring</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Defense preparation</li>
                    </ul>
                    <div class="mt-auto">
                        {{-- <div class="h5 text-primary fw-bold">Mulai dari Rp 10 juta</div> --}}
                        <a href="#pricing" class="btn btn-outline-primary">Lihat Detail</a>
                    </div>
                </div>
            </div>
            
            {{-- <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
                <div class="card h-100 text-center p-4 border-0 shadow border-primary">
                    <div class="badge bg-primary position-absolute top-0 start-50 translate-middle">TERPOPULER</div>
                    <div class="feature-icon">
                        <i class="fas fa-crown"></i>
                    </div>
                    <h4 class="fw-bold mb-3">🚀 Paket Premium</h4>
                    <p class="text-muted mb-4">Full handling komprehensif dari writing hingga publish, dengan dedicated project manager.</p>
                    <ul class="list-unstyled text-start mb-4">
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>End-to-end service</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Dedicated project manager</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Priority support 24/7</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Publication guarantee</li>
                    </ul>
                    <div class="mt-auto">
                        <div class="h5 text-primary fw-bold">Mulai dari Rp 25 juta</div>
                        <a href="#pricing" class="btn btn-primary">Pilih Paket</a>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>

<!-- Pricing Table -->
<section id="pricing" class="section-padding bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title" data-aos="fade-up">Paket Harga Berdasarkan Target Jurnal</h2>
            <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">Pilih target jurnal yang sesuai dengan kebutuhan penelitian Anda</p>
        </div>
        
        <!-- Non Sinta & International -->
        <div class="row mb-5">
            <div class="col-lg-6 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="pricing-card card h-100 p-4 text-center">
                    <div class="card-body">
                        <h3 class="fw-bold text-primary">📄 NON SINTA</h3>
                        <p class="text-muted mb-4">Jurnal nasional tidak terakreditasi Sinta</p>
                        
                        <div class="row mb-4">
                            <div class="col-6">
                                <div class="border-end">
                                    <h5 class="fw-bold text-success">Jalur Darat</h5>
                                    <span class="h4 fw-bold">Rp 200.000</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <h5 class="fw-bold text-primary">Jalur Langit</h5>
                                <span class="h4 fw-bold">Rp 400.000</span>
                            </div>
                        </div>
                        
                        <ul class="list-unstyled mb-4 text-start">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Editing & Proofreading</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Basic Anti-Plagiarism</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Citation Formatting</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Submission Support</li>
                        </ul>
                        
                        <a href="{{ url('/contact') }}" class="btn btn-outline-primary w-100">Pilih Non Sinta</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="pricing-card card h-100 p-4 text-center">
                    <div class="card-body">
                        <h3 class="fw-bold text-primary">🌍 INTERNATIONAL</h3>
                        <p class="text-muted mb-4">Jurnal internasional non-indexed</p>
                        
                        <div class="row mb-4">
                            <div class="col-6">
                                <div class="border-end">
                                    <h5 class="fw-bold text-success">Jalur Darat</h5>
                                    <span class="h4 fw-bold">Rp 500.000</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <h5 class="fw-bold text-primary">Jalur Langit</h5>
                                <span class="h4 fw-bold">Rp 1.000.000</span>
                            </div>
                        </div>
                        
                        <ul class="list-unstyled mb-4 text-start">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Professional Editing</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Advanced Anti-Plagiarism</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>International Format</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>English Proofreading</li>
                        </ul>
                        
                        <a href="{{ url('/contact') }}" class="btn btn-outline-primary w-100">Pilih International</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Sinta 6-5 & Sinta 4 -->
        <div class="row mb-5">
            <div class="col-lg-6 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="pricing-card card h-100 p-4 text-center">
                    <div class="card-body">
                        <h3 class="fw-bold text-primary">📊 SINTA 6 - 5</h3>
                        <p class="text-muted mb-4">Jurnal terakreditasi Sinta 6 dan Sinta 5</p>
                        
                        <div class="row mb-4">
                            <div class="col-6">
                                <div class="border-end">
                                    <h5 class="fw-bold text-success">Jalur Darat</h5>
                                    <span class="h4 fw-bold">Rp 500.000</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <h5 class="fw-bold text-primary">Jalur Langit</h5>
                                <span class="h4 fw-bold">Rp 1.000.000</span>
                            </div>
                        </div>
                        
                        <ul class="list-unstyled mb-4 text-start">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Quality Research Writing</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Sinta Standard Editing</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Premium Anti-Plagiarism</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Journal Selection</li>
                        </ul>
                        
                        <a href="{{ url('/contact') }}" class="btn btn-outline-primary w-100">Pilih Sinta 6-5</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="pricing-card card h-100 p-4 text-center">
                    <div class="card-body">
                        <h3 class="fw-bold text-primary">📈 SINTA 4</h3>
                        <p class="text-muted mb-4">Jurnal terakreditasi Sinta 4</p>
                        
                        <div class="row mb-4">
                            <div class="col-6">
                                <div class="border-end">
                                    <h5 class="fw-bold text-success">Jalur Darat</h5>
                                    <span class="h4 fw-bold">Rp 1.500.000</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <h5 class="fw-bold text-primary">Jalur Langit</h5>
                                <span class="h4 fw-bold">Rp 2.000.000</span>
                            </div>
                        </div>
                        
                        <ul class="list-unstyled mb-4 text-start">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>High-Quality Research</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Expert Editing & Review</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Advanced Methodology</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Submission Handling</li>
                        </ul>
                        
                        <a href="{{ url('/contact') }}" class="btn btn-outline-primary w-100">Pilih Sinta 4</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Sinta 3 & Sinta 2 -->
        <div class="row mb-5">
            <div class="col-lg-6 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="pricing-card card h-100 p-4 text-center">
                    <div class="card-body">
                        <h3 class="fw-bold text-primary">📋 SINTA 3</h3>
                        <p class="text-muted mb-4">Jurnal terakreditasi Sinta 3</p>
                        
                        <div class="row mb-4">
                            <div class="col-6">
                                <div class="border-end">
                                    <h5 class="fw-bold text-success">Jalur Darat</h5>
                                    <span class="h4 fw-bold">Rp 2.000.000</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <h5 class="fw-bold text-primary">Jalur Langit</h5>
                                <span class="h4 fw-bold">Rp 3.000.000</span>
                            </div>
                        </div>
                        
                        <ul class="list-unstyled mb-4 text-start">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Premium Research Writing</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Expert Peer Review</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Statistical Analysis</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Revision Support</li>
                        </ul>
                        
                        <a href="{{ url('/contact') }}" class="btn btn-outline-primary w-100">Pilih Sinta 3</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="pricing-card card h-100 p-4 text-center">
                    <div class="card-body">
                        <h3 class="fw-bold text-primary">🎯 SINTA 2</h3>
                        <p class="text-muted mb-4">Jurnal terakreditasi Sinta 2</p>
                        
                        <div class="row mb-4">
                            <div class="col-6">
                                <div class="border-end">
                                    <h5 class="fw-bold text-success">Jalur Darat</h5>
                                    <span class="h4 fw-bold">Rp 9.000.000</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <h5 class="fw-bold text-primary">Jalur Langit</h5>
                                <span class="h4 fw-bold">Rp 11.000.000</span>
                            </div>
                        </div>
                        
                        <ul class="list-unstyled mb-4 text-start">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Elite Research Quality</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Senior Expert Review</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Advanced Data Analysis</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Multiple Revisions</li>
                        </ul>
                        
                        <a href="{{ url('/contact') }}" class="btn btn-outline-primary w-100">Pilih Sinta 2</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Sinta 1 & Scopus -->
        <div class="row mb-5">
            <div class="col-lg-6 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="pricing-card featured card h-100 p-4 text-center">
                    <div class="card-body">
                        <h3 class="fw-bold text-primary">🏆 SINTA 1</h3>
                        <p class="text-muted mb-4">Jurnal terakreditasi Sinta 1 (Tertinggi)</p>
                        
                        <div class="row mb-4">
                            <div class="col-6">
                                <div class="border-end">
                                    <h5 class="fw-bold text-success">Jalur Darat</h5>
                                    <span class="h4 fw-bold">Rp 17.000.000</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <h5 class="fw-bold text-primary">Jalur Langit</h5>
                                <span class="h4 fw-bold">Rp 20.000.000</span>
                            </div>
                        </div>
                        
                        <ul class="list-unstyled mb-4 text-start">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>World-Class Research</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Professor-Level Review</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Publication Guarantee</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Priority Support</li>
                        </ul>
                        
                        <a href="{{ url('/contact') }}" class="btn btn-primary w-100">Pilih Sinta 1</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="pricing-card featured card h-100 p-4 text-center">
                    <div class="card-body">
                        <h3 class="fw-bold text-primary">🌟 SCOPUS</h3>
                        <p class="text-muted mb-4">Jurnal terindeks Scopus Q5</p>
                        
                        <div class="row mb-4">
                            <div class="col-6">
                                <div class="border-end">
                                    <h5 class="fw-bold text-success">Q5 - Darat</h5>
                                    <span class="h4 fw-bold">Rp 25.000.000</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <h5 class="fw-bold text-primary">Q5 - Langit</h5>
                                <span class="h4 fw-bold">Rp 33.000.000</span>
                            </div>
                        </div>
                        
                        <ul class="list-unstyled mb-4 text-start">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>International Standard</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Global Impact Research</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Scopus Indexing</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Citation Guarantee</li>
                        </ul>
                        
                        <a href="{{ url('/contact') }}" class="btn btn-primary w-100">Pilih Scopus</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5">
            <p class="text-muted mb-3">💡 <strong>Jalur Darat</strong>: Proses reguler dengan timeline standar</p>
            <p class="text-muted mb-3">⚡ <strong>Jalur Langit</strong>: Proses dipercepat dengan prioritas tinggi</p>
            <p class="text-muted mb-4">🎯 <strong>Khusus daerah Surabaya, Gresik, Madura:</strong> <span class="text-danger fw-bold">FREE KONSULTASI!</span></p>
            <a href="{{ url('/contact') }}" class="btn btn-primary btn-lg">
                <i class="fas fa-calculator me-2"></i>Konsultasi & Dapatkan Quote Akurat
            </a>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="section-padding">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title" data-aos="fade-up">Bagaimana Proses Kerjanya?</h2>
            <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">Langkah-langkah sederhana menuju publikasi impian Anda</p>
        </div>
        
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="text-center">
                    <div class="feature-icon">
                        <span class="fw-bold fs-2">1</span>
                    </div>
                    <h5 class="fw-bold">Konsultasi Gratis</h5>
                    <p class="text-muted">Diskusi kebutuhan, scope penelitian, dan target jurnal. Tim kami akan memberikan rekomendasi terbaik.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="text-center">
                    <div class="feature-icon">
                        <span class="fw-bold fs-2">2</span>
                    </div>
                    <h5 class="fw-bold">Proposal & Agreement</h5>
                    <p class="text-muted">Kami menyusun proposal kerja detail dengan timeline, deliverable, dan terms yang jelas.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="text-center">
                    <div class="feature-icon">
                        <span class="fw-bold fs-2">3</span>
                    </div>
                    <h5 class="fw-bold">Execution</h5>
                    <p class="text-muted">Tim expert mulai bekerja dengan update progress berkala dan milestone yang terukur.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="text-center">
                    <div class="feature-icon">
                        <span class="fw-bold fs-2">4</span>
                    </div>
                    <h5 class="fw-bold">Delivery & Support</h5>
                    <p class="text-muted">Final delivery dengan quality assurance dan after-sales support hingga published.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Guarantee Section -->
<section class="section-padding bg-primary text-white">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold" data-aos="fade-up">Jaminan Kualitas Kami</h2>
            <p class="lead" data-aos="fade-up" data-aos-delay="100">Komitmen kami untuk kepuasan dan kesuksesan klien</p>
        </div>
        
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="text-center">
                    <i class="fas fa-shield-alt" style="font-size: 3rem; margin-bottom: 1rem;"></i>
                    <h5 class="fw-bold">100% Original</h5>
                    <p>Semua artikel dijamin original dan bebas plagiarisme</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="200">
                <div class="text-center">
                    <i class="fas fa-clock" style="font-size: 3rem; margin-bottom: 1rem;"></i>
                    <h5 class="fw-bold">On-Time Delivery</h5>
                    <p>Garansi selesai sesuai timeline yang disepakati</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="300">
                <div class="text-center">
                    <i class="fas fa-redo" style="font-size: 3rem; margin-bottom: 1rem;"></i>
                    <h5 class="fw-bold">Free Revision</h5>
                    <p>Unlimited revision hingga Anda benar-benar puas</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="400">
                <div class="text-center">
                    <i class="fas fa-lock" style="font-size: 3rem; margin-bottom: 1rem;"></i>
                    <h5 class="fw-bold">Confidential</h5>
                    <p>Kerahasiaan data dan intellectual property terjamin</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="section-padding">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title" data-aos="fade-up">Frequently Asked Questions</h2>
            <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">Jawaban untuk pertanyaan yang sering diajukan</p>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion" id="faqAccordion" data-aos="fade-up">
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                Berapa lama proses publikasi artikel?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Waktu publikasi bervariasi tergantung paket yang dipilih dan target jurnal. Untuk paket Basic (editing): 7-14 hari. Paket Pro (writing): 30-45 hari. Paket Premium (full handling): 60-90 hari. Namun, proses review jurnal dapat memakan waktu tambahan 2-6 bulan.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                Apakah ada garansi publish di jurnal Scopus Q1?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Kami memberikan garansi publikasi di jurnal yang sesuai dengan kualitas dan scope penelitian. Untuk Q1 Scopus, kami akan melakukan assessment mendalam terlebih dahulu. Jika memungkinkan, kami berkomitmen membantu hingga published. Jika tidak, kami akan merekomendasikan jurnal alternatif yang tetap bereputasi.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                Bagaimana cara pembayaran dan apakah ada cicilan?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Kami menerima pembayaran via transfer bank, e-wallet, dan kartu kredit. Untuk paket Premium, tersedia opsi cicilan 2-3 kali dengan skema: 50% di awal, 30% saat draft pertama, 20% saat final delivery. Terms pembayaran dapat disesuaikan dengan kondisi klien.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                Tim Xornea terdiri dari siapa saja?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Tim kami terdiri dari para PhD holder, dosen senior, dan peneliti berpengalaman dari berbagai disiplin ilmu. Mereka memiliki track record publikasi di jurnal internasional dan pengalaman sebagai reviewer. Setiap project ditangani oleh expert sesuai bidang penelitian klien.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                Bagaimana jaminan kerahasiaan data penelitian?
                            </button>
                        </h2>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Kami sangat serius dengan confidentiality. Semua data klien dilindungi dengan NDA (Non-Disclosure Agreement), sistem keamanan berlapis, dan akses terbatas hanya untuk tim yang menangani project tersebut. Data tidak akan dibagikan ke pihak ketiga dalam kondisi apapun.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section-padding bg-light">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-lg-8" data-aos="zoom-in">
                <h2 class="section-title">Siap Memulai Perjalanan Publikasi Anda?</h2>
                <p class="lead mb-5">Konsultasikan kebutuhan penelitian Anda dengan tim expert kami. Dapatkan quote akurat dan timeline yang jelas!</p>
                <div class="d-flex flex-column flex-md-row gap-3 justify-content-center">
                    <a href="{{ url('/contact') }}" class="btn btn-primary btn-lg">
                        <i class="fas fa-phone me-2"></i>Konsultasi Gratis Sekarang
                    </a>
                    <a href="https://wa.me/6281234567890" class="btn btn-outline-primary btn-lg" target="_blank">
                        <i class="fab fa-whatsapp me-2"></i>WhatsApp Langsung
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
