# **Projet GSB Gestion de Visites - Alexandre G.**

<br>

![photo gsb-accueil](https://cdn.discordapp.com/attachments/328836939275042826/905916483945775185/unknown.png)
![photo gsb-ex](https://cdn.discordapp.com/attachments/328836939275042826/905916595677851720/unknown.png)

<br>

## **Introduction**
GSB Gestion de Visites, qui est la seconde variante des projets GSB proposés, est un sujet qui doit être réalisé dans le cadre du BTS SIO.
Ce projet fera partie d'un bouquet de quatre projets réalisés par l'étudiant au cours de ses deux années
de BTS. Le candidat devra présenter deux de ses projets dans le cadre de l'examen oral qui aura lieu en fin de deuxième année.

<br>

#### Contexte du projet :
- Le contexte et les attentes du projet sont disponibles [ici](GSB_Contexte.pdf).


## **Description**
En plus des attentes et éxigences exprimées dans le sujet lui-même, certaines restrictions fûrent imposées afin de réaliser un projet 
qui soit conforme aux attentes de l'entretien oral, à savoir:

- Le projet doit s'articuler autour d'une méthode de programmation orientée objet (OOP)
- Le projet doit adopter une architecture Modèle-Vue-Contrôleur (MVC)
- Un système de Gestion de Base de Données (Relationnel) devra être utilisé
- Le language ou Framework utilisé devra se distinguer de ceux présents dans les trois autres projets
- Le projet devra contenir une documentation utilisateur, expliquant les modalités d'utilisation de l'application web, ainsi qu'une documentation technique, expliquant son fonctionnement
- Le projet devra contenir un Modèle Conceptuel de Données (MCD), illustrant les interractions et liens entre l'ensemble des tables de la base de données

<br>
Afin de mener mon projet à bien, j'ai décidé d'utiliser le language [**PHP**](https://www.php.net/) avec le framework [**Laravel**](https://laravel.com/).

<br>

## **Installation**
Le projet tel qu'il apparaît actuellement contient la majorité des fichiers pré-requis afin de faire fonctionner le site.
Cependant, le fichier .env (contenant l'ensemble des informations relatives à l'interraction avec la base de données) et les locks (Composer, Packages) devront être reconfigurés manuellement.

<br>

- Cloner le projet GitHub sur votre appareil
- Ajouter un fichier .env, contenant la configuration requise afin qu'il puisse accéder à votre Système de Gestion de Bases de Données
- Créer la base de données adéquate, de préférence en encodage ```utf8_unicode_ci```
- Mettre en place les paquets json, et installer tailwindCSS et Laravel-mix si nécessaire:
  - Laravel-mix: 
  ```shell
  npm install laravel-mix@latest --save-dev
  ```
  - TailwindCSS: 
  ```shell
  npm install -D tailwindcss@latest postcss@latest autoprefixer@latest
  ```
<br>

- Générer le fichier de configuration de tailwind (à utiliser si nécessaire):
```shell
npx tailwindcss init
```

> Ce fichier est principalement utile si vous souhaitez interragir avec le projet, mais n'est pas nécessaire à son fonctionnement


- Lancer le file watcher:
```shell
npm run watch
```

> Le file watcher permet de compiler le fichier SaSS principal en un seul et unique fichier CSS dédié.
> Cette étape n'est nécessaire que si vous modifiez ou interagissez d'une quelconque manière avec le fichier SaSS principal.

<br>

- Lancer le projet:
```shell
php artisan serve
```

<br>

## **License**

Ce projet est soumis à la [Licence MIT](https://opensource.org/licenses/MIT).

<br>
