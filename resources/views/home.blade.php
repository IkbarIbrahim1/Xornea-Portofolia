@extends('layouts.app')

@section('title', 'Xornea - Where Your Research Finds Its Voice')

@section('content')
<!-- Hero Section -->
<section class="hero-section position-relative overflow-hidden">
    <div class="container">
        <div class="row align-items-center min-vh-75">
            <div class="col-12 col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                <h1 class="display-4 display-md-3 fw-bold mb-4 text-center text-lg-start">
                    Xornea – Where Your Research Finds Its Voice
                </h1>
                <p class="lead mb-4 text-center text-lg-start">
                    Pendampingan publikasi jurnal Sinta hingga Scopus, cepat & terpercaya. 
                    Wujudkan impian penelitian Anda untuk tampil di panggung akademik internasional.
                </p>
                <div class="d-flex flex-column flex-md-row gap-3 mb-5 justify-content-center justify-content-lg-start">
                    <a href="{{ url('/contact') }}" class="btn btn-light btn-lg pulse">
                        <i class="fas fa-phone me-2"></i>Konsultasi Gratis
                    </a>
                    <a href="{{ url('/services') }}" class="btn btn-outline-light btn-lg">
                        <i class="fas fa-calculator me-2"></i>Cek Estimasi Biaya
                    </a>
                </div>
                
                <!-- Keunggulan Singkat -->
                <div class="row text-center">
                    <div class="col-12 col-md-4 mb-3">
                        <div class="d-flex flex-column align-items-center feature-item">
                            <div class="feature-icon-wrapper mb-2">
                                <i class="fas fa-users-cog fs-2"></i>
                            </div>
                            <span class="fw-semibold">Multidisiplin Tim Ahli</span>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 mb-3">
                        <div class="d-flex flex-column align-items-center feature-item">
                            <div class="feature-icon-wrapper mb-2">
                                <i class="fas fa-shield-alt fs-2"></i>
                            </div>
                            <span class="fw-semibold">100% Anti Plagiarisme</span>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 mb-3">
                        <div class="d-flex flex-column align-items-center feature-item">
                            <div class="feature-icon-wrapper mb-2">
                                <i class="fas fa-globe fs-2"></i>
                            </div>
                            <span class="fw-semibold">Terbukti Publish Global</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6" data-aos="fade-left">
                <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=600&h=400&fit=crop" 
                         alt="Research Team" class="img-fluid rounded-4 shadow-lg w-100">
                    <div class="position-absolute top-0 start-0 bg-white rounded p-3 shadow m-3 animate-bounce-slow">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-check-circle text-success fs-4 me-2"></i>
                            <div>
                                <div class="fw-bold">Artikel Diterima</div>
                                <small class="text-muted">Q2 Scopus Journal</small>
                            </div>
                        </div>
                    </div>
                    <!-- Floating elements for interactivity -->
                    <div class="position-absolute bottom-0 end-0 p-3">
                        <div class="bg-primary text-white rounded-circle p-3 shadow animate-float">
                            <i class="fas fa-award fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Floating Background Elements -->
    <div class="position-absolute top-0 start-0 w-100 h-100 overflow-hidden" style="z-index: -1;">
        <div class="floating-shape bg-light opacity-10 rounded-circle position-absolute animate-float-slow" 
             style="width: 120px; height: 120px; top: 15%; right: 10%;"></div>
        <div class="floating-shape bg-light opacity-10 rounded-circle position-absolute animate-float-reverse" 
             style="width: 80px; height: 80px; top: 70%; left: 15%;"></div>
        <div class="floating-shape bg-light opacity-10 rounded-circle position-absolute animate-float" 
             style="width: 100px; height: 100px; bottom: 10%; right: 60%;"></div>
    </div>
</section>


