<?php
$lang = $_GET['lang'] ?? 'fr';
$translations = [
    'fr' => [
        'title' => 'Portfolio de Shanni Moulin',
        'header' => 'Assistante Développeuse Web en Apprentissage',
        'about' => 'À propos',
        'about_text' => "Je m'appelle Shanni Moulin, motivée, rigoureuse et passionnée par le développement web. Je recherche une entreprise pour un contrat d'apprentissage en tant qu'assistante développeuse web à partir de septembre 2025.",
        'contact' => 'Contact',
        'skills' => 'Compétences',
        'projects' => 'Projets',
        'formation' => 'Formation',
        'qualities' => 'Qualités & Soft Skills',
        'interests' => "Centres d'intérêt",
        'address' => 'Rue de Fronia 45, 6440 BOUSSU LEZ WALCOURT',
        'phone' => '0497/742173',
        'email' => 'shannimoulin@gmail.com',
        'github' => 'https://github.com/shannimln',
        'linkedin' => 'https://www.linkedin.com/in/shanni-moulin-110822275/',
        'projects_list' => [
            [
                'title' => 'Shop jeux vidéo (alternance)',
                'desc' => 'Shop fictif sur une vente de jeu vidéo.',
                'url' => 'https://gameshop.nicolasdeprets.online'
            ],
            [
                'title' => 'Site vitrine (personnel)',
                'desc' => 'Projet site vitrine personnel.',
                'url' => 'http://www.legacycreators.nicolasdeprets.online'
            ],
            [
                'title' => 'Workshop de fin d\'année (groupe)',
                'desc' => 'Projet collaboratif réalisé en groupe lors du workshop de fin d\'année.',
                'url' => 'https://www.workshopgroupe.nicolasdeprets.online/index.php?lang=fr'
            ]
        ],
        'formation_list' => [
            'IFAPME E6K –A6K Charleroi',
            'Cours en développement web (HTML, CSS, ...)',
            'Apprentissage des bases de la programmation et des bases de données',
            'Travail sur des projets pratiques en groupe et en autonomie (workshop)'
        ],
        'qualities_list' => [
            "Esprit d'équipe",
            "Communication",
            "Autonomie",
            "Adaptabilité",
            "Sens du détail",
            "Rigueur",
            "Curiosité",
            "Envie d'apprendre"
        ],
        'interests_list' => [
            "Jeux vidéo",
            "Animation de jeux vidéo en ligne",
            "Pâtisser",
            "Lecture",
            "Balade à vélo",
            "La Bretagne"
        ]
    ],
    'en' => [
        'title' => "Shanni Moulin's Portfolio",
        'header' => 'Web Developer Assistant in Apprenticeship',
        'about' => 'About',
        'about_text' => "My name is Shanni Moulin, motivated, rigorous and passionate about web development. I am looking for a company for an apprenticeship contract as a web developer assistant from September 2025.",
        'contact' => 'Contact',
        'skills' => 'Skills',
        'projects' => 'Projects',
        'formation' => 'Education',
        'qualities' => 'Qualities & Soft Skills',
        'interests' => "Interests",
        'address' => 'Rue de Fronia 45, 6440 BOUSSU LEZ WALCOURT',
        'phone' => '0497/742173',
        'email' => 'shannimoulin@gmail.com',
        'github' => 'https://github.com/shannimln',
        'linkedin' => 'https://www.linkedin.com/in/shanni-moulin-110822275/',
        'projects_list' => [
            [
                'title' => 'Video Game Shop (apprenticeship)',
                'desc' => 'Fictional shop for video game sales.',
                'url' => 'https://gameshop.nicolasdeprets.online'
            ],
            [
                'title' => 'Showcase Website (personal)',
                'desc' => 'Personal showcase website project.',
                'url' => 'http://www.legacycreators.nicolasdeprets.online'
            ],
            [
                'title' => 'End-of-year Workshop (group)',
                'desc' => 'Collaborative project carried out in a group during the end-of-year workshop.',
                'url' => 'https://www.workshopgroupe.nicolasdeprets.online/index.php?lang=fr'
            ]
        ],
        'formation_list' => [
            'IFAPME E6K –A6K Charleroi',
            'Web development courses (HTML, CSS, ...)',
            'Learning programming and database basics',
            'Practical group and solo projects (workshop)'
        ],
        'qualities_list' => [
            "Team spirit",
            "Communication",
            "Autonomy",
            "Adaptability",
            "Attention to detail",
            "Rigor",
            "Curiosity",
            "Willingness to learn"
        ],
        'interests_list' => [
            "Video games",
            "Online video game animation",
            "Baking",
            "Reading",
            "Cycling",
            "Brittany"
        ]
    ]
];
$t = $translations[$lang];
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>" x-data="{ darkMode: localStorage.getItem('theme') === 'dark' }" :class="{ 'dark': darkMode }">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $t['title'] ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Roboto', 'sans-serif'],
                    },
                    colors: {
                        primary: {
                            DEFAULT: '#f5f6fa',
                            dark: '#1a2233'
                        },
                        secondary: {
                            DEFAULT: '#e3e8ee',
                            dark: '#232946'
                        },
                        accent: {
                            DEFAULT: '#ff8906',
                            dark: '#ff8906'
                        },
                        'gray-border': {
                            DEFAULT: '#e5e7eb',
                            dark: '#30363d'
                        },
                        'gray-text': {
                            DEFAULT: '#232946',
                            dark: '#b8c1ec'
                        },
                    },
                },
            },
        };
    </script>
    <style>
        html {
            transition: background 0.3s;
        }

        .fade-in-up-content {
            opacity: 0;
            transform: translateY(60px) scale(0.98);
            filter: blur(8px);
            transition:
                opacity 1s cubic-bezier(.4, 0, .2, 1),
                transform 1s cubic-bezier(.4, 0, .2, 1),
                filter 1s cubic-bezier(.4, 0, .2, 1);
        }

        .fade-in-up-content.visible {
            opacity: 1;
            transform: translateY(0) scale(1);
            filter: blur(0);
        }

        section {
            margin-bottom: 3rem;
        }

        section:last-of-type {
            margin-bottom: 0;
        }
    </style>
