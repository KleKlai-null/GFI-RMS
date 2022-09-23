!# /bin/bash

php artisan optimize
php artisan view:clear
php artisan cache:clear