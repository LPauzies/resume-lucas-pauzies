<?php

/* METADATAS */
$head = Array(
  'description' => '',
  'keywords' => 'blog, geek, lifestyle, jeux, vidéos, jeux vidéos, articles, cinéma, culture, high, tech, high-tech',
  'author' => 'Lucas "Cair0n" Pauzies',
  'head_img' => '/media/imgs/ico/icon.png',
  'title_site' => 'Lucas "Cair0n" Pauzies'
);

/* TOP COMPONENT */
$top = Array(
  'status' => 'Jeune ingénieur diplômé',
  'hobbies' => 'Nouvelles technologies',
  'job' => 'A l\'écoute du marché',
  'desc' => 'Jeune ingénieur diplômé passionné de nouvelles technologies, à l\'écoute du marché',
  'contact' => 'Me contacter',
  'topic' => 'Objet',
  'email' => 'Email',
  'body' => 'Corps',
  'send' => 'Envoyer',
  'errorEmail' => 'Adresse mail invalide, veuillez la modifier ou en rentrer une nouvelle valide.',
  'errorTopic' => 'L\'objet du message est vide, veuillez le remplir et réessayer.',
  'errorBody' => 'Le corps du message est vide, veuillez le remplir et réessayer.',
  'success' => 'Message envoyé ! Merci à vous !'
);

/* EDUCATION COMPONENT */
$education = Array(
  'title' => 'Formation',
  'eisti' => 'Ecole Internationale des Sciences du Traitement de l\'Information',
  'education' => Array(
    Array(
      'date' => '2018-2019',
      'title' => 'Cycle ingénieur, spécialité Cloud Computing'
    ),
    Array(
      'date' => '2016-2018',
      'title' => 'Cycle ingénieur spécialité informatique'
    ),
    Array(
      'date' => '2014-2016',
      'title' => 'Cycle Préparatoire'
    )
  ),
  'pic' => '/media/imgs/components/logo.png'
);

/* EXPERIENCES COMPONENT */
$experiences = Array(
  'title' => 'Expériences professionnelles et projets',
  'experiences' => Array(
    Array(
      "date" => "Septembre 2018 - Septembre 2019",
      "name" => "Alternance Ingénieur-Développeur JAVA",
      "company" => "TOTAL SA",
      "city" => "Pau",
      "country" => "France",
      "description" => Array(
        "Développeur JAVA pour le service AVO sur le le logiciel de géologie SISMAGE",
        "Au service du \"métier\" pour le développement de nouveaux outils d'analyse sismique",
        "Aide au développement de POC pour les modèles géophysiques",
      ),
      "technologies" => Array(
        "Java"
      ),
          ),
    Array(
      "date" => "Avril 2018 - Août 2018",
      "name" => "Stage Data Science Exploration-Production",
      "company" => "TOTAL SA",
      "city" => "Pau",
      "country" => "France",
      "description" => Array(
        "Création d’un moteur d’apprentissage corrélant des données en quasi temps-réel",
        "Détection de signaux faibles annonciateurs de dysfonctionnements potentiels",
        "Modélisation DataScience / Benchmarking d’algorithmes de Machine learning",
        "Optimisation combinatoire / Statistiques avancées / Metrics & Scoring",
        "Aide à la prise de décision via DataVisualization",
      ),
      "technologies" => Array(
        "Python (Pandas, Scikit-Learn, Matplotlib)",
        "PHP",
        "Javascript (D3.js, plotly.js)",
        "PostGreSQL"
      ),
          ),
    Array(
      "date" => "Mars 2018 - Avril 2018",
      "name" => "Optimisation du problème à N-Corps",
      "duration" => "2 mois",
      "company" => "EISTI",
      "city" => "Pau",
      "country" => "France",
      "description" => Array(
        "Parallélisation de l’algorithme naı̈f du problème à N-Corps",
        "Calcul effectué sur le supercalculateur de Gallice CESGA",
        "Echange des données calculées en temps réel via socket/websocket",
        "Affichage en temps réel des positions des particules en Javascript"
      ),
      "technologies" => Array(
        "C++ (OpenMP, MPI, Socket)",
        "Python (WebSocket)",
        "Javascript (plotly.js)"
      ),
          ),
    Array(
      "date" => "Octobre 2017 - Janvier 2018",
      "name" => "Site web pour l'association Esprit Sport",
      "duration" => "3 mois",
      "company" => "EISTI",
      "city" => "Pau",
      "country" => "France",
      "description" => Array(
        "Gestion d'une équipe de 30 étudiants-développeurs en AGILE",
        "Création du cahier des charges",
        "Définition des user stories et des sprints",
        "Dialogue et échange avec le client à chaque fin de sprint"
      ),
      "technologies" => Array(
        "J2EE (Spring, Hibernate)",
        "Javascript (Angular 4)",
        "HTML5",
        "CSS3 (Bootstrap)",
        "MySQL"
      ),
          ),
    Array(
      "date" => "Juin 2017 - Août 2017",
      "name" => "Stage Développement Web",
      "company" => "Novosibirsk State University",
      "city" => "Novosibirsk",
      "country" => "Russie",
      "description" => Array(
        "Mise à jour et modernisation d’un site web",
        "Implémentation d’outils d’analyses linguistiques pour le département de recherche linguistique",
        "Mise en production : <a target='_blank' href='http://dictaverf.nsu.ru/'>dictaverf.nsu.ru</a>"
      ),
      "technologies" => Array(
        "PHP",
        "Javascript (JQuery, D3.js, plotly.js, jQCloud)",
        "PostGreSQL"
      ),
          ),
  ),
);

