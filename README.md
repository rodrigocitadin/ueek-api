# UEEK Connect

para rodar o projeto, ira precisar do PHP8, Laravel, e Sqlite (talvez precise do php-sqlite também)

primeiro, clone o repo

```bash
git clone https://github.com/rodrigocitadin/ueek=api
```

```bash
cd ueek
```

Instale as dependencias

```bash
composer install
```

clone o .env

```bash
cp .env.example .env
```

rode as migrations

```bash
php artisan migrate --seed
```

Rode o projeto

```bash
php artisan serve
```

## Como usar

basta entrar no link `localhost:3000` no seu browser
