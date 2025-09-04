@extends('layouts.app')

@section('title', 'Blog & Knowledge Center - Xornea Insights')

@section('content')
<!-- Hero Section -->
<section class="hero-section position-relative overflow-hidden">
    <div class="container">
        <div class="row align-items-center min-vh-50">
            <div class="col-12 col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                <h1 class="display-4 display-md-3 fw-bold mb-4 text-center text-lg-start">Knowledge Center</h1>
                <p class="lead mb-4 text-center text-lg-start">Insights, tips, dan panduan lengkap untuk membantu perjalanan publikasi akademik Anda.</p>
                <!-- Quick Access Buttons -->
                <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center justify-content-lg-start">
                    <button class="btn btn-primary btn-lg" onclick="scrollToSection('faq-section')">
                        <i class="fas fa-question-circle me-2"></i>FAQ Interaktif
                    </button>
                    <button class="btn btn-outline-primary btn-lg" onclick="scrollToSection('ethics-section')">
                        <i class="fas fa-shield-alt me-2"></i>Kode Etik
                    </button>
                </div>
            </div>
            <div class="col-12 col-lg-6" data-aos="fade-left">
                <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1481627834876-b7833e8f5570?w=600&h=400&fit=crop" 
                         alt="Knowledge Center" class="img-fluid rounded-4 shadow-lg w-100">
                    <!-- Floating elements for interactivity -->
                    <div class="position-absolute top-0 end-0 p-3">
                        <div class="bg-white rounded-circle p-3 shadow animate-float">
                            <i class="fas fa-graduation-cap text-primary fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Floating Background Elements -->
    <div class="position-absolute top-0 start-0 w-100 h-100 overflow-hidden" style="z-index: -1;">
        <div class="floating-shape bg-primary opacity-10 rounded-circle position-absolute animate-float-slow" 
             style="width: 100px; height: 100px; top: 10%; left: 10%;"></div>
        <div class="floating-shape bg-secondary opacity-10 rounded-circle position-absolute animate-float-reverse" 
             style="width: 60px; height: 60px; top: 60%; right: 20%;"></div>
        <div class="floating-shape bg-success opacity-10 rounded-circle position-absolute animate-float" 
             style="width: 80px; height: 80px; bottom: 20%; left: 70%;"></div>
    </div>
</section>

