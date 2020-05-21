## CowManagementSystem 奶牛管理系统

> 简单的对奶牛增删改查

* php 7.4.6
* Composer 1.10.6
* Laravel 3.0.1

### 说明
~~首次运行~~ `composer install` <br/>
~~创建迁移~~ `php artisan make:migration create_cow_table` <br/>
~~初始化数据库~~ `php artisan migrate` <br/>
~~生成Seeder~~ `php artisan make:seeder CowSeeder` <br/>
`composer dump-autoload` <br/>
~~填充数据~~ `php artisan db:seed --class=CowSeeder` <br/>
项目运行 `php artisan serve`
