<style>
    .g{color: green}  
    .y{color: yellow}  
    .c{color: cyan}  
</style>

<span class="g">commande</span> <span class="g"></span>  
<span class="y">fichier/dossier</span> <span class="y"></span>  
<span class="c">éléments</span> <span class="c"></span>  
Tuto pour SYMFONY 6.3.\*

## Installation [lien tuto](https://symfony.com/doc/current/setup.html)

- si Symfony est installé  
   commande: <span class="g">symfony new my_project_directory --version="6.3.\*" --webapp</span> (créer un projet )

- si il n'est pas installer  
   installer composer ([Lien d'installation](https://getcomposer.org/download/)) cliquer sur "Composer-Setup.exe"  
   redémarrer VsCode  
   commande: <span class="g">composer create-project symfony/skeleton:"6.3.\*" mon_projet</span> (créer un projet)  
   commande: <span class="g">cd mon_projet</span> (entre dans le dossier du projet)  
   commande: <span class="g">composer require webapp</span> (ajouter les composants pour une app complète)

## Récupérer un projet par GIT

- si vous récupérer votre projet depuis git, il vous manquera les fichiers composer  
   commande: <span class="g">composer install</span> (installe tout les composer de votre projet)

## Démarrer le serveur Symfony

- si le CLI de symfony est installer  
   commande: <span class="g">symfony server:start</span> (lance le serveur et vous donne le lien (alt + clic sur l'ip pour l'ouvrir))
- sinon avec PHP  
   commande: <span class="g">php -S 127.0.0.1:8000 -t public</span> (lance le serveur et vous donne le lien (alt + clic sur l'ip pour l'ouvrir))

ces commandes vont lancer un serveur à l'adresse ([http://127.0.0.1:8000/](http://127.0.0.1:8000/))  
une fois le serveur lancer vous ne pouvez plus utiliser la console utiliser pour le démarrage et devez donc en ouvrire une autre

## Établire la connexion à PhpMyAdmin

- allez dans le fichier <span class="y">.env</span> (racine du projet)  
   commenté la ligne 29 et décommenté la ligne 28  
   ligne 28 : DATABASE_URL="mysql://app:!ChangeMe!@127.0.0.1:3306/app?serverVersion=10.11.2-MariaDB&charset=utf8mb4"  
   app = root (en local)  
   !ChangeMe! = mot de passe (supprimer si vous êtes local)  
   2eme app = nom que vous voulez donner à votre base de données

- créer la base de donner  
   commande: <span class="g">php bin/console doctrine:database:create</span> (créer la base de donnée)

## Créer une table (Entity)

- créer une table (Entity)  
   commande: <span class="g">php bin/console make:entity NomTable</span> (remplacez NomTable par le nom de votre table avec une MAJ)  
   suivez les instructions pour créer chaque colonne

- éditer une table (Entity)  
   commande: <span class="g">php bin/console make:entity NomTable</span> (remplacez NomTable par le nom de la table à modifier)  
   suivez les instructions pour ajouter des colonnes

- mettre à jour sur PhpMyAdmin  
   commande: <span class="g">php bin/console make:migration</span> (prépare la mise à jour)  
   commande: <span class="g">php bin/console doctrine:migrations:migrate</span> (envoie la commande)

- autre commandes  
   commande: <span class="g">php bin/console doctrine:schema:update --dump-sql</span> (permet de voir la commande qui en préparation)  
   commande: <span class="g">php bin/console doctrine:schema:update --force</span> (force l'éxecution de la commande en préparation (à évité))

## Créer une table (Entity) User

- créer la table  
   commande: <span class="y">php bin/console make:user</span> (cette commande va créer une table User avec 3 colonnes, mail, password et role)
- créer le formulaire d'inscription  
   commande: <span class="g">php bin/console make:registration-form</span>
- créer le formulaire de login  
   commande: <span class="g">php bin/console make:auth</span> (la VUE du login se trouvera dans <span class="y">template/security</span>)  
   0 : on le fait nous-mêmes
  1 : il le fait avec email et password

## Créer une relation entre deux table (Entity)

- choisir la table
  commande: <span class="g">php bin/console make:entity Article</span> (renplacer Article par la table que vous voulez liée)
  donner un nom à la nouvelle colonne que dois être liée
  type = relation
  type de relation ManyToOne (de plusieurs à un seul, dans ce cas plusieur Article peuvent être créer par un seul User)

## Créer des fausse DATA dans la base de donnée

- installation de Fixtures [Lien tuto](https://symfony.com/bundles/DoctrineFixturesBundle/current/index.html)
  commande: <span class="g">composer require --dev orm-fixtures</span> (installe le composer Fixtures)
- installation de Faker [Lien tuto](https://github.com/fzaninotto/Faker#installation)
  commande: <span class="g">composer require fzaninotto/faker</span> (Faker sert a générer des fausses donnée réaliste, avec des prénom, nom numéro....)
- fichier a éditer
  allez dans src/DataFixtures/DataFixtures.php et ajouter ça (exemple pour user)
  les user en haute de la page
  <span class="c">
  use Faker;
  use App\Entity\User;</span>

  la variable et la méthode hasher
  <pre><span class="c">
  private UserPasswordHasherInterface $hasher;
  
  public function \_\_construct(UserPasswordHasherInterface $hasher)
  {
  $this->hasher = $hasher;
  }</span></pre>

  la boucle qui va créer les user
   <pre><span class="c">
  $faker = Faker\Factory::create("fr_FR");
         for ($i = 0; $i < 20; $i++) {
            $user = new User();
            $user->setFirstname($faker->firstName);
            $user->setLastname($faker->lastName);
            $user->setEmail($faker->freeEmail);
            $user->setPhoneNumber($faker->phoneNumber);
            $password = $this->hasher->hashPassword($user, 'pass_1234');
            // $user->setPassword("aaaaaaaa");
            $user->setPassword($password);
            $manager->persist($user);
        }
      $manager->flush();
   </span></pre>

  Firstname, Lastname, Email et PhoneNumber correspondes à mes méthode dans l'entity <span class="y">src/Entity/User.php</span>
  d'autre exemple pour générer d'autre méthodes
  <span class="c">$article->setResume($faker->catchPhrase());</span> (va créer une courte phrase)
  <span class="c">$article->setResume($faker->realText($maxNbChars = 200));</span> (va créer une chaine de MAX)
  <span class="c">$article->setImage($faker->imageUrl($witdh = 640, $height = 480));</span> (va générer un lien d'image d'une image de lorem picture)
  <span class="c">$article->setCreatedAt(new \DateTimeImmutable());</span> (ajoute la date d'aujourd'hui)

- commande pour éxecuté la méthode
  commande: <span class="g">php bin/console doctrine:fixtures:load</span> (lance la méthode dans <span class="y">src/DataFixtures/Datafixtures.php</span>)
  cette commande va vous demandez si vous voulez "purger" (supprimer) toute votre base de donnée si vous mettez "yes" et la recréer avec si qu'il y à dans la méthode

## Ajouter la date automatiquement

- allez dans l'entity du formulaire
  <span class="y">src/Entity/NomEntity.php</span>
  ajouter cette méthode
    <pre><span class="c">
        public function __construct()
    {
        $this->created_at = new \DateTimeImmutable();
    }
    </span></pre>
  remplacer "created_at" par le nom de votre variable

## Aujouter l'auteur automatiquement

- allez dans le controlleur du formulaire
  <span class="y">src/Controller/NomFicher.php</span> trouver la route <span class="c">/new</span>
  et dans la condition <span class="c">if ($form->isSubmitted() && $form->isValid()) {</span> ajouter ça:
    <span class="c">$article->setAuteur($this->getUser());</span> ($article correspond à l'entity du formulaire)
- déactiver le champ auteur du formulaire
  allez dans <span class="y">src/Form/NomForm.php</span> et supprimer le <span class="c">->add('auteur')</span> qui ce trouve dans le <span class="c">$builder</span>

## Ajouter un message quand le formulaire est envoyer

- allez dans le controlleur du formulaire
  <span class="y">src/Controller/NomFicher.php</span> trouver la route <span class="c">/new</span>
  et dans la condition <span class="c">if ($form->isSubmitted() && $form->isValid()) {</span> ajouter ça après la méthode ->flush
    <span class="c">$this->addFlash('success', 'Votre article à été ajouter');</span>
  et ajouter un bouble for a l'endroit ou vous voulez afficher le message
    <pre><span class="c">
    {% for message in app.flashes('success') %}
    {{ message }}
    {% endfor %}
    </span></pre>

## Créer le CRUD

- Le CRUD (create, read, update, delete) représente toutes les fonctionnalités pour gérer une table (Entity) reprenant les commande INSERT INTO, SELECT \*, UPDATE, DELETE de MySQL  
   commande: <span class="g">php bin/console make:crud NomTable</span> (remplacez NomTable par le nom de votre table/Entity avec une MAJ)  
   cette commande va vous créez les fichiers:  
   created: <span class="y">src/Controller/UserController.php</span> (gérer les chemin d'accée au diférentes pages)  
   created: <span class="y">src/Form/UserType.php</span> (c'est le formulaire qui sera afficher sur la page new et edit)  
   created: <span class="y">emplates/user/\_delete_form.html.twig</span>  
   created: <span class="y">templates/user/\_form.html.twig</span>  
   created: <span class="y">templates/user/edit.html.twig</span>  
   created: <span class="y">templates/user/index.html.twig</span>  
   created: <span class="y">templates/user/new.html.twig</span>  
   created: <span class="y">templates/user/show.html.twig </span>

## Composer Validator

- installation
  commande: <span class="g">composer require symfony/validator</span>
  le composer validator permet la validation des données (email au bon format, password suffisament fort, ETC...)
- exemple d'utilisation + messages d'erreur
  rendez-vous dans le fichier du formulaire souhaitez (<span class="y">src/Form/NomForm.php</span>) et ajouter ceci dans le $builder
    <pre><span class="c">->add('email', EmailType::class, [
        'constraints' => [
            new Email([
                'message' => "L'adresse mail n'est pas valide",
            ]),
        ],
    ]);</pre>
    </span>
    je vérifie que le champ email soit bien un email valide et si ce n'est pas le cas j'affiche un message d'erreur

## Les routes

- emplacements  
   les fichiers qui gérer les routes (chemin d'accée) de trouve dans <span class="y">src/Controller</span>
- commande pour voir toutes les routes du projet  
   commande: <span class="g">php bin/console debug:router</span>

## Créer une première page (Home)

- créer la page  
   commande: <span class="g">php bin/console make:controller HomeController</span>  
   cette commande va créer deux fichiers  
   un premier dans <span class="y">src/Controller/HomeController.php</span> (pour gérer le chemin d'accées (l'URL) ce cette page)  
   et un autre dans <span class="y">templates/home/index.html.twig</span> (pour éditer le visuel de la page que vous venez de créer)

## Dossier templates

- Les dossier dans <span class="y">templates</span>  
   chaque controller va créer sont propre dossier dans template  
   registration et security gérer le formulaire d'inscription et celui de login
- le fichier <span class="y">base.html/twig</span>  
   dans ce fichier ce trouve le "squelette" de votre site, vous pouvais ajouté ici tout les élémenet tel que header, nav, footer
- les blocs  
   pour créer un nouvel éléments dans <span class="y">base.html.twig</span>  
   syntaxe
    <pre>
    <span class="c">{% block nom_element %}</span> 
    mettre les éléments HTML ici 
    <span class="c">{% endblock %}</span></pre>
  cette élément sera placer sur toutes les pages ce trouvant dans le dossier <span class="y">template</span> (sauf si un block avec le même nom est créer sur la page, il sera alors remplacer)

## Dossier Public

- explication: c'est dans le dossier <span class="y">public</span> (à la racine) que vous devez mettre tout vos fichier asset/style/images..  
   utilisez la propriété <span class="c">{{ asset('')}}</span> pour vous rendre à la racine du dossier <span class="y">public</span>  
   exemple:  
   <span class="c">&lt;link rel="stylesheet" href="{{ asset('css/style.css')}}"></span> (ajoute un link <span class="y">style.css</span> ce trouvant dans un dossier <span class="y">public/css</span>)  
   <span class="c">&lt;img src="{{ asset('images/imagename.png') }}" alt=""></span> (ajoute une image qui à pour nom imagename.png qui ce trouve dans le dossier <span class="y">public/image</span>)  
   <span class="c">&lt;img src="{{ asset('images/articles/') }}{{ article.image }}" alt=""></span> (concaténé une variable avec un chemin d'accée)

## URL d'accée (href)

- relier une balise &lt;a> en Symfony
  <span class="c">&lt;a href="{{ path('route_name') }}">Page d'accueil</a></span>
  le "route_name" dois être remplacer par le nom route de la page voulu, il ce trouve dans <span class="y">src/Controller/FichierVoulu.php</span> c'est l'attribut "name"

## Varibales / condition / boucle for

- varibles  
   variables simple syntaxe <span class="c">{{ nomVariable }}</span>  
   variables de type date <span class="c">{{ produit.createdAt|date("Y-m-d H:i:s") }}</span> (on affiche la valeur de la colonne createdAt de la varible produit)  
   variables à afficher venant d'une boucle <span class="c">{{ element.titre }}</span>
- condition  
   syntaxe pour une condition if
    <pre>  <span class="c">{% if maVariable == 42 %}</span>  
        SI vrai texte à écrire ici  
    <span class="c">{% else %}</span>  
        SI faux texte à écrire ici  
    <span class="c">{% endif %}</span>
- boucle pour parccourir un tableau  
   <span class="c">{% for element in elements %}  
   {{ element.titre }}</span> (affiche un à un les élement titre du tableau elements)  
   <span class="c">{% endfor %}</span></pre>

## Les Objets

- les class
  les class ce trouvent dans <span class="y">src/Entity</span>
- méthode **toString
  pour évité de devoir faire un <span class="c">{{ app.user.lastname }}</span> pour pouvais faire un <span class="c">{{ app.user }}</span> en ajoutant la méthode **string
  allais dans <span class="y">src/Entity/NomEntity.php</span> et ajouté la méthode suivante
    <pre>
    <span class="c">public function __toString()
    {
        return $this->firstname . " " . $this->lastname ;
    }</span></pre>
  avec cette méthode il vous suffit de faire <span class="c">{{ app.user }}</span> pour faire apparaitre le Firstname + Lastname

## Détection page actuel / class active

- condition avec app.request.attributes.get
    <pre><span class="c">
    &lt;ul>
    &lt;li class="{% if app.request.attributes.get('_route') == 'accueil' %}active{% endif %}">
        &lt;a href="{{ path('accueil') }}">Accueil&lt;/a>
    &lt;/li>
    &lt;li class="{% if app.request.attributes.get('_route') == 'page_de_produit' %}active{% endif %}">
        &lt;a href="{{ path('page_de_produit') }}">Page de Produit&lt;/a>
    &lt;/li>
    &lt;/ul>
    </span></pre>

## Gestion des erreurs

- mode prod
  aller dans .env (à la racine)
  et modifier <span class="c">APP_ENV=dev</span> par <span class="c">APP_ENV=prod</span>
- template
  dans le dossier <span class="y">template</span> créer les dossier <span class="y">bundles/TwigBundle/Exception</span>
  et dans le dossier Exception créer les fichier <span class="y">error.html.twig error403.html.twig</span> et <span class="y">error404.html.twig</span>
- consulté les pages erreurs
  dans votre url 127.0.0.1:8000 ajotuer /\_error/404 pour l'erreur 404

## requete SQL custome

- modifier le repository
  aller dans src/Repository/EntityRepository.php
  ajotuer la function (exemple)
   <pre><span class="c">
       public function getLastInserted($entity, $amount)
    {
        return $this->getEntityManager()
            ->createQuery(
                "SELECT e FROM $entity e ORDER BY e.id DESC"
            )
            ->setMaxResults($amount)
            ->getResult();
    }
   </span></pre>
- modifier le controller
  aller dans src/Controller/EntityController.php
  et modifier la ligne <span class="c"> 'articles' => $articleRepository->findAll(),</span> par <span class="c"> 'articles' => $articleRepository->getLastInserted('App:Article', 5),</span>
  App:Article renvoie sur l'entity Article (le App: est obligatoire car sinon SF ne comprend pas)

## Gestion de la pagination (nombre d'articles par page) avec KnpPaginator

- installer le composer
  [lien GIT](https://github.com/KnpLabs/KnpPaginatorBundle)
  commande: <span class="c">composer require knplabs/knp-paginator-bundle</span>
- créer le fichier .yaml
  dans <span class="y">config/packages</span> créer le fichier <span class="y">paginator.yaml</span>
  et ajouter ça:
   <pre><span class="c">
   knp_paginator:
    page_range: 5                       # number of links shown in the pagination menu (e.g: you have 10 pages, a page_range of 3, on the 5th page you'll see links to page 4, 5, 6)
    default_options:
        page_name: page                 # page query parameter name
        sort_field_name: sort           # sort field query parameter name
        sort_direction_name: direction  # sort direction query parameter name
        distinct: true                  # ensure distinct results, useful when ORM queries are using GROUP BY statements
        filter_field_name: filterField  # filter field query parameter name
        filter_value_name: filterValue  # filter value query parameter name
    template:
        pagination: '@KnpPaginator/Pagination/sliding.html.twig'     # sliding pagination controls template
        sortable: '@KnpPaginator/Pagination/sortable_link.html.twig' # sort link template
        filtration: '@KnpPaginator/Pagination/filtration.html.twig'  # filters template
   </span></pre>
- dans le fichier repository
  aller dans <span class="y">src/Repository/ArticleRepository.php</span>
  ajouter la function:
   <pre><span class="c">
       public function filter(){
        return $this->createQueryBuilder('a')
                    ->orderBy('a.id', 'DESC');
    }
   </span></pre>
- dans le fichier controller
  aller dans <span class="y">src/Controller/ArticleController.php</span>
  au niveau de la route "index" ajouter les classes <span class="c">PaginatorInterface $paginator, Request $request</span>
  et ajouter
   <pre><span class="c">
           $pagination = $paginator->paginate(
            $articleRepository->filter(), /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            2 /*limit per page*/
        );
   </span></pre>
  et modifier ça <span class="c">'articles' => $articleRepository->findAll(),</span> par ça <span class="c">'articles' => $pagination</span>
- dans le fichier twig
  allez dans le fichier <span class="y">src/templates/articles/index.html.twig</span> et ajouter ça en dessous de la boucle
   <pre><span class="c">
      &lt;div class="navigation">
         {{ knp_pagination_render(articles) }}
      &lt;/div>
   </span></pre>

## gestion des rôles

- fichier security
  allez dans <span class="y">config/packages/security.yaml</span>
  ajouter entre "main:" et "lazy: true" "access_denied_url: /access/denied"
  <pre><span class="c">
   main:
         access_denied_url: /access/denied
         lazy: true
  </span></pre>
  ensuite gérer la gestion des pages
  <span class="c">
  - { path: ^/commentaire/new, role: ROLE_USER }
  - { path: ^/commentaire/[0-9]+/edit, role: ROLE_ADMIN }
  - { path: ^/commentaire/[0-9]+/delete, role: ROLE_ADMIN }
    </span>
    seul les admin (ROLE_ADMIN) pourront allais sur ces pages là ([0-9]+ représente tout les nombre, ici les ID)

## BackOffice avec le bundle EasyAdmin

[lien GIT](https://github.com/EasyCorp/EasyAdminBundle)
[lien symfony](https://symfony.com/bundles/EasyAdminBundle/current/design.html)

- intallation
  commande: <span class="g">composer require easycorp/easyadmin-bundle</span>
- créer le dashboard
  commande: <span class="g">php bin/console make:admin:dashboard</span>
- modifier le controller
  aller dans <span class="y">src/Controller/Admin/DashBoardController.php</span>
  modifier le return par <span class="y">return $this->render('admin/dashboard.html.twig');</span>
- créer le twig
  créer dans le dossier <span class="y">template</span> le dossier/fichier <span class="y">Admin/dashboard.html.twig</span>
  vous pouvez ajouter <span class="c">{% extends "@EasyAdmin/page/content.html.twig" %}</span> dans le twig pour avoir un début de mises en page
- ajout de la gestion des Users
  retourner dans le controller
  aller dans <span class="y">src/Controller/Admin/DashBoardController.php</span>
  modifier tout le contenu de la méthod <span class="c">configureMenuItems()</span> par
  <pre><span class="c">
          return [
            MenuItem::linkToDashboard('Dashboard', 'fa fa-home'),
  
            MenuItem::section('Users'),
            MenuItem::linkToCrud('Comments', 'fa fa-comment', Comment::class),
            MenuItem::linkToCrud('Users', 'fa fa-user', User::class),
        ];
  </span></pre>

- ajout du crud admin
  commande: <span class="g">php bin/console make:admin:crud</span> (sélectionner l'entity)

## <span style="color: orange;">Gestion des images avec Vich</span>

- installation
  voici le [tuto d'installation](https://github.com/dustin10/VichUploaderBundle/blob/master/docs/installation.md)
  commande: <span class="g">composer require vich/uploader-bundle</span> (installe le bundle Vich)
  écrivez 'yes' (Y)
- utilisation / configuration
  [lien du guide](https://github.com/dustin10/VichUploaderBundle/blob/master/docs/usage.md)

  - config packages
  rendez vous dans <span class="y">config/packages/vich_uploader.yams</span> (si le fichier n'est pas créer c'est que l'installation à raté)
  ajouté ça:
  <pre><span class="c">
  mappings:
      products:
          uri_prefix: /images/products
          upload_destination: '%kernel.project_dir%/public/images/products'
          namer: Vich\UploaderBundle\Naming\SmartUniqueNamer
          inject_on_load: false
          delete_on_update: true
          delete_on_remove: true
  </span></pre>

  inject_on_load: on injecte automatiquement l'image dans l'objet ?
  delete_on_update: si ont met à jour l'image ont supprime la première ?
  delete_on_remove: si l'objet est supprimé ou supprime l'image ?

  - modifié les entity
  allais dans <span class="y">src/entity/NomEntity.php</span>
  ajouté les deux "use" suivants en haut du fichier:
  <span class="c">use Symfony\Component\HttpFoundation\File\File;
  use Vich\UploaderBundle\Mapping\Annotation as Vich;</span>
  ajouter
  <span class="c">#[Vich\Uploadable]</span>
  juste au dessus de <span class="c">class Article {</span>
  &&
  <span class="c">#[Vich\UploadableField(mapping: 'products', fileNameProperty: 'image', size: 'imageSize')]</span>
  <span class="c">private ?File $imageFile = null;</span>
  au dessus de <span class="c">private ?string $image = null;</span>
  (products = nom du mapping // fileNameProperty = au nom de l'image (ici 'image) // size = taille de l'image (optionnel))
  &&
  <pre><span class="c">/**

  * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile|null $imageFile
    \*/
    public function setImageFile(?File $imageFile = null): void
    {
    $this->imageFile = $imageFile;
    }

  public function getImageFile(): ?File
  {
  return $this->imageFile;
  }</span></pre>

  - modifié le formulaire
    allais dans <span class="y">src/Form/NomForm.php</span>
    et modif <span class="c">->add('image')</span> dans le <span class="c">$builder</span> par
    <span class="c">->add('imageFile', VichImageType::class);</span>
