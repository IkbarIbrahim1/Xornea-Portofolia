@extends('layouts.app')

@section('title', 'Testimoni Klien Xornea')

@section('content')
<!-- Hero Section -->
<section class="hero-section position-relative overflow-hidden">
    <div class="container">
        <div class="row align-items-center min-vh-60">
            <div class="col-12 col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                <h1 class="display-4 display-md-3 fw-bold mb-4 text-center text-lg-start">Testimoni Klien</h1>
                <p class="lead text-center text-lg-start mb-4 text-responsive">Dengarkan langsung dari para peneliti yang telah merasakan manfaat layanan Xornea. Real stories, real success!</p>
                
            </div>
            <div class="col-12 col-lg-6" data-aos="fade-left">
                <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=600&h=400&fit=crop" 
                         alt="Client Testimonials" class="img-fluid rounded-4 shadow-lg w-100">
                    <!-- Satisfaction indicator -->
                    <div class="position-absolute bottom-0 start-0 bg-primary text-white rounded p-3 shadow m-3 animate-bounce-slow">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-heart me-2"></i>
                            <div>
                                <div class="fw-bold">100%</div>
                                <small>Satisfaction</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Background elements -->
    <div class="position-absolute top-0 start-0 w-100 h-100 overflow-hidden" style="z-index: -1;">
        <div class="floating-shape bg-light opacity-15 rounded-circle position-absolute animate-float-slow" 
             style="width: 140px; height: 140px; top: 25%; right: 20%;"></div>
        <div class="floating-shape bg-light opacity-15 rounded-circle position-absolute animate-float-reverse" 
             style="width: 100px; height: 100px; bottom: 20%; left: 15%;"></div>
    </div>
</section>

<!-- Testimoni Section -->
<section class="section-padding">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title spacing-responsive" data-aos="fade-up">Cerita Sukses Klien Kami</h2>
            <p class="section-subtitle text-responsive" data-aos="fade-up" data-aos-delay="100">Mereka yang telah merasakan layanan terbaik Xornea</p>
        </div>
        
        <!-- Responsive testimonial grid -->
        <div class="grid-responsive">
            <!-- Testimoni 1 -->
            <div class="testimonial-item" data-aos="fade-up" data-aos-delay="100">
                <div class="card border-0 shadow-lg h-100">
                    <div class="card-body text-center p-4 p-mobile-3">
                        <img src="{{ asset('assets/images/testimoni/testimoni1.jpg') }}" 
                             alt="Dr. Ahmad Pratama" class="rounded-circle mb-4 spacing-responsive" 
                             width="120" height="120" style="object-fit: cover;">
                        <h5 class="fw-bold mb-2">Dr. Ahmad Pratama</h5>
                        <p class="text-muted mb-3">Dosen Universitas Indonesia</p>
                        <div class="rating mb-3">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                        </div>
                        <p class="text-responsive">"Xornea sangat membantu dalam publikasi penelitian saya. Prosesnya cepat dan hasil yang memuaskan!"</p>
                    </div>
                </div>
            </div>

            <!-- Testimoni 2 -->
            <div class="testimonial-item" data-aos="fade-up" data-aos-delay="200">
                <div class="card border-0 shadow-lg h-100">
                    <div class="card-body text-center p-4 p-mobile-3">
                        <img src="{{ asset('assets/images/testimoni/testimoni2.jpg') }}" 
                             alt="Prof. Dr. Sari Wulandari" class="rounded-circle mb-4 spacing-responsive" 
                             width="120" height="120" style="object-fit: cover;">
                        <h5 class="fw-bold mb-2">Prof. Dr. Sari Wulandari</h5>
                        <p class="text-muted mb-3">Peneliti Senior ITB</p>
                        <div class="rating mb-3">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                        </div>
                        <p class="text-responsive">"Pelayanan yang profesional dan berkualitas tinggi. Sangat direkomendasikan untuk publikasi jurnal internasional."</p>
                    </div>
                </div>
            </div>

            <!-- Testimoni 3 -->
            <div class="testimonial-item" data-aos="fade-up" data-aos-delay="300">
                <div class="card border-0 shadow-lg h-100">
                    <div class="card-body text-center p-4 p-mobile-3">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=120&h=120&fit=crop&crop=face" 
                             alt="Dr. Budi Santoso" class="rounded-circle mb-4 spacing-responsive" 
                             width="120" height="120" style="object-fit: cover;">
                        <h5 class="fw-bold mb-2">Dr. Budi Santoso</h5>
                        <p class="text-muted mb-3">Peneliti LIPI</p>
                        <div class="rating mb-3">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                        </div>
                        <p class="text-responsive">"Tim Xornea sangat responsif dan membantu proses publikasi dengan tingkat keberhasilan yang tinggi."</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Statistics Section -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title spacing-responsive" data-aos="fade-up">Statistik Kepuasan Klien</h2>
        </div>
        
        <div class="row text-center">
            <div class="col-6 col-md-3 mb-4 mb-md-0" data-aos="zoom-in" data-aos-delay="100">
                <div class="stat-item">
                    <div class="stat-counter">500+</div>
                    <h6 class="text-responsive">Klien Puas</h6>
                </div>
            </div>
            <div class="col-6 col-md-3 mb-4 mb-md-0" data-aos="zoom-in" data-aos-delay="200">
                <div class="stat-item">
                    <div class="stat-counter">98%</div>
                    <h6 class="text-responsive">Tingkat Keberhasilan</h6>
                </div>
            </div>
            <div class="col-6 col-md-3" data-aos="zoom-in" data-aos-delay="300">
                <div class="stat-item">
                    <div class="stat-counter">5.0</div>
                    <h6 class="text-responsive">Rating Rata-rata</h6>
                </div>
            </div>
            <div class="col-6 col-md-3" data-aos="zoom-in" data-aos-delay="400">
                <div class="stat-item">
                    <div class="stat-counter">24/7</div>
                    <h6 class="text-responsive">Support</h6>
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
                <h2 class="fw-bold mb-4 spacing-responsive">Siap Menjadi Klien Sukses Berikutnya?</h2>
                <p class="lead mb-5 text-responsive">Bergabunglah dengan para peneliti sukses yang telah mempercayakan publikasi jurnal mereka kepada Xornea!</p>
                <div class="btn-group-responsive">
                    <a href="{{ url('/contact') }}" class="btn btn-light btn-lg">
                        <i class="fas fa-rocket me-2"></i>Mulai Konsultasi
                    </a>
                    <a href="{{ url('/services') }}" class="btn btn-outline-light btn-lg">
                        <i class="fas fa-eye me-2"></i>Lihat Layanan
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
