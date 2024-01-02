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

existem 3 principais rotas para fazer requests

### User

**GET** `localhost:8000/api/user` retorna todos os users

**GET** `localhost:8000/api/user/1` retorna o primeiro user, ou o user com id fornecido

**POST** `localhost:8000/api/user` cria um user, com os dados fornecidos no body:

```json
{
    "name": "teste da ueek",
    "email": "teste@ueek.com",
    "cpf": "00011122244",
    "phone": "4991009100",
    "address": {
        "cep": "88535000",
        "city": "correia pinto",
        "street": "rua das amoras",
        "district": "eucalipto",
        "number": 1440,
        "state": "santa catarina"
    }
}
```

### Numbers

**GET** `localhost:8000/api/numbers` retorna todos os numbers

**GET** `localhost:8000/api/numbers/1` retorna a primeira tabela de numeros, ou a tabela com id fornecido

### Transactions

**GET** `localhost:8000/api/transaction` retorna todos as transactions

**GET** `localhost:8000/api/transaction/1` retorna o primeira transaction, ou a transaction com id fornecido

**POST** `localhost:8000/api/transaction` cria uma transaction, com os dados fornecidos no body:

```json
{
    "selected_numbers": [44, 45, 46],
    "user_id": 1,
    "numbers_id": 1
}
```
