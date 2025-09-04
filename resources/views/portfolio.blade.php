@extends('layouts.app')

@section('title', 'Portofolio & Keberhasilan Xornea - Success Stories')

@section('content')
<!-- Hero Section -->
<section class="hero-section position-relative overflow-hidden">
    <div class="container">
        <div class="row align-items-center min-vh-60">
            <div class="col-12 col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                <h1 class="display-4 display-md-3 fw-bold mb-4 text-center text-lg-start">Portofolio & Keberhasilan</h1>
                <p class="lead text-center text-lg-start mb-4">Bukti nyata kesuksesan klien kami dalam meraih publikasi di jurnal-jurnal bereputasi internasional.</p>
                
            </div>
            <div class="col-12 col-lg-6" data-aos="fade-left">
                <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1553484771-371a605b060b?w=600&h=400&fit=crop" 
                         alt="Success Portfolio" class="img-fluid rounded-4 shadow-lg w-100">
                    <!-- Success indicator -->
                    <div class="position-absolute top-0 end-0 bg-success text-white rounded p-3 shadow m-3 animate-pulse">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-trophy me-2"></i>
                            <div>
                                <div class="fw-bold">95%</div>
                                <small>Success Rate</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Background elements -->
    <div class="position-absolute top-0 start-0 w-100 h-100 overflow-hidden" style="z-index: -1;">
        <div class="floating-shape bg-warning opacity-10 rounded-circle position-absolute animate-float-slow" 
             style="width: 130px; height: 130px; top: 20%; right: 15%;"></div>
        <div class="floating-shape bg-success opacity-10 rounded-circle position-absolute animate-float-reverse" 
             style="width: 110px; height: 110px; bottom: 25%; left: 10%;"></div>
    </div>
</section>

