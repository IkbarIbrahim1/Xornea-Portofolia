@extends('layouts.app')

@section('title', 'Kontak Xornea - Get In Touch with Our Expert Team')

@section('content')
<!-- Hero Section -->
<section class="hero-section position-relative overflow-hidden">
    <div class="container">
        <div class="row align-items-center min-vh-60">
            <div class="col-12 col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                <h1 class="display-4 display-md-3 fw-bold mb-4 text-center text-lg-start">Kontak & Mulai Sekarang</h1>
                <p class="lead text-center text-lg-start mb-4">Siap memulai perjalanan publikasi Anda? Hubungi tim expert kami dan dapatkan konsultasi gratis!</p>
                
                <!-- Quick Contact Options -->
                <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center justify-content-lg-start">
                    <a href="https://wa.me/6285643219215" class="btn btn-success btn-lg pulse" target="_blank">
                        <i class="fab fa-whatsapp me-2"></i>WhatsApp Langsung
                    </a>
                </div>
            </div>
            <div class="col-12 col-lg-6" data-aos="fade-left">
                <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?w=600&h=400&fit=crop" 
                         alt="Contact Us" class="img-fluid rounded-4 shadow-lg w-100">
                </div>
            </div>
        </div>
    </div>
    
    <!-- Background elements -->
    <div class="position-absolute top-0 start-0 w-100 h-100 overflow-hidden" style="z-index: -1;">
        <div class="floating-shape bg-success opacity-10 rounded-circle position-absolute animate-float-slow" 
             style="width: 140px; height: 140px; top: 15%; right: 20%;"></div>
        <div class="floating-shape bg-primary opacity-10 rounded-circle position-absolute animate-float-reverse" 
             style="width: 100px; height: 100px; bottom: 25%; left: 15%;"></div>
    </div>
</section>

