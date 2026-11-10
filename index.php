<?php
$name = 'Angela Mae L. Bandoquillo';
$title = 'BSIT Student | Aspiring Web Developer';
$location = 'Taysan, Legazpi City';
$email = 'angelamaebandoquillo@gmail.com';
$phone = '09811768479';

$github = 'https://github.com/AngelaMaeBandoquillo4';
$facebook = 'https://www.facebook.com/angelamaeL.bandoquillo';

$summary = 'A motivated and dedicated 3rd-year Bachelor of Science in Information Technology student with a strong interest in web development, database management, and software development. Has basic knowledge and hands-on experience in developing web-based applications using PHP, HTML, CSS, and MySQL. Familiar with CRUD operations, database integration, and creating user-friendly system interfaces. Willing to learn new technologies, improve technical skills, and gain practical experience in the IT industry.';

$skills = [
    'Programming Languages' => [
        'PHP', 'HTML', 'CSS', 'Basic JavaScript'
    ],
    'Frameworks' => [
        'Basic knowledge of Bootstrap'
    ],
    'Database' => [
        'MySQL', 'Database Management', 'CRUD Operations'
    ],
    'Development Tools' => [
        'Visual Studio Code', 'XAMPP', 'phpMyAdmin', 'GitHub'
    ],
    'Other Skills' => [
        'Web Development', 'Basic UI Design',
        'System Development', 'Database Integration',
        'Troubleshooting and Debugging',
        'Technical Documentation'
    ]
];

$projects = [
    [
        'Student Management System',
        'A web-based application designed to manage and organize student information, registration, and records efficiently. It provides an organized and user-friendly platform for adding, updating, viewing, and archiving student records.',
        [
            'Student Registration',
            'View and Manage Student Records',
            'Update Student Information',
            'Archive Student Records',
            'Organized Student Information'
        ],
        'PHP, HTML, CSS, MySQL, XAMPP'
    ],
    [
        "KALMJC'S CAFE Website",
        'A web-based café management system designed to showcase products, manage customer orders, and organize café information efficiently. It provides a simple and user-friendly platform that helps improve daily café operations and gives customers a convenient browsing experience.',
        [
            'Café Homepage and Information',
            'Product Display and Menu',
            'Customer Order Management',
            'User-Friendly Interface',
            'Organized Product Information'
        ],
        'PHP, HTML, CSS, MySQL'
    ],
    [
        'Registration System',
        'A web-based application designed to manage and organize user information through CRUD (Create, Read, Update, and Delete) operations. It allows users to easily add, view, edit, and delete registration records.',
        [
            'User Registration',
            'Add New Records',
            'View Registered Information',
            'Update Existing Records',
            'Delete Records'
        ],
        'PHP, HTML, CSS, MySQL, XAMPP'
    ],
    [
        'Product Catalog System',
        'A web-based Product Catalog System developed to manage product information efficiently. It allows users to add, edit, delete, and organize products, categories, prices, stock, and descriptions. This project demonstrates practical knowledge of web development, database management, and CRUD operations.',
        [
            'Product Management',
            'Category Management',
            'Add, Edit, and Delete Products',
            'Product Stock and Price Monitoring',
            'Dashboard for Product Information',
            'Organized Product Records'
        ],
        'PHP, HTML, CSS, MySQL, XAMPP, phpMyAdmin'
    ]
];

$experiences = [
    'Participated in academic group projects involving system development and programming.',
    'Collaborated with classmates in planning, designing, and developing web-based applications.',
    'Gained hands-on experience in creating database-driven systems and performing CRUD operations.',
    'Assisted in identifying and troubleshooting basic programming and system errors during project development.'
];

$strengths = [
    [
        'Willingness to Learn',
        'Eager to learn new technologies and improve technical knowledge.'
    ],
    [
        'Problem-Solving Skills',
        'Willing to identify problems and find practical solutions.'
    ],
    [
        'Teamwork and Collaboration',
        'Able to work with others and contribute to group projects.'
    ],
    [
        'Adaptability',
        'Open to learning new tools, technologies, and working environments.'
    ],
    [
        'Time Management',
        'Capable of organizing tasks and managing responsibilities effectively.'
    ]
];