/* SKILLS COMPONENT */
$skills = Array(
  'title' => 'Compétences en développement',
  'title1' => 'Langages de programmation',
  'languages' => Array(
    Array(
      "language" => "Python",
      "mark" => "90",
      "desc" => "Python est un langage de programmation objet interprété, multi-paradigme et multiplateformes.
      Il favorise la programmation impérative structurée, fonctionnelle et orientée objet. Il est doté d'un typage dynamique fort, d'une gestion automatique de la mémoire par ramasse-miettes et d'un système de gestion d'exceptions.
      Un de mes langages favoris, j'ai pu exploiter la puissance de ses bibliothèques destinées au traitement de la donnée (<a href='https://pandas.pydata.org/'>Pandas</a>, <a href='http://www.numpy.org/'>NumPy</a>), à l'intelligence artificielle (<a href='https://scikit-learn.org/stable/'>Scikit-Learn</a>, <a href='https://www.tensorflow.org/'>TensorFlow</a>, <a href='https://keras.io/'>Keras</a>, <a href='https://facebook.github.io/prophet/'>Prophet</a>) mais également à ses cas d'utilisations en tant que langage web (<a href='https://www.djangoproject.com/'>Django</a>, <a href='http://flask.pocoo.org/'>Flask</a>)."
    ),
    Array(
      "language" => "PHP",
      "mark" => "95",
      "desc" => "PHP (Hypertext PreProcessor) est un langage de programmation libre, principalement utilisé pour produire des pages Web dynamiques via un serveur HTTP, mais pouvant également fonctionner comme n'importe quel langage interprété de façon locale. PHP est un langage impératif orienté objet.
      Sans contestation, mon langage préféré, dès que je dois réaliser une application web, je n'hésite pas à utiliser PHP pour sa simplicité de mise en place et sa facilité d'écriture.
      J'ai pu utiliser des framework comme <a href='https://symfony.com/'>Symfony</a> ou <a href='https://laravel.com/'>Laravel</a> ou bien mêler facilement mon PHP Vanilla (comme celui du site que vous êtes en train de parcourir) à l'utilisation d'un serveur Apache ou Nginx sans demander des configurations complexes."
    ),
    Array(
      "language"=>"Java",
      "mark"=>'85',
      "desc"=>"Java est un langage de programmation orienté objet créé par James Gosling et Patrick Naughton, employés de Sun Microsystems.
      La particularité et l'objectif central de Java est que les logiciels écrits dans ce langage doivent être très facilement portables sur plusieurs systèmes d’exploitation tels que Unix, Windows, Mac OS ou GNU/Linux, avec peu ou pas de modifications, mais qui ont l'inconvénient d'être plus lourd à l'exécution à cause de la JVM.
      Il est le langage le plus utilisé à l'heure actuelle dans l'industrie du développement logiciel, et j'ai pu l'utiliser au travers de <a href='https://spring.io/'>Spring</a> ou bien encore créer des ORM rapidement grâce à <a href='http://hibernate.org/'>Hibernate</a>."
    ),
    Array(
      'language' => 'C',
      'mark' => '65',
      'desc' => "C est un langage de programmation impératif généraliste. Inventé au début des années 1970 pour réécrire UNIX, C est devenu un des langages les plus utilisés. De nombreux langages plus modernes comme C++, C#, Java et PHP ont une syntaxe similaire au C et reprennent en partie sa logique.
      Ses caractéristiques de langage bas niveau en font un langage privilégié quand on cherche à maîtriser les ressources matérielles utilisées, le langage machine et les données binaires générées par les compilateurs étant relativement prévisibles.
      Ce langage est donc extrêmement utilisé dans des domaines comme la programmation embarquée sur microcontrôleurs, les calculs intensifs, l'écriture de systèmes d'exploitation et les modules où la rapidité de traitement est importante."
    ),
    Array(
      "language" => "C++",
      "mark" => '70',
      "desc" => "C++ est un langage de programmation compilé permettant la programmation sous de multiples paradigmes (comme la programmation procédurale, orientée objet ou générique).
      Ses bonnes performances, et sa compatibilité avec le C en font un des langages de programmation les plus utilisés dans les applications où la performance est critique.
      Ce langage permet, entre autre, de gérer la mémoire au plus proche de la machine grâce à une syntaxe de plus haut niveau que le C."
    ),
    Array(
      "language" => "HTML",
      "mark" => "100",
      "desc" => "L’HyperText Markup Language, généralement abrégé HTML, est le langage de balisage conçu pour représenter les pages web. C’est un langage permettant d’écrire de l’hypertexte, d’où son nom. HTML permet également de structurer sémantiquement et logiquement et de mettre en forme le contenu des pages, d’inclure des ressources multimédias dont des images, des formulaires de saisie et des programmes informatiques.
      Il est la base de la programmation web, très simple à apprendre.
      Les subtilités de ce langage interviennent dans le référencement et l'utilisation des bonnes balises au bon endroit, au bon moment pour permettre un référencement optimisé."
    ),
    Array(
      "language" => "CSS",
      "mark" => "80",
      "desc" => "Les feuilles de style en cascade, généralement appelées CSS de l'anglais \"Cascading Style Sheets\", forment un langage informatique qui décrit la présentation des documents HTML et XML. Les standards définissant CSS sont publiés par le World Wide Web Consortium (W3C).
      L'enjeu majeur de ce langage consiste à la séparation entre la structure et la présentation d'une page web, ce qui raccourci la taille des pages écrites.
      J'utilise le CSS sous la forme de framework pour améliorer le côté responsive de mes applications, notamment via <a href='https://getbootstrap.com/'>Bootstrap</a>, <a href='https://semantic-ui.com/'>SemanticUI</a> ou encore <a href='https://materializecss.com/'>Materialize</a>"
    ),
    Array(
      "language" => "Javascript",
      "mark" => "85",
      "desc" => "JavaScript est un langage de programmation de scripts principalement employé dans les pages web interactives mais aussi pour les serveurs avec, par exemple, l'utilisation de Node.js. C'est un langage orienté objet à prototype.
      Le langage supporte le paradigme objet, impératif et fonctionnel. JavaScript est le langage possédant le plus large écosystème grâce à son gestionnaire de dépendances npm, avec plus de 500 000 paquets.
      Dans la plupart de mes applications, j'ai utilisé du Javascript Vanilla ou bien <a href='https://jquery.com/'>JQuery</a>, maintenant je me focalise plus sur <a href='https://angular.io/'>Angular</a> ou encore <a href='https://reactjs.org/'>React</a>."
    ),
    Array(
      "language" => "Scala",
      "mark" => "70",
      "desc" => "Scala est un langage de programmation multi-paradigme conçu pour exprimer les modèles de programmation courants dans une forme concise et élégante.
      Scala intègre les paradigmes de programmation orientée objet et de programmation fonctionnelle, avec un typage statique.
      Il est prévu pour être compilé en bytecode Java (exécutable sur la JVM), ou .Net, dans un cas d'utilisation sur JVM, il est possible d'utiliser des bibliothèques exclusivement écrites en JAVA."
    ),
    Array(
      "language" => "SQL",
      "mark" => "55",
      "desc" => "SQL (Structured Query Language) est un langage normalisé servant à exploiter des bases de données relationnelles.
      La partie langage de manipulation des données de SQL permet de rechercher, d'ajouter, de modifier ou de supprimer des données dans les bases de données relationnelles.
      Outre le langage de manipulation des données, la partie langage de définition des données permet de créer et de modifier l'organisation des données dans la base de données, la partie langage de contrôle de transaction permet de commencer et de terminer des transactions, et la partie langage de contrôle des données permet d'autoriser ou d'interdire l'accès à certaines données à certaines personnes."
    ),
  ),
  'title2' => 'Frameworks',
  'frameworks' => Array(
    Array(
      'title' => 'Javascript',
      'items' => Array(Array('React.js','80'),Array('Angular','70'),Array('Ionic','60'),Array('JQuery','80'))
    ),
    Array(
      'title' => 'CSS',
      'items' => Array(Array('SemanticUI','90'),Array('Bootstrap','95'),Array('Material Design','65'),Array('MaterializeCSS','90'))
    ),
    Array(
      'title' => 'Java',
      'items' => Array(Array('Spring','65'),Array('Hibernate','65'))
    ),
    Array(
      'title' => 'Python',
      'items' => Array(Array('Django','80'),Array('Flask','60'))
    ),
    Array(
      'title' => 'PHP',
      'items' => Array(Array('Symfony','75'),Array('Laravel','60'))
    )
  ),
  'title3' => 'Visualisation de la donnée',
  'dataviz' => Array(
    Array(
      'title' => 'Javascript',
      'items' => Array(Array('D3.js','70'),Array('plotly.js','100'))
    ),
    Array(
      'title' => 'Python',
      'items' => Array(Array('Seaborn','85'),Array('Matplotlib','95'))
    )
  ),
  'title4' => 'Systèmes de gestions de bases de données',
  'sgbd' => Array(
    Array(
      'title' => 'SQL',
      'items' => Array("MySQL",'SQLite','PostGreSQL')
    ),
    Array(
      'title' => 'NoSQL',
      'items' => Array("Neo4J","MongoDB")
    )
  )
);