<!-- Contact Information -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title" data-aos="fade-up">Hubungi Kami</h2>
            <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">Berbagai cara untuk terhubung dengan tim Xornea</p>
        </div>
        
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card b  order-0 shadow-lg h-100 text-center p-4">
                    <div class="feature-icon text-success">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <h4 class="fw-bold mb-3">WhatsApp</h4>
                    <p class="text-muted mb-4">Respon tercepat untuk konsultasi langsung</p>
                    <h5 class="fw-bold text-primary mb-3">+62 856-4321-9215</h5>
                    <p class="small text-muted mb-4">Online 24/7 | Respon < 1 menit</p>
                    <a href="https://wa.me/6285643219215" class="btn btn-success w-100" target="_blank">
                        <i class="fab fa-whatsapp me-2"></i>Chat WhatsApp
                    </a>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card border-0 shadow-lg h-100 text-center p-4">
                    <div class="feature-icon text-primary">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Email</h4>
                    <p class="text-muted mb-4">Untuk konsultasi detail dan proposal</p>
                    <h5 class="fw-bold text-primary mb-3">info@xornea.com</h5>
                    <p class="small text-muted mb-4">Respon dalam 2-4 jam</p>
                    <a href="mailto:info@xornea.com" class="btn btn-primary w-100">
                        <i class="fas fa-envelope me-2"></i>Kirim Email
                    </a>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card border-0 shadow-lg h-100 text-center p-4">
                    <div class="feature-icon text-danger">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Instagram</h4>
                    <p class="text-muted mb-4">Untuk konsultasi via instagram</p>
                    <h5 class="fw-bold text-primary mb-3">xornea.id</h5>
                    <p class="small text-muted mb-4">Online 24/7 | Respon < 1 menit</p>
                    <a href="https://www.instagram.com/xornea.id/?__pwa=1" class="btn btn-danger w-100">
                        <i class="fas fa-phone me-2"></i>Chat Instagram
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Formulir Kontak Cepat -->
<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card border-0 shadow-lg" data-aos="fade-up">
                    <div class="card-body p-5">
                        <div class="text-center mb-5">
                            <h3 class="fw-bold mb-3">Formulir Konsultasi Gratis</h3>
                            <p class="text-muted">Isi form di bawah ini dan dapatkan respon dalam 1 jam!</p>
                        </div>
                        
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="name" class="form-label">Nama Lengkap *</label>
                                    <input type="text" class="form-control form-control-lg" id="name" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Email *</label>
                                    <input type="email" class="form-control form-control-lg" id="email" required>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="phone" class="form-label">Nomor WhatsApp *</label>
                                    <input type="tel" class="form-control form-control-lg" id="phone" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="institution" class="form-label">Institusi/Universitas</label>
                                    <input type="text" class="form-control form-control-lg" id="institution">
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="service_category" class="form-label">Kategori Layanan *</label>
                                    <select class="form-select form-select-lg" id="service_category" required onchange="updateServiceOptions()">
                                        <option value="">Pilih kategori layanan</option>
                                        <option value="non_sinta">Non Sinta</option>
                                        <option value="international">International</option>
                                        <option value="sinta_6_5">Sinta 6 - 5</option>
                                        <option value="sinta_4">Sinta 4</option>
                                        <option value="sinta_3">Sinta 3</option>
                                        <option value="sinta_2">Sinta 2</option>
                                        <option value="sinta_1">Sinta 1</option>
                                        <option value="scopus">Scopus</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="service_type" class="form-label">Jenis Layanan *</label>
                                    <select class="form-select form-select-lg" id="service_type" required onchange="updatePrice()">
                                        <option value="">Pilih jenis layanan</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="price_display" class="form-label">Estimasi Harga</label>
                                    <div class="input-group">
                                        <span class="input-group-text">Rp</span>
                                        <input type="text" class="form-control form-control-lg bg-light" id="price_display" readonly placeholder="Pilih layanan terlebih dahulu">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="timeline" class="form-label">Timeline yang Diharapkan</label>
                                    <select class="form-select form-select-lg" id="timeline">
                                        <option value="">Pilih timeline (opsional)</option>
                                        <option value="urgent">Urgent (< 1 bulan)</option>
                                        <option value="normal">Normal (1-3 bulan)</option>
                                        <option value="flexible">Flexible (> 3 bulan)</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="field" class="form-label">Bidang Penelitian</label>
                                <select class="form-select form-select-lg" id="field">
                                    <option value="">Pilih bidang penelitian (opsional)</option>
                                    <option value="engineering">Engineering & Technology</option>
                                    <option value="medical">Medical & Health Sciences</option>
                                    <option value="science">Natural Sciences</option>
                                    <option value="social">Social Sciences</option>
                                    <option value="humanities">Arts & Humanities</option>
                                    <option value="business">Business & Economics</option>
                                    <option value="education">Education</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            
                            <div class="mb-4">
                                <label for="message" class="form-label">Ceritakan tentang Penelitian Anda</label>
                                <textarea class="form-control" id="message" rows="4" placeholder="Deskripsikan topik penelitian, data yang Anda miliki, dan tantangan yang dihadapi..."></textarea>
                            </div>
                            
                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" id="agreement" required>
                                <label class="form-check-label" for="agreement">
                                    Saya setuju untuk dihubungi oleh tim Xornea dan menerima informasi terkait layanan *
                                </label>
                            </div>
                            
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class="fab fa-whatsapp me-2"></i>Kirim ke WhatsApp & Dapatkan Konsultasi
                                </button>
                                <small class="text-muted text-center">Otomatis akan diarahkan ke WhatsApp dengan detail layanan</small>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
// Data harga berdasarkan gambar
const serviceData = {
    'non_sinta': {
        'jalur_darat': { name: 'Jalur Darat', price: 200000 },
        'jalur_langit': { name: 'Jalur Langit', price: 400000 }
    },
    'international': {
        'jalur_darat': { name: 'Jalur Darat', price: 500000 },
        'jalur_langit': { name: 'Jalur Langit', price: 1000000 }
    },
    'sinta_6_5': {
        'jalur_darat': { name: 'Jalur Darat', price: 500000 },
        'jalur_langit': { name: 'Jalur Langit', price: 1000000 }
    },
    'sinta_4': {
        'jalur_darat': { name: 'Jalur Darat', price: 1500000 },
        'jalur_langit': { name: 'Jalur Langit', price: 2000000 }
    },
    'sinta_3': {
        'jalur_darat': { name: 'Jalur Darat', price: 2000000 },
        'jalur_langit': { name: 'Jalur Langit', price: 3000000 }
    },
    'sinta_2': {
        'jalur_darat': { name: 'Jalur Darat', price: 9000000 },
        'jalur_langit': { name: 'Jalur Langit', price: 11000000 }
    },
    'sinta_1': {
        'jalur_darat': { name: 'Jalur Darat', price: 17000000 },
        'jalur_langit': { name: 'Jalur Langit', price: 20000000 }
    },
    'scopus': {
        'q5_darat': { name: 'Q5 - Jalur Darat', price: 25000000 },
        'q5_langit': { name: 'Q5 - Jalur Langit', price: 33000000 }
    }
};