<!-- Case Study Featured -->
<section class="section-padding">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title" data-aos="fade-up">Published Articles Portfolio</h2>
            <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">Bukti nyata keberhasilan publikasi dari berbagai disiplin ilmu</p>
        </div>
        
        <!-- Article 1: JOSH Journal -->
        <div class="row mb-5">
            <div class="col-lg-12" data-aos="fade-up">
                <div class="card border-0 shadow-lg">
                    <div class="card-body p-5">
                        <div class="d-flex align-items-center mb-4">
                            <div class="feature-icon text-success me-3">
                                <i class="fas fa-book-open"></i>
                            </div>
                            <div>
                                <span class="badge bg-success text-white px-3 py-2 me-2">PUBLISHED</span>
                                <span class="badge bg-primary text-white px-3 py-2">HUKUM ISLAM</span>
                            </div>
                        </div>
                        
                        <h4 class="fw-bold mb-3 text-primary">Persepsi Mahasiswa pada Isu Penggunaan Ghibli Art AI di Media Sosial Sebagai Mata Pencaharian</h4>
                        
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <p><strong>Jurnal:</strong> JOSH (Journal of Sharia), Universitas Suryakancana</p>
                                <p><strong>Status:</strong> <span class="text-success fw-bold">Published (Vol. 4 No. 2, 2025)</span></p>
                                <p><strong>Scope:</strong> Hukum Islam, Pemikiran Keislaman Kontemporer, Interaksi Agama & Sosial Budaya</p>
                            </div>
                            <div class="col-md-6">
                                <div class="bg-light p-3 rounded">
                                    <h6 class="fw-bold mb-2 text-primary">Value Xornea:</h6>
                                    <ul class="list-unstyled mb-0 small">
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Mengarahkan isu populer agar sesuai scope jurnal</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Mengubah draft sederhana menjadi publikasi bereputasi</li>
                                        <li class="mb-0"><i class="fas fa-check text-success me-2"></i>Bukti nyata keberhasilan pendampingan publikasi</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="alert alert-info mb-0">
                            <i class="fas fa-lightbulb me-2"></i>
                            <strong>Inovasi:</strong> Artikel ini berhasil menghubungkan fenomena sosial-ekonomi dan etika AI dengan perspektif keislaman, masuk dalam ranah kajian kontemporer yang relevan.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Article 2: JOECY Journal -->
        <div class="row mb-5">
            <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <div class="card border-0 shadow-lg">
                    <div class="card-body p-5">
                        <div class="d-flex align-items-center mb-4">
                            <div class="feature-icon text-warning me-3">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <div>
                                <span class="badge bg-success text-white px-3 py-2 me-2">PUBLISHED</span>
                                <span class="badge bg-warning text-dark px-3 py-2">E-COMMERCE</span>
                            </div>
                        </div>
                        
                        <h4 class="fw-bold mb-3 text-primary">The Influence of Product Quality and Electronic Word of Mouth on Purchase Decisions in E-Commerce Shopee</h4>
                        
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <p><strong>Jurnal:</strong> JOECY – Journal of Entrepreneurship and Business</p>
                                <p><strong>Status:</strong> <span class="text-success fw-bold">Published (Vol. 2 No. 3, 2024)</span></p>
                                <p><strong>Scope:</strong> Kewirausahaan | Manajemen Bisnis | Digital Marketing | Strategi E-Commerce</p>
                            </div>
                            <div class="col-md-6">
                                <div class="bg-light p-3 rounded">
                                    <h6 class="fw-bold mb-2 text-warning">Pencapaian:</h6>
                                    <ul class="list-unstyled mb-0 small">
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Terpublikasi di jurnal bereputasi</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Relevan dengan isu bisnis digital terkini</li>
                                        <li class="mb-0"><i class="fas fa-check text-success me-2"></i>Membuktikan kualitas riset yang selaras dengan kebutuhan akademik & industri</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="bg-warning bg-opacity-10 p-3 rounded">
                                    <h6 class="fw-bold mb-2 text-dark">🔹 Peran Xornea:</h6>
                                    <div class="row">
                                        <div class="col-md-4 small">
                                            <i class="fas fa-bullseye text-warning me-2"></i>Memastikan kesesuaian naskah dengan scope jurnal
                                        </div>
                                        <div class="col-md-4 small">
                                            <i class="fas fa-microscope text-warning me-2"></i>Pendampingan metodologi & penajaman analisis
                                        </div>
                                        <div class="col-md-4 small">
                                            <i class="fas fa-award text-warning me-2"></i>Menjamin kelayakan akademis hingga publikasi final
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Article 3: JOUMI Journal -->
        <div class="row mb-5">
            <div class="col-lg-12" data-aos="fade-up" data-aos-delay="200">
                <div class="card border-0 shadow-lg">
                    <div class="card-body p-5">
                        <div class="d-flex align-items-center mb-4">
                            <div class="feature-icon text-info me-3">
                                <i class="fas fa-heartbeat"></i>
                            </div>
                            <div>
                                <span class="badge bg-success text-white px-3 py-2 me-2">PUBLISHED</span>
                                <span class="badge bg-info text-white px-3 py-2">KESEHATAN DIGITAL</span>
                                <span class="badge bg-secondary text-white px-3 py-2">INDEX COPERNICUS</span>
                            </div>
                        </div>
                        
                        <h4 class="fw-bold mb-3 text-primary">Mitigasi Risiko Self-Diagnose Melalui Media Sosial: Pengembangan Model Komunikasi Kesehatan Berbasis Digital</h4>
                        
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <p><strong>Jurnal:</strong> JOUMI (Jurnal Multidisiplin Indonesia)</p>
                                <p><strong>Status:</strong> <span class="text-success fw-bold">Published (Vol. 3 No. 1, 2025)</span></p>
                                <p><strong>Index:</strong> <span class="fw-bold text-secondary">Copernicus – Multidisciplinary scope</span></p>
                            </div>
                            <div class="col-md-6">
                                <div class="bg-light p-3 rounded">
                                    <h6 class="fw-bold mb-2 text-info">Scope Jurnal:</h6>
                                    <ul class="list-unstyled mb-0 small">
                                        <li class="mb-1"><i class="fas fa-dot-circle text-info me-2"></i>Literasi kesehatan</li>
                                        <li class="mb-1"><i class="fas fa-dot-circle text-info me-2"></i>Komunikasi kesehatan digital</li>
                                        <li class="mb-1"><i class="fas fa-dot-circle text-info me-2"></i>Risiko informasi dari self-diagnose</li>
                                        <li class="mb-0"><i class="fas fa-dot-circle text-info me-2"></i>Model komunikasi berbasis digital</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="bg-success bg-opacity-10 p-3 rounded">
                                    <h6 class="fw-bold mb-2 text-success">✅ Pencapaian:</h6>
                                    <ul class="list-unstyled mb-0 small">
                                        <li class="mb-1"><i class="fas fa-trophy text-success me-2"></i>Terpublikasi di jurnal bereputasi multidisiplin</li>
                                        <li class="mb-1"><i class="fas fa-bullseye text-success me-2"></i>Relevan dengan isu kesehatan digital dan literasi masyarakat</li>
                                        <li class="mb-0"><i class="fas fa-certificate text-success me-2"></i>Bukti nyata riset sesuai kebutuhan akademik & publikasi ilmiah</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="bg-info bg-opacity-10 p-3 rounded">
                                    <h6 class="fw-bold mb-2 text-info">💡 Nilai Tambah Xornea:</h6>
                                    <ul class="list-unstyled mb-0 small">
                                        <li class="mb-1"><i class="fas fa-check-circle text-info me-2"></i>Memastikan naskah terstruktur sesuai scope komunikasi kesehatan</li>
                                        <li class="mb-0"><i class="fas fa-edit text-info me-2"></i>Pendampingan menyeluruh dari editing hingga tata tulis final</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                        
        
    </div>
