# php-po

## **Composer**

#### *Principe :*

outilis de gestion de dépendances en php. Permet de déclarer et gérer les librairies utilisées par un projet. Va retrouver automatiquement les librairies dont dépendent les librairies utilisées par le projet, les installent localement dans le projet.

#### *Equivalents pour d'autres langages :*

JS: npm
Ruby : bundler
JAVA : Maven ou Gradle
Python :Pip

#### *composer.json :*

Permet d'utiliser composer dans le projet. Décrit les dépendances utilisées par le projet et contient des metdata. A placer à la racine du projet.

#### *^ et\* dans le fichier json :*

Semantic versionning: x.y.z
x=version majeure, suivante peut tout casser.
y =ajout de fonctionnalité, modif mineure, pas sensé tout casser
z =corrections, pas de chajngement pas d'ajout, juste correstions.

\*= wildcard contrainte de version  permet d'utiliser n'impoorte quelle sous version de la version demandée dans le require du fichier composer.ex : toutes les sous version de la 1.4 uniquement, pas 1.3, pas 1.5...).pas de maj ad'ajout de fonctionnalité


^ = permet d'eviter la depreciation en limitant l'usage à la version spécifiée mais interdit la version supérieure. ex \^1.2.3 permet d'ulitiser cette sous version, les suivante mais pas la version suivante (2). pas de maj majeure

#### *composer.lock :*

permet d'utiliser toujours la même verison de dépendance pour le projet en evitant les mises à jour auto.

#### *diff entre composer.json et composer.lock:*
le premier est un fichier de config, l'autre verouille la version de travail empechant les maj.

### ***initialiser son projet avec composer***


require : indique les dépendances voulues.
auto-load :

## *La poo*:

abstraction
encapsulation: attention ne pas utiliser les getters/setter si inutile, cad si ils n'imposent aucun controle
cf gymanstique des objets

