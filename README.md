# 👔 Costume Management System - Laravel Backend

<p align="left">
  <img src="https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" />
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" />
  <img src="https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white" />
  <img src="https://img.shields.io/badge/API-RESTful-blue?style=for-the-badge" />
</p>

## 📌 Description
**Costume Management System** est une API backend robuste développée avec **Laravel**, permettant une gestion centralisée et efficace d'un inventaire de costumes. 

Le système est conçu pour être extensible et facilement consommable par des applications Frontend (React, Vue) ou Mobiles.

---

## 🚀 Fonctionnalités Clés
* 📦 **Gestion de Stock** : CRUD complet des articles avec suivi en temps réel.
* 👤 **Système d'Authentification** : Sécurisation des accès via **JWT / Laravel Sanctum**.
* 🔐 **Module Admin** : Dashboard dédié pour la gestion des utilisateurs et des commandes.
* 👖 **Modèles Spécialisés** : Logique métier avancée pour les articles (ex: classe Pantalon avec attributs taille/coupe).
* ⚡ **Architecture API** : Endpoints normalisés avec réponses JSON structurées.

---

## 🛠️ Stack Technique
![Laravel](https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/mysql-%234479A1.svg?style=for-the-badge&logo=mysql&logoColor=white)
![Composer](https://img.shields.io/badge/composer-%23885630.svg?style=for-the-badge&logo=composer&logoColor=white)
![Postman](https://img.shields.io/badge/Postman-FF6C37?style=for-the-badge&logo=postman&logoColor=white)

📂 Structure du projet
app/
 ├── Models/
 │    └── Pantalon.php
 ├── Http/
 │    ├── Controllers/
 │    │      └── Admin/
 │    └── Requests/
 ├── Services/
database/
 ├── migrations/
 └── seeders/
routes/
 ├── api.php
 └── web.php
 
⚙️ Installation
🔽 1. Cloner le projet
git clone https://github.com/BADIAMOHAMEDAYMANE/backend-costume.git
cd backend-costume

📦 2. Installer les dépendances
composer install
npm install && npm run build

⚙️ 3. Configuration environnement
cp .env.example .env
php artisan key:generate

Configurer la base de données dans .env :

DB_DATABASE=costume_db
DB_USERNAME=root
DB_PASSWORD=

🗄️ 4. Migration & Seed
php artisan migrate --seed

▶️ 5. Lancer le serveur
php artisan serve
🔗 API Endpoints (exemples)
Méthode	Endpoint	Description
GET	/api/costumes	Liste des costumes
POST	/api/costumes	Ajouter un costume
GET	/api/costumes/{id}	Détails
PUT	/api/costumes/{id}	Modifier
DELETE	/api/costumes/{id}	Supprimer

🔐 Sécurité

Authentification via Laravel JWT

Validation des requêtes (Form Requests)

Protection CSRF (si web)

Gestion des rôles et permissions

🧪 Lancer les tests
php artisan test
📈 Roadmap (Améliorations futures)

 Upload d’images des costumes

 Système de notifications

 Dashboard avec statistiques

 API documentation (Swagger)

 Déploiement (Docker / VPS)

🤝 Contribution

Les contributions sont les bienvenues !

# Fork
# Create branch
git checkout -b feature/new-feature

# Commit
git commit -m "Add new feature"

# Push
git push origin feature/new-feature
👤 Auteur

Mohamed Aymane Badia
🎓 Étudiant en 4ème année – IA & Data Science
💻 Passionné par le développement backend & les systèmes intelligents
