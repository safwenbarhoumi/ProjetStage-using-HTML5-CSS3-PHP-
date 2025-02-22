# Projet de Gestion des Utilisateurs du CNI

## Description
Ce projet est une application web développée en **HTML5, CSS3, JavaScript et PHP** permettant la gestion des employés du **Centre National Informatique (CNI)**.

L'application propose plusieurs fonctionnalités, notamment :
- La gestion des informations des utilisateurs (ajout, modification, suppression).
- L'organisation des cycles de formation et des stages.
- L'affichage et la gestion des listes d'utilisateurs.
- Une interface intuitive et responsive pour une meilleure expérience utilisateur.

---

## 🖼️ Aperçu de l'Interface

## Page d'accueil
<p align="center">
  <img src="https://user-images.githubusercontent.com/92230521/215350736-c00e3493-1c69-4d77-bee2-41f22089fd20.png" alt="accueil" width="800"/>
</p>

## Formulaire d'ajout des utilisateurs
<p align="center">
  <img src="https://user-images.githubusercontent.com/92230521/215350762-3739ac48-b4e1-4035-82a3-8ff0f7823527.png" alt="form" width="300" style="display:inline-block; margin-right:10px;"/>
  <img src="https://user-images.githubusercontent.com/92230521/215350763-f7ceb408-a018-461b-91db-2f83377172a0.png" alt="forma" width="300" style="display:inline-block;"/>
</p>


## Gestion des cycles de formation
<p align="center">
  <img src="https://user-images.githubusercontent.com/92230521/215350764-eafc3bf4-0afe-49bf-b231-c8c3d7b1efd3.png" alt="cycle" width="800"/>
</p>

## Affichage des listes d'employés
<p align="center">
  <img src="https://user-images.githubusercontent.com/92230521/215350795-80ebdf4c-f1cc-4cd2-87ed-b8b2b04bfb59.png" alt="list1" width="600" style="display:inline-block; margin-right:10px;"/>
  <img src="https://user-images.githubusercontent.com/92230521/215350798-515edfe0-5b4b-44ca-8d47-33f4caae705d.png" alt="list2" width="600" style="display:inline-block; margin-right:10px;"/>
  <img src="https://user-images.githubusercontent.com/92230521/215350799-27c4d185-81af-4516-934a-1af73fcd417a.png" alt="list3" width="800" style="display:inline-block;"/>
</p>


## Structure de la base de données
<p align="center">
  <img src="https://user-images.githubusercontent.com/92230521/215350812-4d605a80-91af-47ec-91ba-562ad1c733a0.png" alt="database" width="800"/>
</p>
---

## 🛠️ Installation et Exécution

## 1️⃣ Prérequis
Avant d'installer et d'exécuter le projet, assurez-vous d'avoir :
- Un serveur local installé (**XAMPP** ou **WAMP**)
- PHP (version 7.4 ou plus)
- MySQL (pour la base de données)

## 2️⃣ Cloner le projet
```bash
git clone https://github.com/votre-repo/projet-cni.git
cd projet-cni
```
cat <<EOF > README.md
# Configuration et Installation du Projet CNI

## 3️⃣ Configurer la base de données

Ouvrez phpMyAdmin et créez une base de données nommée `cni_db`.

Importez le fichier SQL fourni dans le projet :

```bash
mysql -u root -p cni_db < chemin_vers_le_fichier/cni_db.sql
```

Vérifiez que les tables ont bien été créées.

## 4️⃣ Configurer le projet

Ouvrez le fichier `config.php` et modifiez les informations de connexion à la base de données :

```php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'cni_db');
```

Enregistrez les modifications.

## 5️⃣ Démarrer le serveur

Si vous utilisez **XAMPP**, démarrez Apache et MySQL, puis placez le projet dans le dossier `htdocs` :

```bash
mv projet-cni /xampp/htdocs/
```

Si vous utilisez **WAMP**, placez le projet dans le dossier `www`.

## 6️⃣ Accéder à l'application

Ouvrez un navigateur et entrez l'URL suivante :

```
http://127.0.0.1/
```

## 📌 Fonctionnalités Principales
✔️ Gestion des utilisateurs (ajout, modification, suppression)  
✔️ Affichage des listes d'employés  
✔️ Gestion des cycles de formation et des stages  
✔️ Interface responsive et ergonomique  
✔️ Base de données MySQL intégrée  

## 💡 Conclusion

Ce projet vise à faciliter la gestion administrative des employés du **Centre National Informatique (CNI)** grâce à une interface web intuitive et performante. Il peut être étendu pour inclure des fonctionnalités supplémentaires comme la gestion des permissions et l'intégration d'un module de messagerie interne.

 **Prêt à l'emploi pour optimiser la gestion du personnel du CNI !** 




