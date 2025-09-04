@extends('layouts.app')

@section('title', 'Tentang Xornea - Our Story & Mission')

@section('content')
<!-- Hero Section -->
<section class="hero-section position-relative overflow-hidden">
    <div class="container">
        <div class="row align-items-center min-vh-60">
            <div class="col-12 col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                <h1 class="display-4 display-md-3 fw-bold mb-4 text-center text-lg-start">Tentang Xornea</h1>
                <p class="lead text-center text-lg-start text-responsive">Lahir dari keresahan akademisi muda yang ingin membantu peneliti Indonesia menembus panggung global.</p>
                
                <!-- Quick Stats -->
                <div class="grid-responsive mt-4">
                    <div class="stat-item text-center">
                        <h3 class="fw-bold text-primary mb-1">500+</h3>
                        <small class="text-muted">Artikel Published</small>
                    </div>
                    <div class="stat-item text-center">
                        <h3 class="fw-bold text-success mb-1">95%</h3>
                        <small class="text-muted">Success Rate</small>
                    </div>
                    <div class="stat-item text-center">
                        <h3 class="fw-bold text-info mb-1">24/7</h3>
                        <small class="text-muted">Support</small>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6" data-aos="fade-left">
                <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=600&h=400&fit=crop" 
                         alt="Our Story" class="img-fluid rounded-4 shadow-lg w-100">
                    <!-- Interactive overlay -->
                    <div class="position-absolute top-0 end-0 p-3">
                        <div class="bg-white rounded-circle p-3 shadow animate-float">
                            <i class="fas fa-heart text-danger fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Background elements -->
    <div class="position-absolute top-0 start-0 w-100 h-100 overflow-hidden" style="z-index: -1;">
        <div class="floating-shape bg-primary opacity-5 rounded-circle position-absolute animate-float-slow" 
             style="width: 150px; height: 150px; top: 20%; left: 5%;"></div>
        <div class="floating-shape bg-success opacity-5 rounded-circle position-absolute animate-float-reverse" 
             style="width: 100px; height: 100px; bottom: 30%; right: 10%;"></div>
    </div>
</section>