function updateServiceOptions() {
    const category = document.getElementById('service_category').value;
    const serviceTypeSelect = document.getElementById('service_type');
    const priceDisplay = document.getElementById('price_display');
    
    // Clear previous options
    serviceTypeSelect.innerHTML = '<option value="">Pilih jenis layanan</option>';
    priceDisplay.value = '';
    
    if (category && serviceData[category]) {
        Object.keys(serviceData[category]).forEach(key => {
            const option = document.createElement('option');
            option.value = key;
            option.textContent = serviceData[category][key].name;
            serviceTypeSelect.appendChild(option);
        });
    }
}

function updatePrice() {
    const category = document.getElementById('service_category').value;
    const serviceType = document.getElementById('service_type').value;
    const priceDisplay = document.getElementById('price_display');
    
    if (category && serviceType && serviceData[category] && serviceData[category][serviceType]) {
        const price = serviceData[category][serviceType].price;
        priceDisplay.value = new Intl.NumberFormat('id-ID').format(price);
    } else {
        priceDisplay.value = '';
    }
}

// Handle form submission
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const phone = document.getElementById('phone').value;
    const institution = document.getElementById('institution').value;
    const category = document.getElementById('service_category').value;
    const serviceType = document.getElementById('service_type').value;
    const field = document.getElementById('field').value;
    const timeline = document.getElementById('timeline').value;
    const message = document.getElementById('message').value;
    
    // Validation
    if (!name || !email || !phone || !category || !serviceType) {
        alert('Mohon lengkapi semua field yang wajib diisi (*)');
        return;
    }
    
    // Get service details
    const categoryName = document.getElementById('service_category').options[document.getElementById('service_category').selectedIndex].text;
    const serviceName = serviceData[category][serviceType].name;
    const price = serviceData[category][serviceType].price;
    const formattedPrice = new Intl.NumberFormat('id-ID').format(price);
    
    // Create WhatsApp message
    let waMessage = `🎓 *KONSULTASI XORNEA - PUBLIKASI JURNAL* 🎓\n\n`;
    waMessage += `👤 *Data Diri:*\n`;
    waMessage += `• Nama: ${name}\n`;
    waMessage += `• Email: ${email}\n`;
    waMessage += `• WhatsApp: ${phone}\n`;
    if (institution) waMessage += `• Institusi: ${institution}\n`;
    
    waMessage += `\n📋 *Detail Layanan:*\n`;
    waMessage += `• Kategori: ${categoryName}\n`;
    waMessage += `• Jenis Layanan: ${serviceName}\n`;
    waMessage += `• Estimasi Harga: Rp ${formattedPrice}\n`;
    
    if (field) {
        const fieldName = document.getElementById('field').options[document.getElementById('field').selectedIndex].text;
        waMessage += `• Bidang Penelitian: ${fieldName}\n`;
    }
    
    if (timeline) {
        const timelineName = document.getElementById('timeline').options[document.getElementById('timeline').selectedIndex].text;
        waMessage += `• Timeline: ${timelineName}\n`;
    }
    
    if (message) {
        waMessage += `\n💬 *Pesan Tambahan:*\n${message}\n`;
    }
    
    waMessage += `\n🎯 *Khusus Daerah Surabaya, Gresik, Madura: FREE KONSULTASI!*\n`;
    waMessage += `\n📞 Mohon konfirmasi ketersediaan dan detail lebih lanjut.\n`;
    waMessage += `\nTerima kasih! 🙏`;
    
    // Encode message for URL
    const encodedMessage = encodeURIComponent(waMessage);
    
    // WhatsApp numbers from the image
    const waNumbers = ['6285643219215', '6285977590959']; // Bambang and Hary
    const selectedNumber = waNumbers[0]; // Default to Bambang
    
    // Open WhatsApp
    const waUrl = `https://wa.me/${selectedNumber}?text=${encodedMessage}`;
    window.open(waUrl, '_blank');
    
    // Show success message
    alert('Formulir berhasil dikirim! Anda akan diarahkan ke WhatsApp untuk konsultasi langsung.');
});
</script>

