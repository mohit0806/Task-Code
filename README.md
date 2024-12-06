1. Edit .env.example to .env
2. run command php artisan migrate --path=database/migrations/2024_12_06_190617_create_roles_table.php
3. then run command php artisan migrate
4. run seeder with php artisan db:seed --class=RoleSeeder
