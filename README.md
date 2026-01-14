# SecureCore – MVC Authentication System (Native PHP)

## 📌 Contexte du projet

Ce projet est réalisé dans le cadre de la mise en place des fondations techniques des futures applications web de **SecureCore**, une startup orientée sécurité.

Avant de développer des fonctionnalités avancées, l’objectif est de concevoir un **système d’authentification robuste, réutilisable et extensible**, basé sur une **architecture MVC développée sans framework**.

Le projet se concentre exclusivement sur :
- l’authentification des utilisateurs,
- la gestion des rôles,
- la protection des routes,
tout en respectant une architecture propre et maintenable.

---

## 🎯 Objectifs pédagogiques

À l’issue de ce projet, le développeur doit être capable de :

- Comprendre et implémenter une architecture MVC “fait maison”
- Mettre en place un système de routage centralisé
- Séparer clairement :
  - la logique métier (Models),
  - le contrôle des requêtes (Controllers),
  - l’affichage (Views)
- Gérer une authentification multi-rôles
- Sécuriser l’accès aux routes selon le rôle utilisateur
- Comprendre les limites du code procédural et les avantages du MVC

---

## 👥 Rôles du système

### 👤 Candidate
- Inscription
- Connexion
- Accès à un espace personnel dédié

### 🛡️ Admin
- Connexion
- Accès à un dashboard administrateur
- Ne partage aucune vue avec les autres rôles

### 🟣 Company
- Connexion
- Accès à un dashboard company
- Droits distincts de l’admin

🔒 **Chaque rôle possède :**
- ses propres routes,
- ses propres contrôleurs,
- ses propres vues protégées.

---

## ⚙️ Fonctionnalités

### 🔐 Authentification
- Inscription des utilisateurs
- Connexion / Déconnexion
- Stockage sécurisé des mots de passe
- Gestion des sessions PHP

### 🔑 Gestion des rôles
- Attribution d’un rôle à chaque utilisateur
- Redirection après connexion selon le rôle
- Accès refusé si le rôle n’est pas autorisé

### 🚫 Protection des routes
- Routes publiques : login, register
- Routes protégées : dashboards
- Vérifications systématiques :
  - utilisateur connecté
  - rôle autorisé

---

## 🛠️ Règles d’implémentation

- ✅ Un **seul point d’entrée** : `public/index.php`
- ❌ Aucun accès direct aux fichiers de vues
- Toutes les requêtes suivent le flux :


- ❌ Aucune logique métier dans les vues
- ❌ Aucun SQL dans les contrôleurs
- ✅ PDO + requêtes préparées obligatoires

---

## 🧩 UML (obligatoire avant développement)

### Diagramme de cas d’utilisation
- Login
- Register
- Accès aux dashboards selon le rôle

### Diagramme de classes
- User
- Role
- Candidate
- Company

---

## 🔐 Sécurité

- Hashage des mots de passe (`password_hash`)
- Vérification de session sur chaque route protégée
- Accès refusé clair (page 403 ou message explicite)
- Aucun rôle hardcodé dans les vues

---

## 🚫 Interdictions

- ❌ Code procédural dans les contrôleurs
- ❌ `require` ou `include` arbitraires dans les vues
- ❌ Duplication de la logique d’authentification

---

## 🏁 Résultat attendu

À la fin du projet, il doit être possible de :

- Expliquer clairement l’architecture MVC mise en place
- Justifier chaque dossier et chaque classe
- Ajouter un nouveau rôle sans modifier l’existant
- Démontrer la supériorité de cette architecture par rapport au code procédural

---

## 🧠 Pourquoi ce projet est important

Ce projet pose une base solide pour :
- des applications évolutives,
- une sécurité renforcée,
- une maintenance simplifiée,
- une meilleure lisibilité du code.

Il constitue une **fondation technique réutilisable** pour tout futur projet web PHP.
