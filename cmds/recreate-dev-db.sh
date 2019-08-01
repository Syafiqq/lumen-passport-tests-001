#!/usr/bin/env bash
rm db.sqlite || true
touch db.sqlite
php artisan passport:keys --force
php artisan migrate --seed