function e($value) {
    return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Personal portfolio of Angela Mae L. Bandoquillo">

    <title><?= e($name) ?> | Portfolio</title>

    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@600;700;800&display=swap" rel="stylesheet">
</head>

<body>

<header class="header">

    <a class="logo" href="#home">Angela<span>.</span></a>

    <button class="menu-toggle" id="menuToggle" aria-label="Toggle navigation" aria-expanded="false">
        ☰
    </button>

    <nav class="navbar" id="navbar">
        <a href="#home" class="active">Home</a>
        <a href="#about">About</a>
        <a href="#skills">Skills</a>
        <a href="#projects">Projects</a>
        <a href="#education">Education</a>
        <a href="#contact">Contact</a>
    </nav>

</header>

<main>

<!-- HOME SECTION -->
<section class="home section" id="home">

    <div class="home-content">

        <p class="eyebrow">WELCOME TO MY PORTFOLIO</p>

        <h1>
            Hello, I'm<br>
            <span><?= e($name) ?></span>
        </h1>

        <h2><?= e($title) ?></h2>

        <p class="intro">
            Passionate about creating useful, user-friendly,
            and meaningful web-based applications.
        </p>

        <div class="button-group">
            <a class="btn" href="#projects">Explore My Projects</a>
            <a class="btn btn-outline" href="#contact">Get In Touch</a>
        </div>

        <div class="social-links">
            <a href="<?= e($github) ?>" target="_blank" rel="noopener noreferrer">GitHub ↗</a>
            <a href="<?= e($facebook) ?>" target="_blank" rel="noopener noreferrer">Facebook ↗</a>
        </div>

        <p class="location">⌖ <?= e($location) ?></p>

    </div>

    <div class="home-image">

        <div class="image-decoration"></div>

        <div class="image-frame">
            <img
                src="images/profile.jpg"
                alt="Portrait of <?= e($name) ?>"
                onerror="this.style.display='none';this.parentElement.classList.add('no-photo');"
            >

            <span class="photo-placeholder">
                ADD YOUR<br>PHOTO HERE
            </span>
        </div>

        <div class="image-note">
            Learning • Creating • Growing
        </div>

    </div>

</section>

<!-- ABOUT SECTION -->
<section class="section about" id="about">

    <div class="section-heading">
        <p class="eyebrow">A LITTLE ABOUT ME</p>
        <h2>About <span>Me</span></h2>
    </div>

    <div class="about-layout">

        <div class="about-card">

            <p><?= e($summary) ?></p>

            <div class="quick-facts">

                <div>
                    <small>Current Year</small>
                    <strong>3rd Year BSIT</strong>
                </div>

                <div>
                    <small>Field of Interest</small>
                    <strong>Web Development</strong>
                </div>

                <div>
                    <small>Based in</small>
                    <strong><?= e($location) ?></strong>
                </div>

                <div>
                    <small>Email</small>
                    <strong><?= e($email) ?></strong>
                </div>

            </div>

        </div>

        <aside class="quote-card">
            <span class="quote-mark">“</span>

            <h3>Always learning, always improving.</h3>

            <p>
                Every project is an opportunity to develop my skills,
                learn something new, and create something useful.
            </p>
        </aside>

    </div>

</section>

<!-- SKILLS SECTION -->
<section class="section skills" id="skills">

    <div class="section-heading">
        <p class="eyebrow">MY TECHNICAL TOOLKIT</p>
        <h2>Skills & <span>Expertise</span></h2>

        <p class="section-subtitle">
            Technologies and skills I have learned and practiced
            through my studies and projects.
        </p>
    </div>

    <div class="skill-grid">

        <?php foreach ($skills as $group => $items): ?>

            <article class="skill-card">

                <div class="skill-icon">&lt;/&gt;</div>

                <h3><?= e($group) ?></h3>

                <ul>
                    <?php foreach ($items as $item): ?>
                        <li><?= e($item) ?></li>
                    <?php endforeach; ?>
                </ul>

            </article>

        <?php endforeach; ?>

    </div>

</section>

<!-- PROJECTS SECTION -->
<section class="section projects" id="projects">

    <div class="section-heading">
        <p class="eyebrow">MY RECENT WORK</p>
        <h2>Featured <span>Projects</span></h2>

        <p class="section-subtitle">
            Academic projects that helped me practice my development skills.
        </p>
    </div>

    <div class="project-grid">

        <?php foreach ($projects as $i => $project): ?>

            <article class="project-card">

                <div class="project-top">
                    <span class="project-number">
                        0<?= e($i + 1) ?>
                    </span>

                    <span class="project-code">&lt;/&gt;</span>
                </div>

                <h3><?= e($project[0]) ?></h3>

                <p class="project-description">
                    <?= e($project[1]) ?>
                </p>

                <h4>Main Features</h4>

                <ul class="feature-list">

                    <?php foreach ($project[2] as $feature): ?>

                        <li><?= e($feature) ?></li>

                    <?php endforeach; ?>

                </ul>

                <p class="technology">
                    <strong>Technologies:</strong>
                    <?= e($project[3]) ?>
                </p>

                <a
                    class="project-link"
                    href="<?= e($github) ?>"
                    target="_blank"
                    rel="noopener noreferrer"
                >
                    Visit GitHub Profile ↗
                </a>

            </article>

        <?php endforeach; ?>

    </div>

</section>

<!-- EDUCATION SECTION -->
<section class="section education" id="education">

    <div class="section-heading">
        <p class="eyebrow">MY ACADEMIC JOURNEY</p>
        <h2>Education <span>Background</span></h2>
    </div>

    <article class="education-card">

        <div class="education-icon">✿</div>

        <div>

            <p class="education-date">
                2024 — Expected 2028
            </p>

            <h3>
                Bachelor of Science in Information Technology (BSIT)
            </h3>

            <h4>
                Computer Communication Development Institute (CCDI)
            </h4>

            <p>3rd Year</p>

            <p class="school-address">
                Brgy. 14, Sikatuna St., Old Albay,
                Legazpi City, Albay
            </p>

        </div>

    </article>

</section>

<!-- EXPERIENCE SECTION -->
<section class="section experience" id="experience">

    <div class="section-heading">
        <p class="eyebrow">LEARNING THROUGH EXPERIENCE</p>
        <h2>Leadership & <span>Experience</span></h2>
    </div>

    <div class="experience-list">

        <?php foreach ($experiences as $i => $item): ?>

            <div class="experience-item">

                <span>0<?= e($i + 1) ?></span>

                <p><?= e($item) ?></p>

            </div>

        <?php endforeach; ?>

    </div>

</section>

<!-- PERSONAL STRENGTHS SECTION -->
<section class="section strengths" id="strengths">

    <div class="section-heading">
        <p class="eyebrow">WHAT I BRING</p>
        <h2>Personal <span>Strengths</span></h2>
    </div>

    <div class="strength-grid">

        <?php foreach ($strengths as $strength): ?>

            <article class="strength-card">

                <span class="strength-check">✓</span>

                <div>
                    <h3><?= e($strength[0]) ?></h3>
                    <p><?= e($strength[1]) ?></p>
                </div>

            </article>

        <?php endforeach; ?>

    </div>

</section>

<!-- CONTACT SECTION -->
<section class="section contact" id="contact">

    <div class="section-heading">
        <p class="eyebrow">LET'S CONNECT</p>
        <h2>Get In <span>Touch</span></h2>

        <p class="section-subtitle">
            Feel free to contact me for opportunities,
            collaborations, or inquiries.
        </p>
    </div>

    <div class="contact-layout">

        <div class="contact-info">

            <a href="mailto:<?= e($email) ?>" class="contact-detail">
                <span class="contact-symbol">✉</span>
                <span>
                    <small>Email</small>
                    <strong><?= e($email) ?></strong>
                </span>
            </a>

            <a href="tel:<?= e($phone) ?>" class="contact-detail">
                <span class="contact-symbol">☎</span>
                <span>
                    <small>Contact Number</small>
                    <strong><?= e($phone) ?></strong>
                </span>
            </a>

            <div class="contact-detail">
                <span class="contact-symbol">⌖</span>
                <span>
                    <small>Location</small>
                    <strong><?= e($location) ?></strong>
                </span>
            </div>

            <a href="<?= e($github) ?>" target="_blank" rel="noopener noreferrer" class="contact-detail">
                <span class="contact-symbol">GH</span>
                <span>
                    <small>GitHub</small>
                    <strong>AngelaMaeBandoquillo4</strong>
                </span>
            </a>

            <a href="<?= e($facebook) ?>" target="_blank" rel="noopener noreferrer" class="contact-detail">
                <span class="contact-symbol">f</span>
                <span>
                    <small>Facebook</small>
                    <strong>Visit my profile</strong>
                </span>
            </a>

        </div>

        <div class="contact-card">

            <h3>Send Me a Message</h3>

            <p class="form-note">
                Complete the form below to send me an email.
            </p>

            <form
                action="https://formsubmit.co/angelamaebandoquillo@gmail.com"
                method="POST"
                class="contact-form"
            >

                <input type="hidden" name="_subject" value="New message from Angela's Portfolio">
                <input type="hidden" name="_template" value="table">
                <input type="text" name="_honey" style="display:none">

                <div class="form-row">

                    <input
                        type="text"
                        name="name"
                        placeholder="Your Name"
                        required
                    >

                    <input
                        type="email"
                        name="email"
                        placeholder="Your Email"
                        required
                    >

                </div>

                <input
                    type="text"
                    name="subject"
                    placeholder="Subject"
                    required
                >

                <textarea
                    name="message"
                    rows="5"
                    placeholder="Write your message here..."
                    required
                ></textarea>

                <button type="submit" class="btn">
                    Send Message ↗
                </button>

            </form>

            <p class="form-note small-note">
                The contact form needs an internet connection.
                Verify your email with FormSubmit when prompted on first use.
            </p>

        </div>

    </div>

</section>

</main>

<footer class="footer">

    <a class="footer-logo" href="#home">
        Angela<span>.</span>
    </a>

    <p>
        © <?= date('Y') ?> <?= e($name) ?>. Made with care.
    </p>

    <a href="#home">Back to top ↑</a>

</footer>

</body>
</html>