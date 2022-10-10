# Faker
* Faker là thư viện php tạo dữ liệu giả cho bạn.
* Cài đăt: Faker yêu cầu phiên bản PHP >= 7.1.

cài đặt:
```php
    composer require fakerphp/faker
```
* cách sử dụng:
Faker hỗ trợ cả PSR-0 dưới dạng PSR-4 autoloaders.
```php
     <?php
    # Khi được cài đặt thông qua composer
    require_once 'vendor/autoload.php';

```
* Tạo dự liệu giả:
```php
// Sử dụng Factory để tạo Faker\Generator
$faker = Faker\Factory::create();

// Tạo dữ liệu bằng cách truy cập thuộc tính
echo $faker->name;
  // 'John Henry';
echo $faker->address;
  // "426 Jordy Lodgen"
echo $faker->text;
  // Fuga deserunt tempora facere magni omnis. Omnis quia temporibus laudantium
  // sit minima sint.
```