</section>

<!-- Badge Reputasi -->
{{-- <section class="section-padding">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title" data-aos="fade-up">Badge Reputasi</h2>
            <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">Pengakuan dan sertifikasi yang kami raih</p>
        </div>
        
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="card border-0 shadow text-center p-4">
                    <div class="feature-icon text-warning">
                        <i class="fas fa-medal"></i>
                    </div>
                    <h5 class="fw-bold">500+ Publikasi Sukses</h5>
                    <p class="text-muted">Track record yang terbukti dalam membantu peneliti Indonesia</p>
                    <div class="badge bg-warning text-dark">VERIFIED</div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="200">
                <div class="card border-0 shadow text-center p-4">
                    <div class="feature-icon text-success">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h5 class="fw-bold">Trusted by Lecturers</h5>
                    <p class="text-muted">Dipercaya oleh dosen dan peneliti dari 100+ universitas</p>
                    <div class="badge bg-success">CERTIFIED</div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="300">
                <div class="card border-0 shadow text-center p-4">
                    <div class="feature-icon text-primary">
                        <i class="fas fa-globe-americas"></i>
                    </div>
                    <h5 class="fw-bold">International Recognition</h5>
                    <p class="text-muted">Artikel klien kami dikutip oleh peneliti dari berbagai negara</p>
                    <div class="badge bg-primary">GLOBAL</div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="400">
                <div class="card border-0 shadow text-center p-4">
                    <div class="feature-icon text-danger">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h5 class="fw-bold">95% Client Satisfaction</h5>
                    <p class="text-muted">Tingkat kepuasan klien yang tinggi dengan layanan kami</p>
                    <div class="badge bg-danger">EXCELLENT</div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<!-- Statistik Capaian Real-time -->
{{-- <section class="section-padding bg-primary text-white">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold" data-aos="fade-up">Statistik Capaian Real-time</h2>
            <p class="lead" data-aos="fade-up" data-aos-delay="100">Data terkini yang terus bertambah setiap harinya</p>
        </div>
        
        <div class="row text-center">
            <div class="col-lg-2 col-md-4 col-6 mb-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="stat-counter" data-target="523">0</div>
                <h6 class="fw-semibold">Total Artikel</h6>
                <small>Dipublikasikan</small>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mb-4" data-aos="zoom-in" data-aos-delay="200">
                <div class="stat-counter" data-target="167">0</div>
                <h6 class="fw-semibold">Jurnal Q1</h6>
                <small>Scopus & WoS</small>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mb-4" data-aos="zoom-in" data-aos-delay="300">
                <div class="stat-counter" data-target="245">0</div>
                <h6 class="fw-semibold">Jurnal Q2</h6>
                <small>High Impact</small>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mb-4" data-aos="zoom-in" data-aos-delay="400">
                <div class="stat-counter" data-target="1247">0</div>
                <h6 class="fw-semibold">Total Klien</h6>
                <small>Puas & Berulang</small>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mb-4" data-aos="zoom-in" data-aos-delay="500">
                <div class="stat-counter" data-target="89">0</div>
                <h6 class="fw-semibold">Countries</h6>
                <small>Impact Global</small>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mb-4" data-aos="zoom-in" data-aos-delay="600">
                <div class="stat-counter" data-target="15743">0</div>
                <h6 class="fw-semibold">Total Citations</h6>
                <small>Article Citations</small>
            </div>
        </div>
        
        <div class="text-center mt-5">
            <p class="lead mb-0" data-aos="fade-up">🔥 <strong>Update Terakhir:</strong> 2 artikel baru published hari ini!</p>
        </div>
    </div>
</section> --}}

<!-- Recent Success -->
<section class="section-padding">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title" data-aos="fade-up">Kesuksesan Terbaru</h2>
            <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">Update terbaru dari klien-klien kami</p>
        </div>
        
        <div class="row">
            <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="badge bg-success me-2">BARU</div>
                            <small class="text-muted">2 hari yang lalu</small>
                        </div>
                        <h6 class="fw-bold">Environmental Science Research</h6>
                        <p class="text-muted mb-2">Published di Journal of Environmental Management (Q1, IF: 6.789)</p>
                        <small class="text-primary">Dr. Andi S. - Universitas Hasanuddin</small>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="badge bg-success me-2">BARU</div>
                            <small class="text-muted">5 hari yang lalu</small>
                        </div>
                        <h6 class="fw-bold">Computer Science AI Research</h6>
                        <p class="text-muted mb-2">Published di IEEE Transactions on Neural Networks (Q1, IF: 14.255)</p>
                        <small class="text-primary">Prof. Maya L. - Institut Teknologi Bandung</small>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="badge bg-primary me-2">HOT</div>
                            <small class="text-muted">1 minggu yang lalu</small>
                        </div>
                        <h6 class="fw-bold">Medical Oncology Study</h6>
                        <p class="text-muted mb-2">Published di Oncotarget (Q2, IF: 5.168)</p>
                        <small class="text-primary">Dr. Rudi P. - RSUP Dr. Sardjito</small>
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
                <h2 class="section-title">Ingin Menjadi Success Story Berikutnya?</h2>
                <p class="lead mb-5">Bergabunglah dengan ratusan peneliti yang telah merasakan kesuksesan publikasi bersama Xornea. Your research deserves global recognition!</p>
                <div class="d-flex flex-column flex-md-row gap-3 justify-content-center">
                    <a href="{{ url('/contact') }}" class="btn btn-primary btn-lg">
                        <i class="fas fa-rocket me-2"></i>Mulai Success Story Saya
                    </a>
                    <a href="{{ url('/testimonials') }}" class="btn btn-outline-primary btn-lg">
                        <i class="fas fa-quote-left me-2"></i>Baca Testimoni Lengkap
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