/* METHODS COMPONENT */
$methods = Array(
  'title' => 'Compétences complémentaires',
  'title1' => 'Méthodes et outils de gestion',
  'methods' => Array(
    Array(
      'title' => 'Méthodes',
      'items' => Array("Merise","UML","Design Patterns","CRISP-DM (DataScience)")
    ),
    Array(
      'title' => 'Gestion de projets',
      'items' => Array("AGILE","Jira","Confluence","Slack")
    )
  ),
  'title2' => 'Concepts mathématiques, logique et intelligence artificielle',
  'maths' => Array(
    Array(
      'title' => 'Mathématiques et logique',
      'items' => Array("Traitement de données (Data processing)","Analyse numérique","Statistiques avancées","Optimisation linéaire","Théorie des graphes")
    ),
    Array(
      'title' => 'Inteliigence artificielle',
      'items' => Array("Machine Learning (Scikit-Learn, Prophet)","Deep Learning / Réseaux de neurones (TensorFlow, Keras)","Optimisation déterministe, heuristique, combinatoire")
    )
  ),
  'title3' => 'Logiciels',
  'others' => Array(
    Array(
      'title' => 'Systèmes d\'exploitation',
      'items' => Array("Windows","MacOS","Distributions Linux")
    ),
    Array(
      'title' => 'Bureautique',
      'items' => Array("Suite Microsoft","Latex","OpenOffice")
    ),
    Array(
      'title' => 'Informatique décisionnelle',
      'items' => Array("Tableau","Power BI")
    )
  )
);

$footer = Array(
  'done' => 'Réalisé par Lucas Pauzies avec <a target="_blank" class="link" href="http://www.php.net/">PHP</a>, <a target="_blank" class="link" href="https://jquery.com/">JQuery</a> et <a target="_blank" class="link" href="https://materializecss.com/">MaterializeCSS</a>'
);

?>
