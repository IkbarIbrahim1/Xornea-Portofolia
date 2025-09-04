# Deploy Laravel ke Vercel - Panduan Lengkap

## Prasyarat
1. Akun GitHub yang sudah terhubung dengan repository
2. Akun Vercel (bisa sign up dengan GitHub)
3. Repository sudah di-push ke GitHub

## Langkah 1: Persiapan Repository
```bash
# Pastikan semua file sudah di-commit dan push
git add .
git commit -m "Prepare for Vercel deployment"
git push origin main
```

## Langkah 2: Setup di Vercel
1. Buka https://vercel.com
2. Login dengan akun GitHub
3. Klik "New Project"
4. Import repository "Xornea-Portofolia"
5. Pilih Framework Preset: "Other"

## Langkah 3: Environment Variables
Di dashboard Vercel, tambahkan environment variables:

### Required Variables:
- `APP_NAME` = "Xornea Portfolio"
- `APP_ENV` = "production"
- `APP_KEY` = (generate dengan: php artisan key:generate --show)
- `APP_DEBUG` = "false"
- `APP_URL` = (akan diberikan Vercel, contoh: https://yourapp.vercel.app)

### Database (SQLite):
- `DB_CONNECTION` = "sqlite"
- `DB_DATABASE` = "/tmp/database.sqlite"

### Cache & Session:
- `CACHE_DRIVER` = "array"
- `SESSION_DRIVER` = "cookie"
- `LOG_CHANNEL` = "stderr"

## Langkah 4: Build Commands (Set di Vercel)
- **Build Command**: `composer install --no-dev && npm run vercel-build && composer run vercel-build`
- **Output Directory**: `public`
- **Install Command**: `npm install`

## Langkah 5: Deploy
1. Klik "Deploy"
2. Tunggu proses build selesai
3. Test website di URL yang diberikan

## Langkah 6: Custom Domain (Opsional)
1. Di dashboard Vercel, pilih project
2. Klik "Settings" > "Domains"
3. Tambahkan domain custom
4. Update DNS sesuai instruksi Vercel

## Troubleshooting

### Jika build gagal:
1. Check logs di Vercel dashboard
2. Pastikan semua environment variables sudah benar
3. Cek apakah ada error di composer.json atau package.json

### Jika website tidak load:
1. Check environment variables
2. Pastikan APP_KEY sudah di-generate
3. Check logs di Vercel dashboard

### Untuk update:
1. Push perubahan ke GitHub
2. Vercel akan auto-deploy secara otomatis

## Commands yang Berguna

### Generate APP_KEY:
```bash
php artisan key:generate --show
```

### Test local sebelum deploy:
```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan serve
```

### Clear cache jika diperlukan:
```bash
php artisan config:clear
php artisan route:clear
php artisan view:clear
```

## File Penting yang Sudah Dibuat:
- `vercel.json` - Konfigurasi deployment
- `api/index.php` - Entry point untuk serverless
- `.vercelignore` - File yang diabaikan saat deploy
- `.env.production` - Environment variables template

## Catatan Penting:
1. Database SQLite akan reset setiap deployment (gunakan external DB untuk production)
2. File upload tidak persisten (gunakan external storage seperti S3)
3. Cache akan reset setiap cold start
4. Logs hanya tersedia di Vercel dashboard
