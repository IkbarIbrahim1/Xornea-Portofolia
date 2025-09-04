# Xornea - Website Portofolio Layanan Publikasi Akademik

Website portofolio untuk Xornea, platform layanan publikasi jurnal akademik yang membantu peneliti Indonesia mempublikasikan karya mereka di jurnal bereputasi internasional.

## 🚀 Fitur Utama

### 7 Halaman Utama:

1. **Beranda (Home)** - Hero section dengan headline, statistik bergerak, dan keunggulan singkat
2. **Tentang Xornea** - Storytelling, visi misi, nilai-nilai, dan tim expert
3. **Layanan (Services)** - Detail layanan lengkap dengan tabel paket harga
4. **Portofolio & Keberhasilan** - Case study, logo universitas, dan badge reputasi
5. **Testimoni & Komunitas** - Carousel testimoni, video, dan komunitas akademik
6. **Blog, FAQ & Etika** - Blog insights, FAQ interaktif, dan kode etik akademik
7. **Kontak & Aksi** - Formulir kontak, program referral, dan CTA besar

### Teknologi:

-   **Framework**: Laravel 12
-   **Frontend**: Bootstrap 5.3.2, AOS Animation, Font Awesome 6.4.0
-   **Styling**: Custom CSS dengan design system yang konsisten
-   **JavaScript**: Vanilla JS untuk interaktivitas
-   **Icons**: Font Awesome untuk semua ikon
-   **Images**: Unsplash API untuk placeholder images

## 🎨 Design Features

-   **Responsive Design** - Optimal untuk semua device (desktop, tablet, mobile)
-   **Modern UI/UX** - Clean, professional, dan user-friendly
-   **Animation** - AOS (Animate On Scroll) untuk smooth experience
-   **Color Scheme** - Primary blue (#2563eb) dengan accent colors
-   **Typography** - Inter font family untuk readability
-   **Dark/Light Mode** - Light theme dengan good contrast

## ⚡ Fitur Interaktif

-   **Counter Animation** - Statistik bergerak dengan intersection observer
-   **Carousel Testimoni** - Bootstrap carousel dengan kontrol navigasi
-   **FAQ Interaktif** - Search dan filter kategori
-   **Formulir Kontak** - Validasi dan feedback user-friendly
-   **WhatsApp Integration** - Direct link ke WhatsApp business
-   **Newsletter Subscription** - Form subscription dengan SweetAlert
-   **Live Chat Button** - Floating button untuk customer support

## 🛠️ Instalasi & Setup

### Prerequisites

-   PHP 8.1 atau lebih tinggi
-   Composer
-   Node.js (opsional, untuk asset compilation)

### Langkah Instalasi

1. **Clone repository**

    ```bash
    git clone https://github.com/yourusername/xornea-portfolio.git
    cd xornea-portfolio
    ```

2. **Install dependencies**

    ```bash
    composer install
    ```

3. **Setup environment**

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4. **Jalankan development server**

    ```bash
    php artisan serve
    ```

5. **Akses website**
   Buka browser dan kunjungi: `http://127.0.0.1:8000`

## 📁 Struktur Project

```
xornea-portfolio/
├── app/
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php        # Layout utama
│       ├── home.blade.php           # Halaman beranda
│       ├── about.blade.php          # Halaman tentang
│       ├── services.blade.php       # Halaman layanan
│       ├── portfolio.blade.php      # Halaman portofolio
│       ├── testimonials.blade.php   # Halaman testimoni
│       ├── blog.blade.php           # Halaman blog & FAQ
│       └── contact.blade.php        # Halaman kontak
├── routes/
│   └── web.php                      # Route definitions
├── public/
└── README.md
```

## 🎯 Deployment

### Production Setup

1. **Optimize untuk production**

    ```bash
    composer install --no-dev --optimize-autoloader
    php artisan config:cache
    php artisan route:cache
    php artisan view:cache
    ```

2. **Set environment**
    ```bash
    APP_ENV=production
    APP_DEBUG=false
    ```

### Hosting Recommendations

-   **Shared Hosting**: Hostinger, Niagahoster
-   **VPS**: DigitalOcean, Vultr, AWS EC2
-   **Managed**: Laravel Forge, Cloudways

## 🔧 Kustomisasi

### Mengubah Konten

1. Edit file blade template di `resources/views/`
2. Update informasi kontak di `contact.blade.php`
3. Ganti logo dan branding sesuai kebutuhan

### Mengubah Style

1. Edit CSS custom di `layouts/app.blade.php`
2. Sesuaikan color variables di `:root`
3. Update responsive breakpoints jika diperlukan

### Integrasi API

-   **WhatsApp Business API** untuk chat integration
-   **Email Service** (Mailgun, SendGrid) untuk newsletter
-   **Analytics** (Google Analytics, Hotjar) untuk tracking
-   **Form Handler** (Formspree, Netlify Forms) untuk contact form

## 📱 Social Media Integration

Website sudah disiapkan untuk integrasi dengan:

-   WhatsApp Business (+62 812-3456-7890)
-   Email (info@xornea.com)
-   Telegram Community
-   Discord Server
-   Social media sharing buttons

## 🔒 Security Features

-   **CSRF Protection** - Laravel built-in CSRF protection
-   **XSS Prevention** - Blade template escaping
-   **Input Validation** - Form validation rules
-   **Secure Headers** - Security headers configuration
-   **Environment Variables** - Sensitive data protection

## 📊 Analytics & Monitoring

Website siap untuk integrasi:

-   Google Analytics 4
-   Google Search Console
-   Facebook Pixel
-   Hotjar untuk heatmaps
-   Error tracking (Sentry, Bugsnag)

## 🎓 Academic Features

Fitur khusus untuk layanan akademik:

-   **Citation Styles** - Support untuk APA, MLA, Harvard
-   **Journal Database** - Integrasi dengan Scopus, WoS, Sinta
-   **Plagiarism Check** - Mock integration dengan Turnitin
-   **Reference Manager** - Support untuk Mendeley, Zotero
-   **Academic Calendar** - Conference dan call for papers

## 📞 Support & Contact

-   **Website**: [https://xornea.com](https://xornea.com)
-   **WhatsApp**: +62 812-3456-7890
-   **Email**: info@xornea.com
-   **Telegram**: @xorneacommunity
-   **Discord**: https://discord.gg/xornea

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 🙏 Acknowledgments

-   **Laravel Team** untuk framework yang powerful
-   **Bootstrap Team** untuk UI components
-   **Unsplash** untuk high-quality images
-   **Font Awesome** untuk comprehensive icons
-   **AOS Library** untuk smooth animations

---

**Made with ❤️ for Indonesian Researchers by Xornea Team**

> "Where Your Research Finds Its Voice" - Membantu peneliti Indonesia menembus panggung akademik global sejak 2020.
