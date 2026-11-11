# 👔 Costume Management API — Laravel Backend

<p align="left">
  <img src="https://img.shields.io/badge/Laravel%209-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" />
  <img src="https://img.shields.io/badge/PHP%208-777BB4?style=for-the-badge&logo=php&logoColor=white" />
  <img src="https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white" />
  <img src="https://img.shields.io/badge/Auth-JWT-000000?style=for-the-badge&logo=jsonwebtokens&logoColor=white" />
  <img src="https://img.shields.io/badge/API-RESTful-blue?style=for-the-badge" />
</p>

## 📌 Description

**Costume Management API** est une API REST développée avec **Laravel 9** pour gérer des costumes sur mesure : profils de veste, gilets, pantalons et costumes, chacun rattaché à un utilisateur.

Elle renvoie des réponses JSON et peut être consommée par une application frontend (React, Vue) ou mobile.

---

## 🚀 Fonctionnalités

- 👤 **Authentification JWT** (package `php-open-source-saver/jwt-auth`) : inscription, connexion, rafraîchissement et validation du jeton, déconnexion, vérification de l'existence d'un e-mail (`/check-email`).
- 🔐 **Routes protégées** par un middleware personnalisé `JwtMiddleware` : profil courant (`/me`), mise à jour du profil, changement de mot de passe, gestion et recherche des utilisateurs.
- 👖 **CRUD complet** pour les profils de veste, les gilets, les pantalons et les costumes, avec filtrage par utilisateur (`/{ressource}/user/{userId}`).
- 🏗️ **Architecture en couches** : contrôleurs → services (logique métier) → repositories (accès aux données, interfaces dans `Repositories/Contracts`).
- ❤️ **Endpoint de santé** `GET /api/health`.

---

## 🛠️ Stack technique

![Laravel](https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/mysql-%234479A1.svg?style=for-the-badge&logo=mysql&logoColor=white)
![Composer](https://img.shields.io/badge/composer-%23885630.svg?style=for-the-badge&logo=composer&logoColor=white)
![Postman](https://img.shields.io/badge/Postman-FF6C37?style=for-the-badge&logo=postman&logoColor=white)

---

## 📂 Structure du projet

```
app/
├── Http/
│   ├── Controllers/     # Auth, User, VesteProfile, Gilet, Pantalon, Costume
│   └── Middleware/      # JwtMiddleware (vérification du jeton)
├── Models/              # User, VesteProfile, Gilet, Pantalon, Costume
├── Services/            # Logique métier (auth, utilisateurs, articles)
└── Repositories/        # Accès aux données (Eloquent)
database/
├── migrations/
└── seeders/
routes/
└── api.php              # Définition des endpoints
```

---

## ⚙️ Installation

```bash
# 1. Cloner le projet
git clone https://github.com/BADIAMOHAMEDAYMANE/backend-costume.git
cd backend-costume

# 2. Installer les dépendances
composer install

# 3. Configurer l'environnement
cp .env.example .env
php artisan key:generate
php artisan jwt:secret
```

Configurer la base MySQL dans `.env` :

```
DB_CONNECTION=mysql
DB_DATABASE=costume_db
DB_USERNAME=root
DB_PASSWORD=
```

```bash
# 4. Migrations
php artisan migrate --seed

# 5. Lancer le serveur
php artisan serve          # http://localhost:8000
```

---

## 🔗 Endpoints principaux (préfixe `/api`)

| Méthode | Endpoint | Description | JWT |
|---|---|---|---|
| POST | `/register`, `/login` | Inscription, connexion | — |
| POST | `/refresh`, `/validate-token` | Rafraîchir / valider le jeton | — |
| POST | `/logout` | Déconnexion | ✅ |
| GET | `/me` | Utilisateur connecté | ✅ |
| PUT | `/profile`, `/change-password` | Profil et mot de passe | ✅ |
| GET | `/users`, `/users/search` | Liste et recherche d'utilisateurs | ✅ |
| GET / POST | `/costumes` | Lister / créer un costume | — |
| GET / PUT / DELETE | `/costumes/{id}` | Détail / modifier / supprimer | — |
| GET | `/costumes/user/{userId}` | Costumes d'un utilisateur | — |

Les mêmes routes existent pour `/veste-profiles`, `/gilets` et `/pantalons`.

---

## 🔮 Améliorations prévues

- Protéger aussi les routes CRUD par JWT et ajouter des rôles (admin / client)
- Documentation OpenAPI (Swagger)
- Tests de fonctionnalités sur les endpoints
- Upload d'images des costumes
- Conteneurisation (Docker)

---

## 👤 Auteur

**Mohamed Aymane Badia** — élève ingénieur en 5ᵉ année, IA & Data Science (EMSI)