<!-- Mengapa Memilih Xornea -->
<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6" data-aos="fade-right">
                <h2 class="section-title">Mengapa Peneliti Memilih Xornea?</h2>
                <p class="section-subtitle">Kami memahami tantangan dunia akademik Indonesia dan berkomitmen membantu Anda meraih publikasi impian.</p>
                
                <div class="row">
                    <div class="col-sm-6 mb-4">
                        <div class="d-flex">
                            <div class="feature-icon me-3">
                                <i class="fas fa-rocket"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold">Proses Cepat</h5>
                                <p class="text-muted">Timeline jelas dan terpantau real-time</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <div class="d-flex">
                            <div class="feature-icon me-3">
                                <i class="fas fa-award"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold">Kualitas Terjamin</h5>
                                <p class="text-muted">Tim editor berpengalaman internasional</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <div class="d-flex">
                            <div class="feature-icon me-3">
                                <i class="fas fa-lock"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold">Kerahasiaan</h5>
                                <p class="text-muted">Data dan naskah dijamin aman</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <div class="d-flex">
                            <div class="feature-icon me-3">
                                <i class="fas fa-headset"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold">Support 24/7</h5>
                                <p class="text-muted">Konsultasi kapan saja Anda butuhkan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?w=600&h=500&fit=crop" 
                         alt="Team Working" class="img-fluid rounded-4">
                    
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Layanan Unggulan -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title" data-aos="fade-up">Layanan Unggulan Kami</h2>
            <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">Solusi lengkap untuk setiap kebutuhan publikasi akademik Anda</p>
        </div>
        
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 text-center p-4 border-0 shadow service-card">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-pen-fancy"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Academic Writing</h4>
                    <p class="text-muted mb-4">Penulisan artikel original dengan metodologi yang kuat dan sesuai standar jurnal internasional.</p>
                    <div class="mt-auto">
                        <a href="{{ url('/services') }}" class="btn btn-outline-primary">Lihat Detail</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 text-center p-4 border-0 shadow service-card">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-edit"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Editing & Proofreading</h4>
                    <p class="text-muted mb-4">Professional editing dengan berbagai style guide dan native English proofreading.</p>
                    <div class="mt-auto">
                        <a href="{{ url('/services') }}" class="btn btn-outline-primary">Lihat Detail</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 text-center p-4 border-0 shadow service-card">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-search"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Anti Plagiarisme</h4>
                    <p class="text-muted mb-4">Guarantee similarity di bawah 15% dengan tools premium dan parafrase expert.</p>
                    <div class="mt-auto">
                        <a href="{{ url('/services') }}" class="btn btn-outline-primary">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('styles')
<style>
    /* Feature Icon Fixes - Ensure perfect square */
    .feature-icon {
        width: 60px !important;
        height: 60px !important;
        min-width: 60px !important;
        min-height: 60px !important;
        max-width: 60px !important;
        max-height: 60px !important;
        border-radius: 50% !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        flex-shrink: 0 !important;
        aspect-ratio: 1 / 1 !important;
    }
    
    .feature-icon i {
        font-size: 1.5rem !important;
        line-height: 1 !important;
    }
    
    /* Service Card Hover Effects */
    .service-card {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .service-card:hover {
        transform: translateY(-8px) scale(1.02);
        box-shadow: 0 15px 40px rgba(0,0,0,0.1);
    }
    
    .service-card .btn {
        transform: translateY(10px);
        opacity: 0;
        transition: all 0.3s ease;
    }
    
    .service-card:hover .btn {
        transform: translateY(0);
        opacity: 1;
    }
    
    /* Mobile optimizations */
    @media (hover: none) and (pointer: coarse) {
        .service-card .btn {
            transform: translateY(0);
            opacity: 1;
        }
        
        .service-card:hover {
            transform: none;
        }
    }
</style>
@endsection

@section('scripts')
<script>
    // Enhanced feature item interactions
    document.addEventListener('DOMContentLoaded', function() {
        // Feature items click interaction
        document.querySelectorAll('.feature-item').forEach(item => {
            item.addEventListener('click', function() {
                const icon = this.querySelector('.feature-icon-wrapper i');
                const text = this.querySelector('span').textContent;
                
                // Add visual feedback
                icon.style.transform = 'scale(1.2) rotate(360deg)';
                
                setTimeout(() => {
                    icon.style.transform = '';
                }, 600);
                
                // Show related information
                showFeatureInfo(text);
            });
        });
        
        // Service cards click interaction
        document.querySelectorAll('.service-card').forEach(card => {
            card.addEventListener('click', function(e) {
                if (!e.target.classList.contains('btn') && !e.target.closest('.btn')) {
                    const btn = this.querySelector('.btn');
                    if (btn) {
                        btn.click();
                    }
                }
            });
        });
        
        // Testimonial card interactions
        document.querySelectorAll('.testimonial-card').forEach(card => {
            card.addEventListener('click', function() {
                this.style.transform = 'scale(1.02)';
                setTimeout(() => {
                    this.style.transform = '';
                }, 200);
            });
        });
    });
    
    // Feature information display
    function showFeatureInfo(featureName) {
        const messages = {
            'Multidisiplin Tim Ahli': 'Tim kami terdiri dari PhD holders dan peneliti berpengalaman dari berbagai bidang ilmu untuk memastikan artikel Anda ditangani oleh expert yang tepat.',
            '100% Anti Plagiarisme': 'Setiap artikel melalui pengecekan plagiarisme ketat dengan tools premium dan review manual untuk memastikan originalitas.',
            'Terbukti Publish Global': 'Lebih dari 500+ artikel berhasil dipublikasikan di jurnal internasional bereputasi dengan tingkat keberhasilan 95%.'
        };
        
        const message = messages[featureName] || 'Informasi lebih lanjut akan segera tersedia.';
        if (window.showToast) {
            window.showToast(message, 'info');
        }
    }
</script>
@endsection
