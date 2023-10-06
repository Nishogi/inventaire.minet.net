# TO-DO

- specifications (in french) : [here](https://www-inf.telecom-sudparis.eu/COURS/CSC4101/projet/cahier-charges-projet.html)
- production guide (also in french) : [here](https://www-inf.telecom-sudparis.eu/COURS/CSC4101/projet/index.html)

| N° étape | Tâche à faire                                                                                           | Obligatoire / Optionnel | Séance de début prévisionnel | État |
|----------|---------------------------------------------------------------------------------------------------------|-------------------------|------------------------------|------|
| 1        | Prise de connaissance du cahier des charges                                                             | OBLIGATOIRE             | TP 3                         |  ✅   |
| 2        | Initialisation du projet Symfony                                                                        | OBLIGATOIRE             | TP 3                         |  ✅   |
| 3        | Gestion du code source avec Git                                                                         | RECOMMANDÉ              |                              |  ✅   |
| 4        | Ajout au modèle des données des entités liées [inventaire] et [objet] minimales                         | OBLIGATOIRE             | TP 3                         |  ✅   |
| 4.1      | - Entité [inventaire]                                                                                   | ''                      | ''                           |  ✅   |
| 4.2      | - Entité [objet]                                                                                        | ''                      | ''                           |  ✅   |
| 4.3      | - Association 1-N entre [inventaire] et [objet]                                                         | ''                      | ''                           |  ✅   |
| 4.4      | - Propriétés non-essentielles des [objets] (optionnel)                                                  | OPTIONNEL               | (en 2ème moitié de projet)   |  ✅   |
| 5        | Ajout de données de tests chargeables avec les fixtures                                                 | OBLIGATOIRE             | TP 3                         |  ✅   |
|          | - Pour [inventaire]                                                                                     |                         |                              |  ✅   |
|          | - Pour [objet]                                                                                          |                         |                              |  ✅   |
|          | - …                                                                                                     |                         |                              |  ✅   |
| 6        | Ajout d'une interface EasyAdmin dans le back-office avec les 2 contrôleurs CRUD [inventaire] et [objet] |                         |                              |  ✅   |
|          | - CRUD [inventaire]                                                                                     | OBLIGATOIRE             | TP 3/4                       |  ✅   |
|          | - CRUD [objet]                                                                                          | OBLIGATOIRE             | TP 3/4                       |  ✅   |
|          | - Navigation entre [inventaire] et ses [objets] (optionnel)                                             | OPTIONNEL               | TP 5                         |  ✅   |
| 7        | Ajout de l'entité membre et du lien membre - [inventaire]                                               | OBLIGATOIRE             | TP 3/4                       |  ✅   |
|          | - Ajout de membre au modèle des données                                                                 |                         |                              |  ✅   |
|          | - Ajout de l'association 1-N entre membre et ses inventaires (optionnellement 1-1)                      |                         |                              |  ✅   |
| 8        | Création des pages du "front-office" de consultation des [inventaires]                                  |                         |                              |  ❌   |
|          | - Consultation de la liste de tous les inventaires (dans un premier temps)                              | OBLIGATOIRE             | TP 4                         |  ✅   |
|          | - Consultation d'une fiche d'[inventaire] à partir de la liste                                          | OBLIGATOIRE             | TP 4                         |  ✅   |
| 9        | Ajout de la navigation entre [inventaire] et [objet] dans le back-office EasyAdmin                      | OPTIONNEL               | TP 4/5                       |  ✅   |
| 10       | Utilisation de gabarits pour les pages de consultation du front-office                                  | OBLIGATOIRE             | TP 5                         |  ✅   |
|          | - Consultation d'un [objet]                                                                             |                         |                              |  ✅   |
|          | - Consultation de la liste des [objets] d'un [inventaire]                                               |                         |                              |  ✅   |
|          | - Navigation d'un [inventaire] vers la consultation de ses [objets]                                     |                         |                              |  ✅   |
| 11       | Intégration d'une mise en forme CSS avec Bootstrap dans les gabarits Twig                               | OBLIGATOIRE             | TP 6                         |  ❌   |
| 12       | Intégration de menus de navigation                                                                      | OBLIGATOIRE             |                              |  ❌   |
| 13       | Ajout de l'entité [galerie] au modèle des données et de l'association M-N avec [objet]                  | OBLIGATOIRE             |                              |  ❌   |
| 14       | Ajout de [galerie] dans le back-office (optionnel)                                                      | OPTIONNEL               |                              |  ❌   |
| 15       | Ajout d'un contrôleur CRUD au front-office pour [galerie]                                               | OBLIGATOIRE             | TP xxx                       |  ❌   |
| 16       | Ajout de fonctions CRUD au front-office pour [inventaire]                                               | OBLIGATOIRE             |                              |  ❌   |
| 17       | Ajout de la consultation des [objets] depuis les [galeries] publiques                                   | OBLIGATOIRE             |                              |  ❌   |
| 18       | Ajout d'un contrôleur CRUD pour Membres                                                                 | OBLIGATOIRE             |                              |  ❌   |
| 19       | Consultation de la liste des seuls inventaires d'un membre dans le front-office                         | OBLIGATOIRE             |                              |  ❌   |
| 20       | Contextualisation de la création d'[inventaire] en fonction du Membre                                   | OBLIGATOIRE             |                              |  ❌   |
| 21       | Contextualisation de la création d'un [objet] en fonction de l'[inventaire]                             | OBLIGATOIRE             |                              |  ❌   |
| 22       | Contextualisation de la création d'une [galerie] en fonction du membre (optionnel)                      | OPTIONNEL               |                              |  ❌   |
| 23       | Affichage des seules galeries publiques (optionnel)                                                     | OPTIONNEL               |                              |  ❌   |
| 24       | Contextualisation de l'ajout d'un [objet] à une [galerie] (optionnel)                                   | OPTIONNEL               |                              |  ❌   |
| 25       | Ajout des Utilisateurs au modèle de données et du lien utilisateur - membre                             | OBLIGATOIRE             | TP 9                         |  ❌   |
| 26       | Ajout de l'authentification                                                                             | OBLIGATOIRE             | TP 9                         |  ❌   |
| 27       | Protection de l'accès aux routes interdites réservées aux membres (optionnel)                           | OPTIONNEL               | TP 9                         |  ❌   |
| 28       | Protection de l'accès aux données à leurs seuls propriétaires (optionnel)                               | OPTIONNEL               | TP 9                         |  ❌   |
| 29       | Contextualisation du chargement des données en fonction de l'utilisateur connecté (optionnel)           | OPTIONNEL               |                              |  ❌   |
| 30       | Gestion de la suppression (optionnel)                                                                   | OPTIONNEL               |                              |  ❌   |
| 31       | Ajout de la gestion de la mise en ligne d'images pour des photos dans les [objet] (optionnel)           | OPTIONNEL               | TP 8                         |  ❌   |
| 32       | Utilisation des messages flash pour les CRUDs (optionnel)                                               | OPTIONNEL               |                              |  ❌   |
| 33       | Ajout d'une gestion de marque-pages/panier dans le front-office (optionnel)                             | OPTIONNEL               | TP 9                         |  ❌   |