<!-- Story Section -->
<section class="section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?w=600&h=500&fit=crop" 
                     alt="Our Beginning" class="img-fluid rounded-4">
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="section-title">Kisah Lahirnya Xornea</h2>
                <p class="lead text-primary mb-4">"Setiap penelitian hebat layak mendapat panggung yang tepat"</p>
                
                <div class="mb-4">
                    <p>Xornea hadir sebagai ruang pendampingan dan publikasi jurnal bagi peneliti, dosen, maupun mahasiswa yang masih awam dengan jurnal ilmiah. Kami tidak hanya membantu proses publikasi, tetapi juga memberikan konsultasi agar setiap karya ilmiah dapat menemukan jalannya menuju pembaca yang tepat.</p>
                    
                    <p>Filosofi nama Xornea berasal dari “X” (eksplorasi pengetahuan), “Ornea” (ornamen berharga), dan “Nea” (kedekatan), yang mencerminkan komitmen kami untuk mendampingi penulis layaknya keluarga sendiri, juga menjadikan riset sebagai karya berharga, dan membawanya menuju panggung ilmiah yang lebih luas.</p>
                    
                    <p class="fw-semibold">Dari situlah lahir Xornea - sebuah platform yang berkomitmen membantu peneliti Indonesia shine di panggung global.</p>
                </div>
                
                {{-- <div class="row text-center">
                    <div class="col-md-4 mb-3">
                        <div class="feature-icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h6 class="fw-bold">2020</h6>
                        <small class="text-muted">Tahun Berdiri</small>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="feature-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h6 class="fw-bold">50+</h6>
                        <small class="text-muted">Tim Expert</small>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="feature-icon">
                            <i class="fas fa-globe"></i>
                        </div>
                        <h6 class="fw-bold">25+</h6>
                        <small class="text-muted">Negara Klien</small>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</section>

<!-- Vision & Mission -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title" data-aos="fade-up">Visi & Misi Kami</h2>
            <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">Membangun masa depan penelitian Indonesia yang lebih cerah</p>
        </div>
        
        <div class="row">
            <div class="col-lg-6 mb-4" data-aos="fade-right">
                <div class="card h-100 p-5 text-center border-0 shadow">
                    <div class="feature-icon text-primary">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3 class="fw-bold text-primary mb-4">Visi</h3>
                    <p class="fs-5 lh-lg">Meningkatkan daya saing akademisi Indonesia melalui karya ilmiah bereputasi internasional</p>
                    <div class="mt-4">
                        <p class="text-muted">Kami percaya bahwa Indonesia memiliki potensi research yang luar biasa. Yang dibutuhkan hanya platform yang tepat untuk memperkenalkan karya tersebut ke dunia.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4" data-aos="fade-left">
                <div class="card h-100 p-5 text-center border-0 shadow">
                    <div class="feature-icon text-success">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3 class="fw-bold text-success mb-4">Misi</h3>
                    <div class="text-start">
                        <div class="d-flex align-items-start mb-3">
                            <i class="fas fa-check-circle text-success me-3 mt-1"></i>
                            <p class="mb-0"><strong>Kualitas:</strong> Menghasilkan artikel berkualitas tinggi dengan standar internasional</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <i class="fas fa-check-circle text-success me-3 mt-1"></i>
                            <p class="mb-0"><strong>Kecepatan:</strong> Proses efisien dengan timeline yang jelas dan terpantau</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <i class="fas fa-check-circle text-success me-3 mt-1"></i>
                            <p class="mb-0"><strong>Orisinalitas:</strong> Menjamin setiap karya bebas plagiarisme dan authentic</p>
                        </div>
                        <div class="d-flex align-items-start">
                            <i class="fas fa-check-circle text-success me-3 mt-1"></i>
                            <p class="mb-0"><strong>Kerahasiaan:</strong> Melindungi data dan intellectual property klien</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="section-padding">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title" data-aos="fade-up">Nilai-Nilai Kami</h2>
            <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">Prinsip yang memandu setiap langkah perjalanan kami</p>
        </div>
        
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="text-center">
                    <div class="feature-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h5 class="fw-bold">Passion</h5>
                    <p class="text-muted">Passionate tentang kemajuan penelitian Indonesia di mata dunia</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="200">
                <div class="text-center">
                    <div class="feature-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h5 class="fw-bold">Integrity</h5>
                    <p class="text-muted">Berkomitmen pada kejujuran dan transparansi dalam setiap layanan</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="300">
                <div class="text-center">
                    <div class="feature-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="fw-bold">Excellence</h5>
                    <p class="text-muted">Selalu mengutamakan kualitas terbaik dalam setiap deliverable</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="400">
                <div class="text-center">
                    <div class="feature-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h5 class="fw-bold">Innovation</h5>
                    <p class="text-muted">Terus berinovasi untuk memberikan solusi terdepan</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Preview -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title" data-aos="fade-up">Meet Our Expert Team</h2>
            <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">Tim multidisiplin yang berpengalaman di berbagai bidang penelitian</p>
        </div>
        
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card border-0 shadow text-center">
                    <img src="{{ asset('assets/images/team/bambang.jpg') }}" 
                         alt="Bambang" class="card-img-top" style="height: 300px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="fw-bold">Bambang</h5>
                        <h5 class="">Chief Executive Officer</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card border-0 shadow text-center">
                    <img src="{{ asset('assets/images/team/arya.jpg') }}" 
                         alt="Arya" class="card-img-top" style="height: 300px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="fw-bold">Arya</h5>
                        <h5 class="">Chief Operating Officer</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card border-0 shadow text-center">
                    <img src="{{ asset('assets/images/team/baihaqi.jpg') }}" 
                         alt="Baihaqi" class="card-img-top" style="height: 300px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="fw-bold">Baihaqi</h5>
                            <h5 class="">Chief Technology Officer</h5>
                        </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="card border-0 shadow text-center">
                    <img src="{{ asset('assets/images/team/ira.jpg') }}" 
                         alt="Ira" class="card-img-top" style="height: 300px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="fw-bold">Devita</h5>
                        <h5 class="">Chief Financial Officer</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Video Profile Section -->
{{-- <section class="section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <h2 class="section-title">Lihat Proses Kerja Kami</h2>
                <p class="lead mb-4">Dari konsultasi awal hingga artikel published, setiap step dirancang untuk memberikan hasil terbaik bagi penelitian Anda.</p>
                
                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <div class="d-flex align-items-center">
                            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
                                <span class="fw-bold">1</span>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Konsultasi Gratis</h6>
                                <small class="text-muted">Analisis kebutuhan & scope</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <div class="d-flex align-items-center">
                            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
                                <span class="fw-bold">2</span>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Research & Writing</h6>
                                <small class="text-muted">Tim expert mulai bekerja</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <div class="d-flex align-items-center">
                            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
                                <span class="fw-bold">3</span>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Quality Check</h6>
                                <small class="text-muted">Review & anti-plagiarisme</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <div class="d-flex align-items-center">
                            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
                                <span class="fw-bold">4</span>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Submit & Publish</h6>
                                <small class="text-muted">Full handling hingga accepted</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="position-relative">
                    <div class="ratio ratio-16x9">
                        <div class="bg-light rounded-4 d-flex align-items-center justify-content-center">
                            <div class="text-center">
                                <i class="fas fa-play-circle text-primary" style="font-size: 4rem;"></i>
                                <h5 class="mt-3 fw-bold">Video Profile Xornea</h5>
                                <p class="text-muted">Coming Soon - Testimoni lengkap dari klien kami</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<!-- Achievement Section -->
<section class="section-padding bg-primary text-white">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold" data-aos="fade-up">Pencapaian Kami</h2>
            <p class="lead" data-aos="fade-up" data-aos-delay="100">Prestasi yang membanggakan dalam perjalanan kami</p>
        </div>
        
        <div class="row text-center">
            <div class="col-lg-3 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="mb-3">
                    <i class="fas fa-award" style="font-size: 3rem;"></i>
                </div>
                <h4 class="fw-bold">Best Academic Service</h4>
                <p>Indonesia Research Award 2023</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="200">
                <div class="mb-3">
                    <i class="fas fa-certificate" style="font-size: 3rem;"></i>
                </div>
                <h4 class="fw-bold">ISO Certified</h4>
                <p>Quality Management System</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="300">
                <div class="mb-3">
                    <i class="fas fa-users" style="font-size: 3rem;"></i>
                </div>
                <h4 class="fw-bold">Member COPE</h4>
                <p>Committee on Publication Ethics</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="400">
                <div class="mb-3">
                    <i class="fas fa-globe" style="font-size: 3rem;"></i>
                </div>
                <h4 class="fw-bold">International Network</h4>
                <p>Partner dengan 50+ Journals</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section-padding">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-lg-8" data-aos="zoom-in">
                <h2 class="section-title">Bergabunglah dengan Keluarga Xornea</h2>
                <p class="lead mb-5">Jadilah bagian dari komunitas peneliti yang telah merasakan manfaat layanan kami. Your research deserves the best platform!</p>
                <div class="d-flex flex-column flex-md-row gap-3 justify-content-center">
                    <a href="{{ url('/contact') }}" class="btn btn-primary btn-lg">
                        <i class="fas fa-phone me-2"></i>Konsultasi Gratis
                    </a>
                    <a href="{{ url('/services') }}" class="btn btn-outline-primary btn-lg">
                        <i class="fas fa-eye me-2"></i>Lihat Layanan
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