<!-- Blog Insights -->
{{-- <section class="section-padding">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title" data-aos="fade-up">Blog Insights</h2>
            <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">Artikel terbaru dan panduan praktis untuk kesuksesan akademik</p>
        </div>
        
        <div class="row">
            <!-- Featured Article -->
            <div class="col-lg-8 mb-4" data-aos="fade-right">
                <div class="card border-0 shadow-lg">
                    <img src="https://images.unsplash.com/photo-1456513080510-7bf3a84b82f8?w=800&h=400&fit=crop" 
                         alt="Featured Article" class="card-img-top">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <span class="badge bg-primary me-2">FEATURED</span>
                            <small class="text-muted">2 hari yang lalu</small>
                        </div>
                        <h3 class="fw-bold mb-3">Panduan Lengkap Submit Jurnal Scopus Q1: 10 Langkah Menuju Sukses</h3>
                        <p class="text-muted mb-4">Pelajari strategi proven untuk meningkatkan peluang acceptance di jurnal top-tier. Dari pemilihan jurnal yang tepat hingga handling reviewer comments...</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=40&h=40&fit=crop&crop=face" 
                                     alt="Author" class="rounded-circle me-2" width="40" height="40">
                                <div>
                                    <small class="fw-semibold">Dr. Ahmad Kurniawan</small>
                                    <small class="text-muted d-block">Lead Editor</small>
                                </div>
                            </div>
                            <a href="#" class="btn btn-outline-primary">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Blog Categories -->
            <div class="col-lg-4 mb-4" data-aos="fade-left">
                <div class="card border-0 shadow h-100">
                    <div class="card-body p-4">
                        <h5 class="fw-bold mb-4">Kategori Populer</h5>
                        <div class="d-grid gap-2">
                            <a href="#" class="btn btn-outline-primary text-start d-flex justify-content-between align-items-center">
                                <span>📄 Panduan Submit Jurnal</span>
                                <span class="badge bg-primary">15</span>
                            </a>
                            <a href="#" class="btn btn-outline-primary text-start d-flex justify-content-between align-items-center">
                                <span>🔍 Tips Anti Plagiarisme</span>
                                <span class="badge bg-primary">12</span>
                            </a>
                            <a href="#" class="btn btn-outline-primary text-start d-flex justify-content-between align-items-center">
                                <span>🌍 Tren Riset Global</span>
                                <span class="badge bg-primary">8</span>
                            </a>
                            <a href="#" class="btn btn-outline-primary text-start d-flex justify-content-between align-items-center">
                                <span>✍️ Academic Writing</span>
                                <span class="badge bg-primary">20</span>
                            </a>
                            <a href="#" class="btn btn-outline-primary text-start d-flex justify-content-between align-items-center">
                                <span>📊 Research Methodology</span>
                                <span class="badge bg-primary">10</span>
                            </a>
                        </div>
                        
                        <hr class="my-4">
                        
                        <h6 class="fw-bold mb-3">Newsletter</h6>
                        <p class="small text-muted mb-3">Dapatkan artikel terbaru langsung di email Anda</p>
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Email Anda">
                            <button class="btn btn-primary" type="button">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Recent Articles Grid -->
        <div class="row mt-5">
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card border-0 shadow h-100">
                    <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?w=400&h=250&fit=crop" 
                         alt="Article" class="card-img-top">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2">
                            <span class="badge bg-success me-2">NEW</span>
                            <small class="text-muted">5 hari yang lalu</small>
                        </div>
                        <h6 class="fw-bold mb-2">5 Kesalahan Fatal dalam Academic Writing yang Harus Dihindari</h6>
                        <p class="text-muted small mb-3">Pelajari kesalahan umum yang sering membuat artikel ditolak reviewer dan cara menghindarinya...</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <small class="text-muted">Dr. Maya Sari</small>
                            <a href="#" class="btn btn-sm btn-outline-primary">Baca</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card border-0 shadow h-100">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=400&h=250&fit=crop" 
                         alt="Article" class="card-img-top">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2">
                            <span class="badge bg-warning text-dark me-2">TRENDING</span>
                            <small class="text-muted">1 minggu yang lalu</small>
                        </div>
                        <h6 class="fw-bold mb-2">Strategi Memilih Jurnal yang Tepat: Scopus vs WoS vs Sinta</h6>
                        <p class="text-muted small mb-3">Panduan komprehensif untuk memilih target jurnal yang sesuai dengan research Anda...</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <small class="text-muted">Dr. Rudi Pratama</small>
                            <a href="#" class="btn btn-sm btn-outline-primary">Baca</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card border-0 shadow h-100">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=400&h=250&fit=crop" 
                         alt="Article" class="card-img-top">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2">
                            <span class="badge bg-info me-2">GUIDE</span>
                            <small class="text-muted">2 minggu yang lalu</small>
                        </div>
                        <h6 class="fw-bold mb-2">Tren Riset AI & Machine Learning 2024: Peluang Publikasi</h6>
                        <p class="text-muted small mb-3">Eksplorasi area penelitian AI yang sedang hot dan memiliki peluang publikasi tinggi...</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <small class="text-muted">Dr. Lisa Anggraini</small>
                            <a href="#" class="btn btn-sm btn-outline-primary">Baca</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<!-- FAQ Interactive -->
<section id="faq-section" class="section-padding bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title" data-aos="fade-up">FAQ Interaktif</h2>
            <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">Jawaban untuk pertanyaan yang paling sering ditanyakan</p>
        </div>
        
        <!-- FAQ Search & Stats -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8" data-aos="fade-up">
                <div class="card border-0 shadow-lg p-4">
                    <div class="input-group input-group-lg mb-3">
                        <span class="input-group-text bg-primary text-white">
                            <i class="fas fa-search"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="Cari pertanyaan..." id="faqSearch">
                        <button class="btn btn-outline-secondary" type="button" id="clearSearch">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                    
                    <!-- Search Stats -->
                    <div class="d-flex justify-content-between align-items-center small text-muted">
                        <span id="searchResults">Menampilkan semua FAQ</span>
                        <span class="d-flex align-items-center">
                            <i class="fas fa-lightbulb me-1"></i>
                            <span id="faqCount">8</span> FAQ tersedia
                        </span>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- FAQ Categories with animations -->
        <div class="row mb-5">
            <div class="col-12" data-aos="fade-up">
                <div class="d-flex flex-wrap justify-content-center gap-2 mb-4">
                    <button class="btn btn-primary active category-btn" data-category="all">
                        <i class="fas fa-list me-2"></i>Semua <span class="badge bg-light text-primary ms-1">8</span>
                    </button>
                    <button class="btn btn-outline-primary category-btn" data-category="general">
                        <i class="fas fa-info-circle me-2"></i>Umum <span class="badge bg-primary ms-1">2</span>
                    </button>
                    <button class="btn btn-outline-primary category-btn" data-category="pricing">
                        <i class="fas fa-dollar-sign me-2"></i>Harga <span class="badge bg-primary ms-1">1</span>
                    </button>
                    <button class="btn btn-outline-primary category-btn" data-category="process">
                        <i class="fas fa-cogs me-2"></i>Proses <span class="badge bg-primary ms-1">2</span>
                    </button>
                    <button class="btn btn-outline-primary category-btn" data-category="quality">
                        <i class="fas fa-award me-2"></i>Kualitas <span class="badge bg-primary ms-1">2</span>
                    </button>
                    <button class="btn btn-outline-primary category-btn" data-category="timeline">
                        <i class="fas fa-clock me-2"></i>Timeline <span class="badge bg-primary ms-1">1</span>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- FAQ Items with Enhanced Interactivity -->
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="accordion" id="faqAccordion" data-aos="fade-up">
                    <!-- General FAQs -->
                    <div class="accordion-item border-0 shadow-sm mb-3 faq-item" data-category="general">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed d-flex align-items-center" type="button" 
                                    data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="false">
                                <div class="me-3 flex-shrink-0">
                                    <div class="bg-primary bg-opacity-10 rounded-circle p-2">
                                        <i class="fas fa-question-circle text-primary"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="fw-semibold">Apa itu Xornea dan bagaimana cara kerjanya?</span>
                                    <div class="small text-muted mt-1 d-none d-md-block">
                                        Platform layanan publikasi akademik terpercaya
                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <p class="mb-3">Xornea adalah platform layanan publikasi akademik yang membantu peneliti Indonesia untuk mempublikasikan karyanya di jurnal bereputasi internasional.</p>
                                        <p class="mb-0">Kami menyediakan layanan end-to-end dari penulisan, editing, anti-plagiarisme, hingga submission dan follow-up dengan jurnal target.</p>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="bg-light rounded p-3">
                                            <h6 class="fw-bold mb-2">Layanan Utama:</h6>
                                            <ul class="list-unstyled small mb-0">
                                                <li><i class="fas fa-check text-success me-2"></i>Academic Writing</li>
                                                <li><i class="fas fa-check text-success me-2"></i>Journal Selection</li>
                                                <li><i class="fas fa-check text-success me-2"></i>Submission Support</li>
                                                <li><i class="fas fa-check text-success me-2"></i>Follow-up Process</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3 d-flex flex-wrap gap-2">
                                    <button class="btn btn-sm btn-outline-primary" onclick="scrollToSection('services')">
                                        <i class="fas fa-external-link-alt me-1"></i>Lihat Layanan
                                    </button>
                                    <button class="btn btn-sm btn-outline-success" onclick="openWhatsApp('Halo, saya ingin tahu lebih lanjut tentang Xornea')">
                                        <i class="fab fa-whatsapp me-1"></i>Tanya Langsung
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Pricing FAQs -->
                    <div class="accordion-item border-0 shadow-sm mb-3 faq-item" data-category="pricing">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed d-flex align-items-center" type="button" 
                                    data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false">
                                <div class="me-3 flex-shrink-0">
                                    <div class="bg-success bg-opacity-10 rounded-circle p-2">
                                        <i class="fas fa-dollar-sign text-success"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="fw-semibold">Berapa biaya layanan Xornea dan apakah ada paket cicilan?</span>
                                    <div class="small text-muted mt-1 d-none d-md-block">
                                        Paket pricing dan opsi pembayaran fleksibel
                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-12">
                                        <p class="mb-3">Biaya bervariasi tergantung jenis layanan yang dipilih:</p>
                                    </div>
                                </div>
                                <div class="row g-3 mb-4">
                                    <div class="col-md-4">
                                        <div class="card bg-light border-0 h-100">
                                            <div class="card-body text-center p-3">
                                                <h6 class="fw-bold text-primary">Basic</h6>
                                                <div class="h5 fw-bold">Rp 2-8 juta</div>
                                                <small>Editing & Review</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card bg-primary text-white border-0 h-100">
                                            <div class="card-body text-center p-3">
                                                <h6 class="fw-bold">Pro</h6>
                                                <div class="h5 fw-bold">Rp 15-20 juta</div>
                                                <small>Full Writing Service</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card bg-warning text-dark border-0 h-100">
                                            <div class="card-body text-center p-3">
                                                <h6 class="fw-bold">Premium</h6>
                                                <div class="h5 fw-bold">Rp 25-35 juta</div>
                                                <small>Complete Solution</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="alert alert-info">
                                    <i class="fas fa-credit-card me-2"></i>
                                    <strong>Opsi Cicilan:</strong> Tersedia cicilan 2-3x untuk paket Premium dengan bunga 0%
                                </div>
                                <div class="d-flex flex-wrap gap-2">
                                    <button class="btn btn-sm btn-primary" onclick="scrollToSection('services')">
                                        <i class="fas fa-eye me-1"></i>Lihat Detail Paket
                                    </button>
                                    <button class="btn btn-sm btn-outline-success" onclick="openWhatsApp('Halo, saya ingin konsultasi tentang pricing dan paket layanan')">
                                        <i class="fab fa-whatsapp me-1"></i>Konsultasi Gratis
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Timeline FAQs -->
                    <div class="accordion-item border-0 shadow-sm mb-3 faq-item" data-category="timeline">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed d-flex align-items-center" type="button" 
                                    data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false">
                                <div class="me-3 flex-shrink-0">
                                    <div class="bg-warning bg-opacity-10 rounded-circle p-2">
                                        <i class="fas fa-clock text-warning"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="fw-semibold">Berapa lama proses publikasi artikel dari awal hingga published?</span>
                                    <div class="small text-muted mt-1 d-none d-md-block">
                                        Timeline dan estimasi waktu publikasi
                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p class="mb-3">Timeline bervariasi tergantung paket yang dipilih dan target jurnal:</p>
                                <div class="row g-3 mb-3">
                                    <div class="col-md-6">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-primary rounded-circle p-2 me-3 flex-shrink-0">
                                                <i class="fas fa-edit text-white small"></i>
                                            </div>
                                            <div>
                                                <h6 class="mb-1 fw-bold">Editing</h6>
                                                <span class="text-muted">7-14 hari</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-info rounded-circle p-2 me-3 flex-shrink-0">
                                                <i class="fas fa-pen text-white small"></i>
                                            </div>
                                            <div>
                                                <h6 class="mb-1 fw-bold">Writing</h6>
                                                <span class="text-muted">30-45 hari</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-success rounded-circle p-2 me-3 flex-shrink-0">
                                                <i class="fas fa-check text-white small"></i>
                                            </div>
                                            <div>
                                                <h6 class="mb-1 fw-bold">Full Service</h6>
                                                <span class="text-muted">60-90 hari</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-warning rounded-circle p-2 me-3 flex-shrink-0">
                                                <i class="fas fa-hourglass-half text-white small"></i>
                                            </div>
                                            <div>
                                                <h6 class="mb-1 fw-bold">Journal Review</h6>
                                                <span class="text-muted">2-6 bulan</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="alert alert-warning">
                                    <i class="fas fa-exclamation-triangle me-2"></i>
                                    <strong>Catatan:</strong> Waktu review di jurnal tidak dapat dikontrol dan bergantung pada kebijakan masing-masing jurnal.
                                </div>
                                <div class="d-flex flex-wrap gap-2">
                                    <button class="btn btn-sm btn-outline-primary" onclick="openWhatsApp('Halo, saya ingin tahu estimasi timeline untuk project saya')">
                                        <i class="fab fa-whatsapp me-1"></i>Konsultasi Timeline
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Quality FAQs -->
                    <div class="accordion-item border-0 shadow-sm mb-3 faq-item" data-category="quality">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                <i class="fas fa-award text-primary me-2"></i>
                                Apakah ada garansi artikel akan diterima di jurnal Scopus Q1?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Kami memberikan garansi publikasi sesuai dengan kualitas dan scope penelitian. Untuk Q1 Scopus, kami melakukan assessment mendalam terlebih dahulu. Jika feasible, kami berkomitmen membantu hingga published. Jika tidak, kami akan merekomendasikan jurnal alternatif yang tetap bereputasi.
                            </div>
                        </div>
                    </div>
                    
                    <!-- Process FAQs -->
                    <div class="accordion-item border-0 shadow-sm mb-3 faq-item" data-category="process">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                <i class="fas fa-cogs text-primary me-2"></i>
                                Bagaimana proses kerja dan komunikasi selama project berlangsung?
                            </button>
                        </h2>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Setiap klien mendapat dedicated project manager dengan update progress mingguan. Kami menggunakan project management tools untuk transparency. Komunikasi via WhatsApp, email, atau video call sesuai preferensi klien. Ada milestone yang jelas di setiap tahap.
                            </div>
                        </div>
                    </div>
                    
                    <!-- More FAQs -->
                    <div class="accordion-item border-0 shadow-sm mb-3 faq-item" data-category="quality">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                                <i class="fas fa-shield-alt text-primary me-2"></i>
                                Bagaimana jaminan kerahasiaan dan keamanan data penelitian saya?
                            </button>
                        </h2>
                        <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Kami sangat serius dengan confidentiality. Semua data dilindungi dengan NDA, sistem keamanan berlapis, dan akses terbatas. Data tidak akan dibagikan ke pihak ketiga dalam kondisi apapun. Tim kami juga berkomitmen pada etika penelitian dan academic integrity.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 shadow-sm mb-3 faq-item" data-category="general">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq7">
                                <i class="fas fa-users text-primary me-2"></i>
                                Siapa saja yang ada di tim Xornea dan kualifikasi mereka?
                            </button>
                        </h2>
                        <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Tim kami terdiri dari PhD holders, dosen senior, dan peneliti berpengalaman dari berbagai disiplin ilmu. Mereka memiliki track record publikasi di jurnal internasional dan pengalaman sebagai reviewer. Setiap project ditangani oleh expert sesuai bidang penelitian klien.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 shadow-sm mb-3 faq-item" data-category="process">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq8">
                                <i class="fas fa-edit text-primary me-2"></i>
                                Apakah saya bisa request revision jika tidak puas dengan hasil?
                            </button>
                        </h2>
                        <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Ya, kami menyediakan unlimited revision hingga klien benar-benar puas. Setiap feedback akan kami respond dengan cepat dan professional. Kepuasan klien adalah prioritas utama kami, dan kami berkomitmen untuk deliver hasil terbaik.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Kode Etik Akademik -->
<section id="ethics-section" class="section-padding">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title" data-aos="fade-up">Kode Etik Akademik Xornea</h2>
            <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">Komitmen kami terhadap integritas akademik dan penelitian yang bertanggung jawab</p>
        </div>
        
        <div class="row">
            <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card border-0 shadow-lg h-100 text-center p-4">
                    <div class="feature-icon text-danger">
                        <i class="fas fa-ban"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Anti Plagiarisme</h4>
                    <p class="text-muted mb-4">Kami berkomitmen untuk menghasilkan karya yang 100% original dan bebas plagiarisme. Setiap artikel melalui pengecekan ketat dengan tools premium dan review expert.</p>
                    <ul class="list-unstyled text-start">
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Turnitin premium check</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Similarity < 15% guarantee</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Proper citation & referencing</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Original research content</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card border-0 shadow-lg h-100 text-center p-4">
                    <div class="feature-icon text-primary">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Integritas</h4>
                    <p class="text-muted mb-4">Integritas adalah fondasi dari setiap layanan yang kami berikan. Kami berkomitmen pada kejujuran, transparansi, dan praktik etis dalam setiap aspek kerja.</p>
                    <ul class="list-unstyled text-start">
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Transparent pricing & process</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Honest assessment & feedback</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Ethical research practices</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Clear communication</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card border-0 shadow-lg h-100 text-center p-4">
                    <div class="feature-icon text-success">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Transparansi</h4>
                    <p class="text-muted mb-4">Transparansi dalam setiap langkah kerja adalah kunci kepercayaan klien. Kami menyediakan visibilitas penuh atas progress dan proses yang sedang berjalan.</p>
                    <ul class="list-unstyled text-start">
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Real-time progress tracking</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Open communication channels</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Clear terms & conditions</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Detailed reporting</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Privacy Policy -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title" data-aos="fade-up">Privacy Policy & Data Protection</h2>
            <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">Perlindungan data dan keamanan informasi klien adalah prioritas utama kami</p>
        </div>
        
        <div class="row">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="card border-0 shadow h-100 p-4">
                    <h4 class="fw-bold mb-4"><i class="fas fa-lock text-primary me-2"></i>Keamanan Data</h4>
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <div class="d-flex">
                                <i class="fas fa-shield-alt text-success me-3 mt-1"></i>
                                <div>
                                    <h6 class="fw-bold mb-1">Enkripsi End-to-End</h6>
                                    <p class="text-muted small mb-0">Semua data dan komunikasi dienkripsi dengan standar industri AES-256</p>
                                </div>
                            </div>
                        </li>
                        <li class="mb-3">
                            <div class="d-flex">
                                <i class="fas fa-server text-success me-3 mt-1"></i>
                                <div>
                                    <h6 class="fw-bold mb-1">Secure Cloud Storage</h6>
                                    <p class="text-muted small mb-0">Data disimpan di server yang aman dengan backup otomatis dan disaster recovery</p>
                                </div>
                            </div>
                        </li>
                        <li class="mb-3">
                            <div class="d-flex">
                                <i class="fas fa-user-shield text-success me-3 mt-1"></i>
                                <div>
                                    <h6 class="fw-bold mb-1">Access Control</h6>
                                    <p class="text-muted small mb-0">Akses data dibatasi hanya untuk tim yang menangani project tertentu</p>
                                </div>
                            </div>
                        </li>
                        <li class="mb-3">
                            <div class="d-flex">
                                <i class="fas fa-clock text-success me-3 mt-1"></i>
                                <div>
                                    <h6 class="fw-bold mb-1">Data Retention</h6>
                                    <p class="text-muted small mb-0">Data otomatis dihapus setelah project selesai sesuai agreement</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-6" data-aos="fade-left">
                <div class="card border-0 shadow h-100 p-4">
                    <h4 class="fw-bold mb-4"><i class="fas fa-file-contract text-primary me-2"></i>Legal Protection</h4>
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <div class="d-flex">
                                <i class="fas fa-signature text-success me-3 mt-1"></i>
                                <div>
                                    <h6 class="fw-bold mb-1">Non-Disclosure Agreement (NDA)</h6>
                                    <p class="text-muted small mb-0">Setiap klien dilindungi dengan NDA yang mengikat secara hukum</p>
                                </div>
                            </div>
                        </li>
                        <li class="mb-3">
                            <div class="d-flex">
                                <i class="fas fa-copyright text-success me-3 mt-1"></i>
                                <div>
                                    <h6 class="fw-bold mb-1">Intellectual Property Rights</h6>
                                    <p class="text-muted small mb-0">Hak kekayaan intelektual sepenuhnya milik klien, bukan Xornea</p>
                                </div>
                            </div>
                        </li>
                        <li class="mb-3">
                            <div class="d-flex">
                                <i class="fas fa-gavel text-success me-3 mt-1"></i>
                                <div>
                                    <h6 class="fw-bold mb-1">Legal Compliance</h6>
                                    <p class="text-muted small mb-0">Mematuhi peraturan perlindungan data Indonesia dan internasional</p>
                                </div>
                            </div>
                        </li>
                        <li class="mb-3">
                            <div class="d-flex">
                                <i class="fas fa-trash text-success me-3 mt-1"></i>
                                <div>
                                    <h6 class="fw-bold mb-1">Right to Be Forgotten</h6>
                                    <p class="text-muted small mb-0">Klien dapat meminta penghapusan data kapan saja setelah project selesai</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="alert alert-info">
                        <i class="fas fa-info-circle me-2"></i>
                        <strong>Catatan Penting:</strong> Kami berkomitmen untuk menjaga keamanan dan kerahasiaan data klien dengan standar tertinggi. Jika Anda memiliki pertanyaan spesifik tentang privacy policy, silakan hubungi tim kami untuk penjelasan lebih detail.
                    </div>
                    <a href="{{ url('/contact') }}" class="btn btn-primary btn-lg">
                        <i class="fas fa-comments me-2"></i>Diskusi Privacy & Security
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section-padding bg-primary text-white">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-lg-8" data-aos="zoom-in">
                <h2 class="fw-bold mb-4">Masih Ada Pertanyaan?</h2>
                <p class="lead mb-5">Tim expert kami siap membantu menjawab pertanyaan dan memberikan konsultasi gratis untuk kebutuhan publikasi Anda.</p>
                <div class="d-flex flex-column flex-md-row gap-3 justify-content-center">
                    <a href="{{ url('/contact') }}" class="btn btn-light btn-lg">
                        <i class="fas fa-phone me-2"></i>Konsultasi Gratis
                    </a>
                    <a href="https://wa.me/6281234567890" class="btn btn-outline-light btn-lg" target="_blank">
                        <i class="fab fa-whatsapp me-2"></i>WhatsApp Support
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('styles')
<style>
    /* Custom Animations */
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
    }
    
    @keyframes float-slow {
        0%, 100% { transform: translateY(0px) rotate(0deg); }
        50% { transform: translateY(-30px) rotate(5deg); }
    }
    
    @keyframes float-reverse {
        0%, 100% { transform: translateY(-10px); }
        50% { transform: translateY(10px); }
    }
    
    .animate-float {
        animation: float 3s ease-in-out infinite;
    }
    
    .animate-float-slow {
        animation: float-slow 6s ease-in-out infinite;
    }
    
    .animate-float-reverse {
        animation: float-reverse 4s ease-in-out infinite;
    }
    
    /* Mobile Optimizations */
    .min-vh-50 {
        min-height: 50vh;
    }
    
    /* Interactive Elements */
    .category-btn {
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }
    
    .category-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }
    
    .category-btn::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 0;
        height: 0;
        background: rgba(255,255,255,0.2);
        border-radius: 50%;
        transition: all 0.3s ease;
        transform: translate(-50%, -50%);
    }
    
    .category-btn:active::before {
        width: 300px;
        height: 300px;
    }
    
    /* FAQ Enhancements */
    .faq-item {
        transition: all 0.3s ease;
    }
    
    .faq-item:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.1) !important;
    }
    
    .accordion-button:not(.collapsed) {
        background: linear-gradient(135deg, var(--bs-primary) 0%, var(--bs-info) 100%);
        color: white;
    }
    
    .accordion-button:not(.collapsed)::after {
        filter: brightness(0) invert(1);
    }
    
    /* Mobile Responsive Improvements */
    @media (max-width: 768px) {
        .display-4 {
            font-size: 2rem !important;
        }
        
        .display-md-3 {
            font-size: 2.5rem !important;
        }
        
        .hero-section {
            padding: 2rem 0;
        }
        
        .section-padding {
            padding: 3rem 0;
        }
        
        .floating-shape {
            display: none;
        }
        
        .accordion-button {
            padding: 1rem;
            font-size: 0.9rem;
        }
        
        .accordion-button .flex-shrink-0 {
            display: none;
        }
    }
    
    @media (max-width: 576px) {
        .btn-lg {
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
        }
        
        .category-btn {
            font-size: 0.8rem;
            padding: 0.5rem 1rem;
        }
        
        .category-btn .badge {
            font-size: 0.7rem;
        }
    }
    
    /* Touch-friendly interactions */
    @media (hover: none) and (pointer: coarse) {
        .faq-item:hover {
            transform: none;
        }
        
        .category-btn:hover {
            transform: none;
        }
        
        .card:hover {
            transform: none;
        }
    }
    
    /* Loading and transition states */
    .faq-item.searching {
        opacity: 0.3;
        transform: scale(0.95);
    }
    
    .faq-item.found {
        opacity: 1;
        transform: scale(1);
        background: rgba(var(--bs-success-rgb), 0.1);
    }
    
    /* Custom scrollbar for mobile */
    .accordion-body::-webkit-scrollbar {
        width: 6px;
    }
    
    .accordion-body::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 10px;
    }
    
    .accordion-body::-webkit-scrollbar-thumb {
        background: var(--bs-primary);
        border-radius: 10px;
    }
    
    /* Pulse animation for important buttons */
    .pulse {
        animation: pulse 2s infinite;
    }
    
    @keyframes pulse {
        0% { box-shadow: 0 0 0 0 rgba(var(--bs-primary-rgb), 0.7); }
        70% { box-shadow: 0 0 0 10px rgba(var(--bs-primary-rgb), 0); }
        100% { box-shadow: 0 0 0 0 rgba(var(--bs-primary-rgb), 0); }
    }