</head>

<body :class="darkMode ? 'dark bg-primary-dark text-gray-text-dark' : 'bg-primary text-gray-text'" class="min-h-screen font-sans transition-colors duration-300">
    <!-- Header -->
    <header class="bg-secondary dark:bg-secondary-dark border-b border-gray-border dark:border-gray-border-dark shadow-xl sticky top-0 z-50 transition-colors duration-300">
        <div class="max-w-6xl mx-auto flex flex-col md:flex-row justify-between items-center py-6 px-4 gap-4">
            <h1 class="text-4xl font-extrabold tracking-tight flex items-center gap-3 drop-shadow-lg">
                <i class="fas fa-code text-accent animate-pulse"></i>
                <?= $t['title'] ?>
            </h1>
            <nav class="flex gap-4 text-accent font-semibold text-lg">
                <a href="?lang=fr" class="hover:underline <?= $lang === 'fr' ? 'underline font-bold' : '' ?>">Français</a>
                <a href="?lang=en" class="hover:underline <?= $lang === 'en' ? 'underline font-bold' : '' ?>">English</a>
                <button @click="darkMode = !darkMode; localStorage.setItem('theme', darkMode ? 'dark' : 'light')" class="ml-4 px-3 py-1 rounded bg-accent text-white font-bold shadow hover:bg-accent/80 transition">
                    <span x-show="!darkMode"><i class="fas fa-moon"></i></span>
                    <span x-show="darkMode"><i class="fas fa-sun"></i></span>
                </button>
            </nav>
        </div>
    </header>

    <!-- Hero / Bio -->
    <?php
    $chemin_image = "img/myself.jpg";
    ?>
    <section id="section-1" class="max-w-5xl mx-auto flex flex-col md:flex-row items-center gap-10 py-16 px-4 
        bg-[#fff6e5] dark:bg-[#232946] rounded-xl shadow-lg transition-colors duration-300">
        <div class="flex-shrink-0 relative group fade-in-up-content">
            <img src="<?php echo $chemin_image; ?>" alt="Shanni Moulin"
                class="w-48 h-48 rounded-full border-4 border-accent shadow-2xl object-cover object-center transition-transform duration-300 group-hover:scale-105 bg-transparent" />
            <span class="absolute bottom-2 right-2 bg-accent text-white px-3 py-1 rounded-full text-xs font-bold shadow-lg">#OpenToWork</span>
        </div>
        <div class="fade-in-up-content">
            <h2 class="text-3xl font-bold mb-4 flex items-center gap-3">
                <i class="fa-solid fa-user text-accent"></i>
                <?= $t['about'] ?>
            </h2>
            <div class="flex flex-wrap items-center gap-3 mb-2">
                <span class="inline-block bg-accent/20 text-accent px-3 py-1 rounded-full text-xs font-semibold uppercase tracking-wider"><?= $t['header'] ?></span>
                <span class="inline-block bg-green-600/20 text-green-400 px-3 py-1 rounded-full text-xs font-semibold tracking-wider"><?= $t['address'] ?></span>
            </div>
            <p class="text-gray-text dark:text-[#e3e8ee] mb-6 text-lg leading-relaxed border-l-4 border-accent pl-4 italic"><?= $t['about_text'] ?></p>
            <div class="flex flex-col gap-2 text-base text-gray-900 dark:text-[#e3e8ee] mb-4">
                <span><i class="fas fa-map-marker-alt text-accent"></i> <?= $t['address'] ?></span>
                <span><i class="fas fa-phone text-accent"></i> <?= $t['phone'] ?></span>
                <span><i class="fas fa-envelope text-accent"></i> <a href="mailto:<?= $t['email'] ?>" class="underline text-gray-900 dark:text-[#e3e8ee]"><?= $t['email'] ?></a></span>
            </div>
            <div class="flex gap-6 mt-2">
                <a href="<?= $t['github'] ?>" target="_blank" class="text-gray-300 hover:text-accent text-2xl flex items-center gap-2 transition">
                    <i class="fab fa-github"></i> <span class="text-base font-medium">GitHub</span>
                </a>
                <a href="<?= $t['linkedin'] ?>" target="_blank" class="text-gray-300 hover:text-accent text-2xl flex items-center gap-2 transition">
                    <i class="fab fa-linkedin"></i> <span class="text-base font-medium">LinkedIn</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="section-2" class="max-w-6xl mx-auto py-10 px-4 
        bg-[#e3e8ee] dark:bg-[#1a2233] rounded-xl shadow-lg transition-colors duration-300">
        <div class="fade-in-up-content">
            <h2 class="text-3xl font-bold mb-8 flex items-center gap-3">
                <i class="fa-solid fa-lightbulb text-accent"></i>
                <?= $t['skills'] ?>
            </h2>
            <div class="flex flex-wrap gap-6">
                <div class="flex items-center gap-3 bg-gradient-to-r from-accent to-blue-400 text-white px-6 py-4 rounded-xl shadow-lg text-xl font-semibold hover:scale-105 transition">
                    <i class="fab fa-html5"></i> HTML
                </div>
                <div class="flex items-center gap-3 bg-gradient-to-r from-blue-500 to-blue-700 text-white px-6 py-4 rounded-xl shadow-lg text-xl font-semibold hover:scale-105 transition">
                    <i class="fab fa-css3-alt"></i> CSS / Tailwind / Bootstrap
                </div>
                <div class="flex items-center gap-3 bg-gradient-to-r from-purple-700 to-indigo-700 text-white px-6 py-4 rounded-xl shadow-lg text-xl font-semibold hover:scale-105 transition">
                    <i class="fab fa-php"></i> PHP
                </div>
                <div class="flex items-center gap-3 bg-gradient-to-r from-green-500 to-green-700 text-white px-6 py-4 rounded-xl shadow-lg text-xl font-semibold hover:scale-105 transition">
                    <i class="fas fa-database"></i> MySQL / PhpMyAdmin
                </div>
                <div class="flex items-center gap-3 bg-gradient-to-r from-gray-800 to-gray-900 text-white px-6 py-4 rounded-xl shadow-lg text-xl font-semibold hover:scale-105 transition">
                    <i class="fab fa-git-alt"></i> Git / GitHub / OVH
                </div>
                <div class="flex items-center gap-3 bg-gradient-to-r from-pink-500 to-purple-500 text-white px-6 py-4 rounded-xl shadow-lg text-xl font-semibold hover:scale-105 transition">
                    <i class="fas fa-mobile-alt"></i> Responsive / Optimisation
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="section-3" class="max-w-6xl mx-auto py-10 px-4 
        bg-[#f5f6fa] dark:bg-[#232946] rounded-xl shadow-lg transition-colors duration-300">
        <div class="fade-in-up-content">
            <h2 class="text-3xl font-bold mb-8 flex items-center gap-3">
                <i class="fas fa-folder-open text-accent"></i>
                <?= $t['projects'] ?>
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <?php foreach ($t['projects_list'] as $proj): ?>
                    <div class="bg-[#ffe5ec] dark:bg-[#1a2233] rounded-2xl shadow-xl p-8 flex flex-col gap-4 border border-gray-border hover:scale-[1.03] transition group">
                        <div class="flex items-center gap-4">
                            <i class="fas fa-project-diagram text-accent text-3xl group-hover:rotate-12 transition"></i>
                            <span class="text-2xl font-semibold text-gray-900 dark:text-[#e3e8ee]"><?= $proj['title'] ?></span>
                        </div>
                        <p class="text-gray-text dark:text-[#e3e8ee] text-base"><?= $proj['desc'] ?></p>
                        <a href="<?= $proj['url'] ?>" target="_blank" class="text-accent hover:underline mt-2 flex items-center gap-2 font-semibold">
                            <i class="fas fa-external-link-alt"></i> <?= parse_url($proj['url'], PHP_URL_HOST) ?>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Formation Section -->
    <section id="section-4" class="max-w-6xl mx-auto py-10 px-4 
        bg-[#e3e8ee] dark:bg-[#232946] rounded-xl shadow-lg transition-colors duration-300">
        <div class="fade-in-up-content">
            <h2 class="text-3xl font-bold mb-8 flex items-center gap-3">
                <i class="fa-solid fa-graduation-cap text-accent"></i>
                <?= $t['formation'] ?>
            </h2>
            <div class="bg-[#fff6e5] dark:bg-[#1a2233] rounded-2xl shadow-xl p-8 border border-gray-border">
                <ul class="list-disc ml-6 text-gray-900 dark:text-[#e3e8ee]">
                    <?php foreach ($t['formation_list'] as $item): ?>
                        <li><?= $item ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </section>

    <!-- Qualities & Soft Skills Section -->
    <section id="section-5" class="max-w-6xl mx-auto py-10 px-4 
        bg-[#f5f6fa] dark:bg-[#232946] rounded-xl shadow-lg transition-colors duration-300">
        <div class="fade-in-up-content">
            <h2 class="text-3xl font-bold mb-8 flex items-center gap-3">
                <i class="fa-solid fa-heart text-accent"></i>
                <?= $t['qualities'] ?>
            </h2>
            <ul class="grid grid-cols-2 md:grid-cols-4 gap-6 text-lg text-gray-900 dark:text-[#e3e8ee]">
                <?php foreach ($t['qualities_list'] as $q): ?>
                    <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-accent"></i> <?= $q ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>

    <!-- Interests Section -->
    <section id="section-6" class="max-w-6xl mx-auto py-10 px-4 
        bg-[#ffe5ec] dark:bg-[#1a2233] rounded-xl shadow-lg transition-colors duration-300">
        <div class="fade-in-up-content">
            <h2 class="text-3xl font-bold mb-8 flex items-center gap-3">
                <i class="fa-solid fa-star text-accent"></i>
                <?= $t['interests'] ?>
            </h2>
            <ul class="grid grid-cols-2 md:grid-cols-3 gap-6 text-lg text-gray-900 dark:text-[#e3e8ee]">
                <?php foreach ($t['interests_list'] as $i): ?>
                    <li class="flex items-center gap-2"><i class="fa-solid fa-angle-right text-accent"></i> <?= $i ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>

    <!-- Footer -->
    <footer class="mt-16 py-8 text-center text-gray-400 dark:text-gray-text-dark text-base border-t-2 border-accent/30 bg-secondary dark:bg-secondary-dark backdrop-blur transition-colors duration-300">
        &copy; <?= date('Y') ?> Shanni Moulin. <span class="text-accent"><?= $t['header'] ?></span>
    </footer>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const contents = [
                ...document.querySelectorAll('.fade-in-up-content')
            ];
            contents.forEach(el => el.classList.remove('visible'));
            contents.forEach((el, i) => {
                setTimeout(() => {
                    el.classList.add('visible');
                }, 300 + i * 300);
            });
        });
    </script>
</body>

</html>