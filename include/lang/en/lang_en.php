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
  'status' => 'Young graduate engineer',
  'hobbies' => 'New technologies',
  'job' => 'Listening to the market',
  'contact' => 'Contact me',
  'topic' => 'Topic',
  'email' => 'Email',
  'body' => 'Body',
  'send' => 'Send',
  'errorEmail' => 'Email address not valid, please try again with a correct address.',
  'errorTopic' => 'The message topic is empty, please fill in it before sending.',
  'errorBody' => 'The message body is empty, please fill in it before sending.',
  'success' => 'Message sent ! Thank you and have a great day !'
);

/* EDUCATION COMPONENT */
$education = Array(
  'title' => 'Education',
  'eisti' => 'Ecole Internationale des Sciences du Traitement de l\'Information (International School of Information Processing Sciences) <br><span class="it">On the top of the best engineering schools in France</span>',
  'education' => Array(
    Array(
      'date' => '2018-2019',
      'title' => 'Engineering cycle, Cloud Computing specialty'
    ),
    Array(
      'date' => '2016-2018',
      'title' => 'Engineer\'s degree in computer science'
    ),
    Array(
      'date' => '2014-2016',
      'title' => 'Preparatory cycle'
    )
  ),
  'pic' => '/media/imgs/components/logo.png'
);

/* EXPERIENCES COMPONENT */
$experiences = Array(
  'title' => 'Professional experiences and projects',
  'experiences' => Array(
    Array(
      "date" => "Sept 2018 - Sept 2019",
      "name" => "JAVA engineer-developer",
      "company" => "TOTAL SA",
      "city" => "Pau",
      "country" => "France",
      "description" => Array(
        "JAVA Developer for the AVO Service on the SISMAGE Geology Software",
        "Working for \"business\" to develop new seismic analysis tools",
        "POC development assistance for geophysical models",
      ),
      "technologies" => Array(
        "Java"
      ),
          ),
    Array(
      "date" => "Apr 2018 - Aug 2018",
      "name" => "Data Science Internship at Exploration-Production",
      "company" => "TOTAL SA",
      "city" => "Pau",
      "country" => "France",
      "description" => Array(
        "Creating a learning engine that correlates near real-time data",
        "Detection of weak signals announcing potential malfunctions",
        "Data Science Modeling / Benchmarking of Machine Learning Algorithms",
        "Combinatorial Optimization / Advanced Statistics / Metrics & Scoring",
        "Decision Support with Data Visualization",
      ),
      "technologies" => Array(
        "Python (Pandas, Scikit-Learn, Matplotlib)",
        "PHP",
        "Javascript (D3.js, plotly.js)",
        "PostGreSQL"
      ),
          ),
    Array(
      "date" => "Mar 2018 - Apr 2018",
      "name" => "N-Body naive algorithm optimization",
      "company" => "EISTI",
      "city" => "Pau",
      "country" => "France",
      "description" => Array(
        "Parallelization of the naive algorithm of the N-Body problem",
        "Calculation performed on the CESGA Gallicia supercomputer",
        "Exchange of calculated data in real-time via socket / websocket",
        "Real-time display of particle positions with Javascript"
      ),
      "technologies" => Array(
        "C++ (OpenMP, MPI, Socket)",
        "Python (WebSocket)",
        "Javascript (plotly.js)"
      ),
          ),
    Array(
      "date" => "Oct 2017 - Jan 2018",
      "name" => "Website for Esprit Sport association",
      "company" => "EISTI",
      "city" => "Pau",
      "country" => "France",
      "description" => Array(
       "Management of a team of 30 student-developers with AGILE method",
       "Creation of the specifications",
       "User stories and sprint definitions",
       "Dialogue and exchange with the customer at each sprint end"
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
      "date" => "Jun 2017 - Aug 2017",
      "name" => "Web developper internship",
      "company" => "Novosibirsk State University",
      "city" => "Novosibirsk",
      "country" => "Russie",
      "description" => Array(
       "Update and modernization of a PHP website",
       "Implementation of linguistic analysis tools for the linguistic research department",
       "Hyperlink : <a target='_blank' href='http://dictaverf.nsu.ru/'>dictaverf.nsu.ru</a>"
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
  'title' => 'Development skills',
  'title1' => 'Programming languages',
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
  'title3' => 'Data Visualization',
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
  'title4' => 'Database Management System',
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
  'title' => 'Additional skills',
  'title1' => 'Management tools and methods',
  'methods' => Array(
    Array(
      'title' => 'Methods',
      'items' => Array("Merise","UML","Design Patterns","CRISP-DM (Workflow DataScience)")
    ),
    Array(
      'title' => 'Project management',
      'items' => Array("AGILE","Jira","Confluence","Slack")
    )
  ),
  'title2' => 'Mathematical concepts, logic and artificial intelligence',
  'maths' => Array(
    Array(
      'title' => 'Mathematics and logic',
      'items' => Array("Data processing", "Numerical analysis", "Advanced statistics", "Linear optimization", "Graph theory")
    ),
    Array(
      'title' => 'Artificial intelligence',
      'items' => Array("Machine Learning (Scikit-Learn, Prophet)", "Deep Learning / Neural Networks (TensorFlow, Keras)", "Deterministic Optimization, Heuristics, Combinatorics" )
    )
  ),
  'title3' => 'Software',
  'others' => Array(
    Array(
      'title' => 'Operating Systems',
      'items' => Array("Windows","MacOS","Linux")
    ),
    Array(
      'title' => 'Office software',
      'items' => Array("Microsoft Office","Latex","OpenOffice")
    ),
    Array(
      'title' => 'Business Intelligence',
      'items' => Array("Tableau","Power BI")
    )
  )
);

$footer = Array(
  'done' => 'Done by Lucas Pauzies with <a target="_blank" class="link" href="http://www.php.net/">PHP</a>, <a target="_blank" class="link" href="https://jquery.com/">JQuery</a> et <a target="_blank" class="link" href="https://materializecss.com/">MaterializeCSS</a>'
);

?>