<!-- Kontak Langsung Tim Expert -->
<section class="section-padding">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title" data-aos="fade-up">Kontak Langsung Tim Expert</h2>
            <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">Hubungi langsung expert kami untuk konsultasi khusus daerah Surabaya, Gresik, Madura</p>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card border-0 shadow-lg h-100 text-center p-4">
                    <div class="feature-icon text-primary mx-auto mb-3">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h4 class="fw-bold mb-3">BAMBANG</h4>
                    <p class="text-muted mb-4">Senior Publication Expert</p>
                    <h5 class="fw-bold text-primary mb-3">085643219215</h5>
                    <p class="small text-muted mb-4">Spesialis: Sinta & International Journals</p>
                    <a href="https://wa.me/6285643219215" class="btn btn-success w-100 mb-2" target="_blank">
                        <i class="fab fa-whatsapp me-2"></i>Chat BAMBANG
                    </a>
                    <small class="text-muted">Response time: < 30 menit</small>
                </div>
            </div>
            
            <div class="col-lg-6 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card border-0 shadow-lg h-100 text-center p-4">
                    <div class="feature-icon text-warning mx-auto mb-3">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h4 class="fw-bold mb-3">HARY</h4>
                    <p class="text-muted mb-4">Research Publication Consultant</p>
                    <h5 class="fw-bold text-primary mb-3">085977590959</h5>
                    <p class="small text-muted mb-4">Spesialis: Scopus & High Impact Journals</p>
                    <a href="https://wa.me/6285977590959" class="btn btn-success w-100 mb-2" target="_blank">
                        <i class="fab fa-whatsapp me-2"></i>Chat HARY
                    </a>
                    <small class="text-muted">Response time: < 30 menit</small>
                </div>
            </div>
        </div>
        
        <!-- FREE Konsultasi Banner -->
        <div class="row mt-5">
            <div class="col-12" data-aos="fade-up">
                <div class="alert alert-danger d-flex align-items-center justify-content-center p-4 border-0 shadow" style="background: linear-gradient(135deg, #dc3545, #c82333); color: white;">
                    <div class="text-center">
                        <h4 class="fw-bold mb-2">
                            <i class="fas fa-gift me-2"></i>FREE KONSULTASI
                        </h4>
                        <h5 class="mb-2">Khusus Daerah Surabaya, Gresik, Madura</h5>
                        <p class="mb-0">Dapatkan konsultasi gratis untuk peneliti di wilayah Surabaya, Gresik, dan Madura!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- CTA Besar -->
