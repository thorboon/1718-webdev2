---
layout   : default
permalink: deploy/deployment-guide/backoffice/
# Custom Page Variables
# ─────────────────────
title: Backoffice
---

### Configuratie

Verander .env
```
DB_DATABASE = thephonemarket
DB_USERNAME = root
DB_PASSWORD = secret
```

### Initialisatie

```
PS> cd laravel
PS> yarn install / npm install
PS> composer install
PS> artisan migrate --seed
PS> artisan key: generate
PS> artisan serve
```

### API
na artisan serve

- 127.0.0.1:8000/api/auctions
- 127.0.0.1:8000/api/users
- 127.0.0.1:8000/api/categories

### TEST GEBRUIKER

- test@example.com
- secret