API Özellikleri ve Gereksinimleri
Tur Oluşturma (Create)
Yeni bir tur eklemek için bir endpoint eklendi.
Gereken alanlar:
Tur Adı: Turu tanımlayan başlık.
Açıklama: Tur hakkında detaylı bilgi.
Konum: Turun düzenleneceği yer.
Başlangıç ve Bitiş Tarihleri: Turun geçerli olduğu tarih aralığı.
Fiyat: Turun ücreti.

Tur Listeleme (Read)
Tüm turları listelemek için bir endpoint oluşturuldu.
Belirli bir tarih aralığına göre turları filtreleme özelliği eklendi.

Tur Güncelleme (Update)
Mevcut bir turun detaylarını güncellemek için bir endpoint eklendi.

Tur Silme (Delete)
Belirli bir turu sistemden silmek için bir endpoint oluşturuldu.

Opsiyonel Gereksinimler

Kullanıcı Yönetimi
Tur Operatörleri: Sisteme tur operatörü olarak kullanıcı eklenebilir.
Kullanıcılar yalnızca kendilerine ait turları yönetebilir.
Basit bir yetkilendirme mekanizması uygulandı.
Güvenlik
API isteklerinde API token doğrulaması yapılmaktadır.
Token başına ID eklenmesi:
Büyük veri optimizasyonu ve arama işlemlerinin hızlandırılması amacıyla yapılmıştır.
Numeric alanlar üzerinde arama işlemleri bu yöntemle daha performanslı hale getirilmiştir.
Teknik Gereksinimler
Laravel Kullanımı
Routing, Controllers, Eloquent ORM, ve Migrations kullanılarak API geliştirildi.
Laravel migrations ile veritabanı şeması oluşturuldu.
Veritabanı Seçenekleri
MySQL, PostgreSQL veya SQLite desteklenmektedir.

Proje kurulumu sonrası veritabanı bağlantı ayarları için .env dosyasını aşağıdaki gibi düzenleyin:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tour_project
DB_USERNAME=root
DB_PASSWORD=secret

Kurulum Talimatları
Proje dosyasını indirip çalışma ortamınıza alın.
Gerekli bağımlılıkları yüklemek için aşağıdaki komutu çalıştırın:
composer install

Sanctum Kurulumu (Sanctum yüklü değilse):

php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
php artisan migrate

Şifreleme ve Token İşlemleri
Kayıt (Register):
Şifreler hashlenerek kaydedilir.
Kayıt işlemi sonrası kullanıcıya bir token geri döner.
Diğer işlemler CRUD operasyonları üzerinden gerçekleştirilir.
