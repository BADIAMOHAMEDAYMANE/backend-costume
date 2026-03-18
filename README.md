👔 Costume Management System - Laravel Backend

📌 Description

Costume Management System est une API backend développée avec Laravel permettant de gérer efficacement un inventaire de costumes.

Le système fournit une architecture robuste et extensible pour :

la gestion des articles (costumes, pantalons, etc.)

l’administration des utilisateurs

la gestion des commandes

l’intégration avec des applications frontend (React, mobile…)

🎯 Objectifs du projet

Mettre en place une API REST propre et scalable

Implémenter une logique métier modulaire (ex: Pantalon)

Appliquer les bonnes pratiques Laravel (MVC, Services, Validation…)

Assurer la sécurité et la maintenabilité

🚀 Fonctionnalités
📦 Gestion des produits

CRUD complet des costumes

Gestion des catégories (vestes, pantalons, accessoires…)

Gestion des stocks en temps réel

👖 Modèles spécifiques

Classe Pantalon avec attributs personnalisés :

taille

longueur

coupe

👤 Gestion des utilisateurs

Authentification sécurisée (JWT / Sanctum)

Gestion des rôles (Admin / User)

🔐 Module Admin

Dashboard administrateur

Gestion des utilisateurs

Gestion des commandes

Suivi des stocks

⚡ API RESTful

Endpoints structurés et normalisés

Réponses JSON

Facilement connectable avec React / Mobile

🧪 Tests

.Tests unitaires
.Tests fonctionnels

🛠️ Stack Technique
Technologie	Description
Laravel	Framework backend
PHP 8.1+	Langage principal
MySQL	Base de données
Vite	Bundler frontend
Tailwind CSS	UI styling
Composer	Gestion dépendances PHP

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
