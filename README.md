[![StackHawk](https://github.com/fdlmhmd29/forum/actions/workflows/stackhawk-analysis.yml/badge.svg?branch=main)](https://github.com/fdlmhmd29/forum/actions/workflows/stackhawk-analysis.yml)

## Specs that I used.
- Windows 11
- Laragon
- PHP 8
- Laravel 8
- Apache24
- MySQL 5.7.33

## VS Code Plugins
- Auto Close Tag
- EditorConfig for VS Code
- GitLens
- Laravel Blade (amirmarmul)
- Laravel Blade Formatter (Shuhei Hayashibara)
- Laravel Blade Spacer (Austen Cameron)
- Laravel Extra Intellisense (amir)
- Laravel goto view (codngyu)
- Laravel-goto-components (nooray)
- Laravel-goto-controller (stef-k)
- PHP Intelephense (Ben Mewburn)
- PHP Namespacer Resolver (Mehedi Hassan)
- Tailwind CSS Intellisense (Brad Cornes)

## How to Start?

To start working with this repository is:

### 1. Install the Vendor:
```php
composer install
```
### 2. Install the NPM Packages:
```php
yarn && yarn dev
```
### 3. Turn on your Laragon
### 4. Create a new Database in *phpMyAdmin*
### 5. Make a migration in your terminal
```injectablephp
php artisan migrate:fresh --seed
```
### 6. Run your local dev
```phpregexp
php artisan serve
```
