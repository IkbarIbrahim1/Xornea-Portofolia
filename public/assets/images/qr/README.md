# QR Code Images untuk Contact Page

## 📱 QR Code yang Dibutuhkan

Berdasarkan gambar yang diberikan user, halaman contact membutuhkan QR Code untuk WhatsApp yang mengarah ke:

### 1. QR Code WhatsApp Gabungan

-   **File name**: `qr_whatsapp_xornea.png`
-   **Fungsi**: QR code yang bisa redirect ke salah satu nomor WhatsApp
-   **Target URL**: Bisa ke grup WhatsApp atau landing page dengan pilihan kontak

### 2. QR Code Individual (Opsional)

-   **File name**: `qr_bambang.png` - untuk 085643219215
-   **File name**: `qr_hary.png` - untuk 085977590959

## 🔧 Cara Generate QR Code

### Manual:

1. Kunjungi: https://www.qr-code-generator.com/
2. Pilih "WhatsApp"
3. Masukkan nomor: +6285643219215 atau +6285977590959
4. Tambahkan pesan default (opsional)
5. Download sebagai PNG high resolution

### Dengan Pesan Pre-filled:

-   URL untuk Bambang: `https://wa.me/6285643219215?text=Halo%20Bambang,%20saya%20tertarik%20dengan%20layanan%20publikasi%20jurnal%20Xornea.%20Mohon%20informasi%20lebih%20lanjut.`
-   URL untuk Hary: `https://wa.me/6285977590959?text=Halo%20Hary,%20saya%20tertarik%20dengan%20layanan%20publikasi%20jurnal%20Xornea.%20Mohon%20informasi%20lebih%20lanjut.`

## 📁 Lokasi File

Upload QR code image ke:

```
public/assets/images/qr/
├── qr_whatsapp_xornea.png    # QR code utama
├── qr_bambang.png            # QR khusus Bambang
└── qr_hary.png               # QR khusus Hary
```

## 🎨 Spesifikasi QR Code

-   **Format**: PNG dengan background putih
-   **Ukuran**: 300x300px (minimal) hingga 600x600px
-   **Quality**: High resolution untuk scanning yang mudah
-   **Border**: White border minimal 4 modules
-   **Error Correction**: Level M (Medium) - 15% damage tolerance

## 🔄 Update Template

Setelah QR code di-upload, update di `contact.blade.php`:

```html
<!-- Ganti placeholder dengan image sesungguhnya -->
<img
    src="{{ asset('assets/images/qr/qr_whatsapp_xornea.png') }}"
    alt="QR Code WhatsApp Xornea"
    class="img-fluid"
    style="max-width: 200px;"
/>
```

## ✅ Testing Checklist

-   [ ] QR code dapat di-scan dengan smartphone
-   [ ] Redirect ke WhatsApp dengan nomor yang benar
-   [ ] Pesan pre-filled muncul (jika ada)
-   [ ] Image loading dengan baik di website
-   [ ] Responsive di berbagai device

Saat ini QR code menggunakan placeholder, silakan upload QR code asli untuk aktivasi fitur penuh.