</style>
@endsection

@section('scripts')
<script>
    // Enhanced FAQ Search functionality with debounce
    let searchTimeout;
    const searchInput = document.getElementById('faqSearch');
    const clearButton = document.getElementById('clearSearch');
    const searchResults = document.getElementById('searchResults');
    const faqCount = document.getElementById('faqCount');
    
    searchInput.addEventListener('input', function(e) {
        clearTimeout(searchTimeout);
        searchTimeout = setTimeout(() => {
            performSearch(e.target.value.toLowerCase());
        }, 300);
    });
    
    clearButton.addEventListener('click', function() {
        searchInput.value = '';
        performSearch('');
        searchInput.focus();
    });
    
    function performSearch(searchTerm) {
        const faqItems = document.querySelectorAll('.faq-item');
        let visibleCount = 0;
        
        faqItems.forEach(item => {
            const text = item.textContent.toLowerCase();
            const isVisible = searchTerm === '' || text.includes(searchTerm);
            
            // Add smooth transition
            item.classList.add('searching');
            
            setTimeout(() => {
                if (isVisible) {
                    item.style.display = 'block';
                    item.classList.remove('searching');
                    if (searchTerm !== '') {
                        item.classList.add('found');
                        setTimeout(() => item.classList.remove('found'), 1000);
                    }
                    visibleCount++;
                } else {
                    item.style.display = 'none';
                    item.classList.remove('searching');
                }
            }, 100);
        });
        
        // Update search results text
        setTimeout(() => {
            if (searchTerm === '') {
                searchResults.textContent = 'Menampilkan semua FAQ';
            } else {
                searchResults.textContent = `Ditemukan ${visibleCount} FAQ untuk "${searchTerm}"`;
            }
            faqCount.textContent = visibleCount;
        }, 150);
    }
    
    // Enhanced FAQ Category filtering with animations
    document.querySelectorAll('.category-btn').forEach(button => {
        button.addEventListener('click', function() {
            // Update active button with smooth transition
            document.querySelectorAll('.category-btn').forEach(btn => {
                btn.classList.remove('btn-primary', 'active');
                btn.classList.add('btn-outline-primary');
            });
            
            this.classList.remove('btn-outline-primary');
            this.classList.add('btn-primary', 'active');
            
            // Add ripple effect
            this.style.position = 'relative';
            this.style.overflow = 'hidden';
            
            // Filter FAQ items with staggered animation
            const category = this.getAttribute('data-category');
            const faqItems = document.querySelectorAll('.faq-item');
            let visibleCount = 0;
            let delay = 0;
            
            faqItems.forEach((item, index) => {
                const itemCategory = item.getAttribute('data-category');
                const shouldShow = category === 'all' || itemCategory === category;
                
                setTimeout(() => {
                    if (shouldShow) {
                        item.style.display = 'block';
                        item.style.transform = 'translateY(20px)';
                        item.style.opacity = '0';
                        
                        setTimeout(() => {
                            item.style.transform = 'translateY(0)';
                            item.style.opacity = '1';
                            item.style.transition = 'all 0.3s ease';
                        }, 50);
                        
                        visibleCount++;
                    } else {
                        item.style.display = 'none';
                    }
                }, delay);
                
                delay += 50;
            });
            
            // Update count
            setTimeout(() => {
                faqCount.textContent = visibleCount;
                searchResults.textContent = category === 'all' ? 'Menampilkan semua FAQ' : `Kategori: ${this.textContent.split(' ')[0]}`;
            }, delay);
        });
    });
    
    // Smooth scrolling function
    function scrollToSection(sectionId) {
        const element = document.getElementById(sectionId) || document.querySelector(`[data-section="${sectionId}"]`);
        if (element) {
            const headerOffset = 80;
            const elementPosition = element.offsetTop;
            const offsetPosition = elementPosition - headerOffset;
            
            window.scrollTo({
                top: offsetPosition,
                behavior: 'smooth'
            });
        }
    }
    
    // WhatsApp function with enhanced mobile detection
    function openWhatsApp(message) {
        const phoneNumber = '6281234567890';
        const encodedMessage = encodeURIComponent(message);
        
        // Detect mobile device
        const isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
        
        let whatsappURL;
        if (isMobile) {
            whatsappURL = `whatsapp://send?phone=${phoneNumber}&text=${encodedMessage}`;
        } else {
            whatsappURL = `https://web.whatsapp.com/send?phone=${phoneNumber}&text=${encodedMessage}`;
        }
        
        // Try to open WhatsApp, fallback to web version
        const link = document.createElement('a');
        link.href = whatsappURL;
        link.target = '_blank';
        link.click();
        
        // Fallback for desktop
        if (!isMobile) {
            setTimeout(() => {
                if (!document.hidden) {
                    window.open(`https://wa.me/${phoneNumber}?text=${encodedMessage}`, '_blank');
                }
            }, 1000);
        }
    }
    
    // Newsletter subscription with validation
    document.addEventListener('DOMContentLoaded', function() {
        const newsletterButton = document.querySelector('.input-group button');
        if (newsletterButton) {
            newsletterButton.addEventListener('click', function() {
                const emailInput = this.previousElementSibling;
                const email = emailInput.value.trim();
                
                if (email && isValidEmail(email)) {
                    // Show success message
                    const originalText = this.innerHTML;
                    this.innerHTML = '<i class="fas fa-check me-2"></i>Berhasil!';
                    this.classList.remove('btn-primary');
                    this.classList.add('btn-success');
                    
                    setTimeout(() => {
                        this.innerHTML = originalText;
                        this.classList.remove('btn-success');
                        this.classList.add('btn-primary');
                        emailInput.value = '';
                    }, 2000);
                    
                    // Show toast notification
                    showToast('Terima kasih sudah subscribe newsletter kami! Anda akan mendapatkan artikel terbaru setiap minggu.', 'success');
                } else {
                    showToast('Mohon masukkan email yang valid', 'error');
                    emailInput.focus();
                }
            });
        }
    });
    
    // Email validation function
    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
    
    // Toast notification function
    function showToast(message, type = 'info') {
        // Create toast element if it doesn't exist
        let toastContainer = document.getElementById('toast-container');
        if (!toastContainer) {
            toastContainer = document.createElement('div');
            toastContainer.id = 'toast-container';
            toastContainer.style.cssText = `
                position: fixed;
                top: 20px;
                right: 20px;
                z-index: 9999;
                max-width: 300px;
            `;
            document.body.appendChild(toastContainer);
        }
        
        const toast = document.createElement('div');
        const bgColor = type === 'success' ? 'bg-success' : type === 'error' ? 'bg-danger' : 'bg-primary';
        
        toast.innerHTML = `
            <div class="alert ${bgColor} text-white alert-dismissible fade show" role="alert">
                <i class="fas fa-${type === 'success' ? 'check-circle' : type === 'error' ? 'exclamation-circle' : 'info-circle'} me-2"></i>
                ${message}
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"></button>
            </div>
        `;
        
        toastContainer.appendChild(toast);
        
        // Auto remove after 5 seconds
        setTimeout(() => {
            if (toast.parentNode) {
                toast.remove();
            }
        }, 5000);
    }
    
    // Article read more functionality with better UX
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('a[href="#"]').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const button = this;
                const originalText = button.innerHTML;
                
                button.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Loading...';
                button.classList.add('disabled');
                
                setTimeout(() => {
                    button.innerHTML = originalText;
                    button.classList.remove('disabled');
                    showToast('Artikel lengkap akan segera tersedia! Sementara ini Anda bisa menghubungi kami untuk mendapatkan tips dan panduan publikasi.', 'info');
                }, 1000);
            });
        });
    });
    
    // Keyboard navigation for FAQ
    document.addEventListener('keydown', function(e) {
        if (e.ctrlKey && e.key === '/') {
            e.preventDefault();
            searchInput.focus();
        }
        
        if (e.key === 'Escape' && document.activeElement === searchInput) {
            searchInput.blur();
        }
    });
    
    // Add loading states and progressive enhancement
    window.addEventListener('load', function() {
        // Remove any loading states
        document.querySelectorAll('.loading').forEach(el => {
            el.classList.remove('loading');
        });
        
        // Add progressive enhancement for touch devices
        if ('ontouchstart' in window) {
            document.body.classList.add('touch-device');
        }
        
        // Initialize lazy loading for images
        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        if (img.dataset.src) {
                            img.src = img.dataset.src;
                            img.classList.remove('lazy');
                            imageObserver.unobserve(img);
                        }
                    }
                });
            });
            
            document.querySelectorAll('img[data-src]').forEach(img => {
                imageObserver.observe(img);
            });
        }
    });
    
    // Performance optimization: debounced scroll events
    let ticking = false;
    function updateOnScroll() {
        // Add scroll-based animations or effects here
        ticking = false;
    }
    
    window.addEventListener('scroll', function() {
        if (!ticking) {
            requestAnimationFrame(updateOnScroll);
            ticking = true;
        }
    });
</script>
@endsection
