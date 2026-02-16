<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Group - Home</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

<header>
  <nav>
      <h1>Group 14 - Internet Technologies Project 1</h1>
      
      <ul>
        <li><a href="index.php" <?php if(basename($_SERVER['PHP_SELF']) == 'index.php') echo 'class="active"'; ?>>Home</a></li>
        <li><a href="payroll.php" <?php if(basename($_SERVER['PHP_SELF']) == 'payroll.php') echo 'class="active"'; ?>>Payroll</a></li>
        <li><a href="gpa.php" <?php if(basename($_SERVER['PHP_SELF']) == 'gpa.php') echo 'class="active"'; ?>>GPA Calculator</a></li>
        <li><a href="details.php" <?php if(basename($_SERVER['PHP_SELF']) == 'details.php') echo 'class="active"'; ?>>Personal Details</a></li>
      </ul>
  </nav>
</header>

<div class="container">
  <h2>Group Members & Registered Courses</h2>

  <?php
  // Array of group members (easy to edit)
  $members = [
    [
        'matric' => '22/0072',
        'name'   => 'OLADOYIN OLUWAPAMILERIN DANIEL',
        'courses' => [
            'CSC 307 - Internet Technologies',
            'CSC 305 - Database Systems',
            'CSC 311 - Data Structures & Algorithms',
            'CSC 315 - Computer Networks',
            'CSC 321 - Web Development',
            'GNS 3xx - General Studies (e.g., Entrepreneurship)'
        ]
    ],
    [
        'matric' => '22/2846',
        'name'   => 'OLUSESAN AYOMIDE GERALD',
        'courses' => [
            'CSC 307 - Internet Technologies',
            'CSC 309 - Software Engineering',
            'CSC 313 - Operating Systems',
            'CSC 317 - Object-Oriented Programming',
            'CSC 323 - Mobile Application Development'
        ]
    ],
    [
        'matric' => '22/1704',
        'name'   => 'OYEDELE MOYOSOLUWA ESTHER',
        'courses' => [
            'CSC 307 - Internet Technologies',
            'CSC 301 - Artificial Intelligence',
            'CSC 319 - Computer Graphics',
            'CSC 325 - Cybersecurity Basics',
            'MTH 3xx - Discrete Mathematics'
        ]
    ],
    [
        'matric' => '22/0257',
        'name'   => 'RAHMON BOLUWATIFE IBUKUN',
        'courses' => [
            'CSC 307 - Internet Technologies',
            'CSC 303 - Compiler Design',
            'CSC 327 - Cloud Computing',
            'CSC 329 - E-Commerce Systems',
            'GNS 3xx - Use of English / Leadership'
        ]
    ],
    [
        'matric' => '22/0283',
        'name'   => 'SAHEED REGINA TEMITAYO',
        'courses' => [
            'CSC 307 - Internet Technologies',
            'CSC 331 - Human-Computer Interaction',
            'CSC 333 - Information Systems Management',
            'CSC 335 - Multimedia Technologies'
        ]
    ],
    [
        'matric' => '22/0207',
        'name'   => 'SALAMI ABDULBASIT OLUWAMAYOWA',
        'courses' => [
            'CSC 307 - Internet Technologies',
            'CSC 337 - Advanced Database Management',
            'CSC 339 - Network Security',
            'CSC 341 - Project Management in IT'
        ]
    ],
    [
        'matric' => '22/0122',
        'name'   => 'SALAMI OLUWATOSIN ANUOLUWAPO',
        'courses' => [
            'CSC 307 - Internet Technologies',
            'CSC 343 - Big Data Analytics',
            'CSC 345 - Internet of Things (IoT)',
            'CSC 347 - Ethical Hacking'
        ]
    ],
    [
        'matric' => '22/0228',
        'name'   => 'SANNI TOHEEB OLOLADE',
        'courses' => [
            'CSC 307 - Internet Technologies',
            'CSC 349 - Web Services & APIs',
            'CSC 351 - Digital Forensics',
            'CSC 353 - Enterprise Systems'
        ]
    ],
    [
        'matric' => '22/0248',
        'name'   => 'SANWOOLU JEDIDAH',
        'courses' => [
            'CSC 307 - Internet Technologies',
            'CSC 355 - User Experience Design',
            'CSC 357 - Advanced Web Programming',
            'GNS 3xx - Religious Studies / Ethics'
        ]
    ],
    [
        'matric' => '22/0177',
        'name'   => 'SIJUADE OLUWAPELUMI AYODEJI',
        'courses' => [
            'CSC 307 - Internet Technologies',
            'CSC 359 - Machine Learning Basics',
            'CSC 361 - Distributed Systems',
            'CSC 363 - Capstone Project Preparation'
        ]
    ]
];

  foreach ($members as $member) {
    echo '<div class="member-card">';
    echo '<table>';
    echo '<tr><th>Matric Number</th><td>' . htmlspecialchars($member['matric']) . '</td></tr>';
    echo '<tr><th>Name of Student</th><td>' . htmlspecialchars($member['name']) . '</td></tr>';
    echo '<tr><th>Courses Registered</th><td><ul>';
    foreach ($member['courses'] as $course) {
      echo '<li>' . htmlspecialchars($course) . '</li>';
    }
    echo '</ul></td></tr>';
    echo '</table>';
    echo '</div>';
  }
  ?>
</div>

</body>
</html>