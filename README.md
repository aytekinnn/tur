<p>
Tur Oluşturma (Create): Yeni bir tur eklemek için bir endpoint eklendi. Gerekli bilgiler tur adı, açıklaması, konumu, başlangıç ve bitiş tarihleri, ve tur fiyatı olmalıdır alanları eklendi.

Tur Listeleme (Read): Tüm turları listelemek için bir endpoint eklendi. Ayrıca, belirli bir tarih aralığına göre turları filtreleyebilen bir özellik eklendi.

Tur Güncelleme (Update): Var olan bir turun detaylarını güncellemek için bir endpoint eklendi.

Tur Silme (Delete): Belirli bir turu sistemden silmek için bir endpoint eklendi.

Opsiyonel Gereksinimler
Kullanıcı Yönetimi: Sisteme tur operatörü olarak kullanıcı ekleyebilme ve kullanıcıların yalnızca kendi turlarını yönetebilmelerini sağlayacak basit bir yetkilendirme mekanizması eklendi. <br>
Güvenlik: API isteklerinde basit bir API token doğrulaması yapısını implemente edildi. <br><br>
Teknik Gereksinimler
Laravel'in temel özelliklerini (Routing, Controllers, Eloquent ORM, Migrations) kullanarak API'yi geliştirildi. <br>
Veritabanı olarak MySQL, PostgreSQL veya SQLite kullanın. Laravel migrations kullanarak veritabanı şemasını oluşturuldu.

proje dosyası çekildikten sonra composer install yapmayı unutmayın! 
gereksinimler yüklensin

.env dosyası oluşturun
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tour_project
DB_USERNAME=root
DB_PASSWORD=secret

api için sanctum kurulu değil ise sanctum kurulumu yapın
php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
php artisan migrate

postman ile token gönderilirken token başına id ekleniyor bunun nedeni ise big data da optimizasyon sağlayıp hızlandırmak için numeric alan üzerinde aramaa amacı ile yapılmıştır.

register yaparken şifreler hashlenip kaydediliyor ve token ile geri dönüyor
onun dışındaki tüm işlemler crud işlemleri 

</p>
