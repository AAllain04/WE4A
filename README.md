# 📚 Projet Moodle - WE4A

Ce projet est une interface web permettant la gestion des Unités d'Enseignement (UE) pour les étudiants, les professeurs et les administrateurs. Pour le moment, les pages ont été implémentées en HTML, CSS et JavaScript.

# ‼️ Avant toute chose créer une base de donnée nommée moodle_database et y importer le fichier moodle_database.sql

## 🌐 Pages implémentées

- **Page de Login** (`index.php`)  
- **Page d’administration** (`admin.php`)  
- **Page de choix de l’UE** (`moodle.php`)  
- **Page de contenu d’une UE** :  
  - Professeur : `content_ue_prof.php`  
  - Étudiant : `content_ue_student.php`  
- **Page de création de Post** (`post_ue.php`)  
- **Gestion de compte** : accessible via l’onglet *"Mon Compte"* dans la navbar

## 🎨 Responsive Design

Lorsque la page n'est pas affichée en plein écran, la **navbar** se transforme automatiquement en **menu latéral (sidebar)** pour une meilleure expérience utilisateur sur les petits écrans.

## 👥 Connexion & Rôle Utilisateur

Le contenu affiché varie en fonction du type d'utilisateur (professeur ou étudiant). Deux comptes de test sont disponibles :

- 👨‍🏫 **Professeur**  
  - Email : `professor@example.com`  
  - Mot de passe : `password123`  
  - En cliquant sur une UE, l'utilisateur est redirigé vers `content_ue_prof.php`.

- 👩‍🎓 **Étudiant**  
  - Email : `student@example.com`  
  - Mot de passe : `password123`  
  - En cliquant sur une UE, l'utilisateur est redirigé vers `content_ue_student.php`.

<br><br><br><br>

# Consignes de développement pour les membres du groupe :

## Organisation des répertoires

### ./public/assets -> images

### ./public/css -> fichier css à include dans ./header.php

### ./public/js -> fichier javascript à inclure dans ./footer.php

### ./src/config -> configuration à l'aide de php/symphony de la database

### ./src/views -> bloc de code à inclure dans vos nouveaux fichiers

### ./src/ -> stockage des autres fichiers php

### ./src/views/footer.php -> bas de page contenant les javascripts

### ./src/views/header.php -> haut de page contenant les balises meta et les ressources css
