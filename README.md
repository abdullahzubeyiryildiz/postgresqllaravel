# PostgreSQL ve Laravel Kullanımı

Bu, PostgreSQL ve Laravel kullanarak oluşturulmuş bir proje örneğidir.

## Gereksinimler

- PHP 7.4 veya daha yeni bir sürüm
- Composer
- PostgreSQL veritabanı

## Kurulum

1. Bu projeyi bilgisayarınıza klonlayın:

4. `.env.example` dosyasını `.env` olarak kopyalayın ve PostgreSQL veritabanı yapılandırmasını ayarlayın:


Tabii, aşağıda bir örnek PostgreSQL ve Laravel projesi için bir README.md dosyası oluşturdum. Bu dosya, GitHub'da projenin ana sayfasında görüntülenebilir ve projenin kullanımı, gereksinimleri ve diğer bilgileri hakkında bilgi sağlar.
 
# Proje Adı

Bu, PostgreSQL ve Laravel kullanarak oluşturulmuş bir proje örneğidir.
  
DB_CONNECTION=pgsql <br>
DB_HOST=127.0.0.1 <br>
DB_PORT=5432 <br>
DB_DATABASE=veritabani_adi <br>
DB_USERNAME=kullanici_adi <br>
DB_PASSWORD=sifre <br>
 <br>
5. Laravel uygulamasını çalıştırmak için aşağıdaki komutları çalıştırın:

php artisan key:generate <br>
php artisan migrate <br>
php artisan serve  