<section class="section-padding bg-primary text-white">
    <div class="container">
        <div class="text-center">
            <div class="row justify-content-center">
                <div class="col-lg-10" data-aos="zoom-in">
                    <h1 class="display-4 fw-bold mb-4">Mulai Perjalanan Publikasimu Bersama Xornea Hari Ini</h1>
                    <p class="lead mb-5">Jangan biarkan penelitian hebat Anda terkubur. Saatnya dunia mengenal karya akademik terbaik Indonesia!</p>
                    
                    <div class="d-flex flex-column flex-lg-row gap-3 justify-content-center align-items-center">
                        <a href="https://wa.me/6281234567890" class="btn btn-light btn-lg" target="_blank">
                            <i class="fab fa-whatsapp me-2"></i>WhatsApp Sekarang
                        </a>
                        <a href="tel:+622156789012" class="btn btn-outline-light btn-lg">
                            <i class="fas fa-phone me-2"></i>Telepon Langsung
                        </a>
                        <a href="#contactForm" class="btn btn-outline-light btn-lg">
                            <i class="fas fa-form me-2"></i>Isi Form Konsultasi
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map & Office Location (Optional) -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title" data-aos="fade-up">Lokasi & Kantor</h2>
            <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">Meskipun layanan kami fully online, Anda bisa visit office kami</p>
        </div>
        
        <div class="row">
            <div class="col-lg-6 mb-4" data-aos="fade-right">
                <div class="card border-0 shadow h-100 p-4">
                    <h4 class="fw-bold mb-4">Kantor Pusat Jakarta</h4>
                    <div class="mb-3">
                        <i class="fas fa-map-marker-alt text-primary me-3"></i>
                        <span>Menara Rajawali Lt. 15<br>Jl. Dr. Ide Anak Agung Gde Agung Blok 5.6<br>Kuningan, Jakarta Selatan 12950</span>
                    </div>
                    <div class="mb-3">
                        <i class="fas fa-clock text-primary me-3"></i>
                        <span>Senin - Jumat: 09:00 - 17:00 WIB<br>*By appointment only</span>
                    </div>
                    <div class="mb-4">
                        <i class="fas fa-phone text-primary me-3"></i>
                        <span>021-5678-9012</span>
                    </div>
                    <a href="https://maps.google.com" class="btn btn-outline-primary w-100" target="_blank">
                        <i class="fas fa-directions me-2"></i>Lihat di Google Maps
                    </a>
                </div>
            </div>
            
            <div class="col-lg-6 mb-4" data-aos="fade-left">
                <div class="card border-0 shadow h-100">
                    <div class="ratio ratio-16x9">
                        <div class="bg-light d-flex align-items-center justify-content-center rounded">
                            <div class="text-center p-4">
                                <i class="fas fa-map fs-1 text-muted mb-3"></i>
                                <h5 class="text-muted">Interactive Map</h5>
                                <p class="text-muted">Map integration will be available soon</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    // Contact form submission
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Get form data
        const formData = new FormData(this);
        const data = Object.fromEntries(formData);
        
        // Show loading
        const submitBtn = this.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerHTML;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Mengirim...';
        submitBtn.disabled = true;
        
        // Simulate API call
        setTimeout(() => {
            // Show success message
            Swal.fire({
                icon: 'success',
                title: 'Formulir Berhasil Dikirim!',
                html: `
                    <p>Terima kasih <strong>${data.name}</strong>!</p>
                    <p>Tim kami akan menghubungi Anda melalui WhatsApp <strong>${data.phone}</strong> dalam 1 jam ke depan.</p>
                    <p>Siapkan diri untuk konsultasi gratis dengan expert kami! 🚀</p>
                `,
                confirmButtonColor: '#2563eb',
                confirmButtonText: 'Siap!'
            }).then(() => {
                // Redirect to WhatsApp
                const message = `Halo, saya ${data.name} baru saja mengisi form konsultasi di website Xornea untuk layanan ${data.service}. Mohon bantuannya untuk konsultasi lebih lanjut.`;
                window.open(`https://wa.me/6281234567890?text=${encodeURIComponent(message)}`, '_blank');
            });
            
            // Reset form
            this.reset();
            submitBtn.innerHTML = originalText;
            submitBtn.disabled = false;
        }, 2000);
    });
    
    // Real-time status update
    function updateStatus() {
        const statusElements = {
            online: document.querySelector('.badge.bg-success'),
            experts: document.querySelector('.badge.bg-success').nextElementSibling,
            responseTime: document.querySelector('.h4.text-primary'),
            queue: document.querySelector('.h4.text-warning')
        };
        
        // Simulate real-time updates
        const experts = Math.floor(Math.random() * 5) + 2;
        const responseTime = Math.floor(Math.random() * 10) + 1;
        const queue = Math.floor(Math.random() * 5);
        
        if (statusElements.experts) {
            statusElements.experts.textContent = `${experts} Expert Available`;
        }
        if (statusElements.responseTime) {
            statusElements.responseTime.textContent = `< ${responseTime} menit`;
        }
        if (statusElements.queue) {
            statusElements.queue.textContent = `${queue} orang`;
        }
    }
    
    // Update status every 30 seconds
    setInterval(updateStatus, 30000);
    
    // Referral program
    function openReferralProgram() {
        Swal.fire({
            title: 'Program Referral Xornea',
            html: `
                <div class="text-start">
                    <p><strong>Cara Kerja:</strong></p>
                    <ol>
                        <li>Share link referral atau mention nama Anda</li>
                        <li>Teman menggunakan layanan Xornea</li>
                        <li>Anda dan teman mendapat benefit!</li>
                    </ol>
                    <p class="mt-3"><strong>Link Referral Anda:</strong></p>
                    <input type="text" class="form-control" value="https://xornea.com/ref/YOUR_CODE" readonly>
                </div>
            `,
            showCancelButton: true,
            confirmButtonText: 'Copy Link',
            cancelButtonText: 'Tutup',
            confirmButtonColor: '#2563eb'
        }).then((result) => {
            if (result.isConfirmed) {
                navigator.clipboard.writeText('https://xornea.com/ref/YOUR_CODE');
                Swal.fire('Link Copied!', 'Link referral berhasil disalin. Share sekarang!', 'success');
            }
        });
    }
    
    // Affiliate program
    function openAffiliateProgram() {
        Swal.fire({
            title: 'Program Afiliasi Xornea',
            html: `
                <div class="text-start">
                    <p><strong>Requirements:</strong></p>
                    <ul>
                        <li>Memiliki network di bidang akademik</li>
                        <li>Aktif di media sosial atau platform digital</li>
                        <li>Berkomitmen untuk long-term partnership</li>
                    </ul>
                    <p class="mt-3">Tim kami akan menghubungi Anda untuk interview dan setup affiliate account.</p>
                </div>
            `,
            showCancelButton: true,
            confirmButtonText: 'Apply Now',
            cancelButtonText: 'Nanti Saja',
            confirmButtonColor: '#f59e0b'
        }).then((result) => {
            if (result.isConfirmed) {
                window.open('https://wa.me/6281234567890?text=Halo, saya tertarik untuk join program afiliasi Xornea. Mohon informasi lebih lanjut.', '_blank');
            }
        });
    }
    
    // Smooth scroll to contact form
    document.querySelectorAll('a[href="#contactForm"]').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            document.getElementById('contactForm').scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        });
    });
</script>

<!-- SweetAlert for better UX -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection
