<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GPA Calculator</title>
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
  <h2>1st Semester GPA – Group 14 Members</h2>

  <?php
  // Grade point scale: A=5, B=4, C=3, D=2, E=1, F=0
  $gradePoints = ['A' => 5, 'B' => 4, 'C' => 3, 'D' => 2, 'E' => 1, 'F' => 0];

  // Each group member with their 1st semester courses, credit units, and grades
  $members = [
    [
      'matric' => '22/0072',
      'name'   => 'OLADOYIN OLUWAPAMILERIN DANIEL',
      'courses' => [
        ['code' => 'CSC 307', 'title' => 'Internet Technologies',           'cu' => 3, 'grade' => 'A'],
        ['code' => 'CSC 305', 'title' => 'Database Systems',                'cu' => 3, 'grade' => 'B'],
        ['code' => 'CSC 311', 'title' => 'Data Structures & Algorithms',    'cu' => 3, 'grade' => 'A'],
        ['code' => 'CSC 315', 'title' => 'Computer Networks',               'cu' => 3, 'grade' => 'B'],
        ['code' => 'CSC 321', 'title' => 'Web Development',                 'cu' => 2, 'grade' => 'A'],
        ['code' => 'GNS 301', 'title' => 'Entrepreneurship',                'cu' => 2, 'grade' => 'C'],
      ]
    ],
    [
      'matric' => '22/2846',
      'name'   => 'OLUSESAN AYOMIDE GERALD',
      'courses' => [
        ['code' => 'CSC 307', 'title' => 'Internet Technologies',           'cu' => 3, 'grade' => 'B'],
        ['code' => 'CSC 309', 'title' => 'Software Engineering',            'cu' => 3, 'grade' => 'A'],
        ['code' => 'CSC 313', 'title' => 'Operating Systems',               'cu' => 3, 'grade' => 'C'],
        ['code' => 'CSC 317', 'title' => 'Object-Oriented Programming',     'cu' => 3, 'grade' => 'B'],
        ['code' => 'CSC 323', 'title' => 'Mobile Application Development',  'cu' => 2, 'grade' => 'A'],
      ]
    ],
    [
      'matric' => '22/1704',
      'name'   => 'OYEDELE MOYOSOLUWA ESTHER',
      'courses' => [
        ['code' => 'CSC 307', 'title' => 'Internet Technologies',           'cu' => 3, 'grade' => 'A'],
        ['code' => 'CSC 301', 'title' => 'Artificial Intelligence',         'cu' => 3, 'grade' => 'B'],
        ['code' => 'CSC 319', 'title' => 'Computer Graphics',               'cu' => 3, 'grade' => 'B'],
        ['code' => 'CSC 325', 'title' => 'Cybersecurity Basics',            'cu' => 3, 'grade' => 'A'],
        ['code' => 'MTH 301', 'title' => 'Discrete Mathematics',            'cu' => 3, 'grade' => 'C'],
      ]
    ],
    [
      'matric' => '22/0257',
      'name'   => 'RAHMON BOLUWATIFE IBUKUN',
      'courses' => [
        ['code' => 'CSC 307', 'title' => 'Internet Technologies',           'cu' => 3, 'grade' => 'B'],
        ['code' => 'CSC 303', 'title' => 'Compiler Design',                 'cu' => 3, 'grade' => 'C'],
        ['code' => 'CSC 327', 'title' => 'Cloud Computing',                 'cu' => 3, 'grade' => 'A'],
        ['code' => 'CSC 329', 'title' => 'E-Commerce Systems',              'cu' => 2, 'grade' => 'B'],
        ['code' => 'GNS 303', 'title' => 'Use of English',                  'cu' => 2, 'grade' => 'B'],
      ]
    ],
    [
      'matric' => '22/0283',
      'name'   => 'SAHEED REGINA TEMITAYO',
      'courses' => [
        ['code' => 'CSC 307', 'title' => 'Internet Technologies',           'cu' => 3, 'grade' => 'A'],
        ['code' => 'CSC 331', 'title' => 'Human-Computer Interaction',      'cu' => 3, 'grade' => 'A'],
        ['code' => 'CSC 333', 'title' => 'Information Systems Management',  'cu' => 3, 'grade' => 'B'],
        ['code' => 'CSC 335', 'title' => 'Multimedia Technologies',         'cu' => 2, 'grade' => 'B'],
      ]
    ],
    [
      'matric' => '22/0207',
      'name'   => 'SALAMI ABDULBASIT OLUWAMAYOWA',
      'courses' => [
        ['code' => 'CSC 307', 'title' => 'Internet Technologies',           'cu' => 3, 'grade' => 'B'],
        ['code' => 'CSC 337', 'title' => 'Advanced Database Management',    'cu' => 3, 'grade' => 'A'],
        ['code' => 'CSC 339', 'title' => 'Network Security',                'cu' => 3, 'grade' => 'C'],
        ['code' => 'CSC 341', 'title' => 'Project Management in IT',        'cu' => 2, 'grade' => 'B'],
      ]
    ],
    [
      'matric' => '22/0122',
      'name'   => 'SALAMI OLUWATOSIN ANUOLUWAPO',
      'courses' => [
        ['code' => 'CSC 307', 'title' => 'Internet Technologies',           'cu' => 3, 'grade' => 'A'],
        ['code' => 'CSC 343', 'title' => 'Big Data Analytics',              'cu' => 3, 'grade' => 'B'],
        ['code' => 'CSC 345', 'title' => 'Internet of Things (IoT)',        'cu' => 3, 'grade' => 'A'],
        ['code' => 'CSC 347', 'title' => 'Ethical Hacking',                 'cu' => 2, 'grade' => 'A'],
      ]
    ],
    [
      'matric' => '22/0228',
      'name'   => 'SANNI TOHEEB OLOLADE',
      'courses' => [
        ['code' => 'CSC 307', 'title' => 'Internet Technologies',           'cu' => 3, 'grade' => 'B'],
        ['code' => 'CSC 349', 'title' => 'Web Services & APIs',             'cu' => 3, 'grade' => 'B'],
        ['code' => 'CSC 351', 'title' => 'Digital Forensics',               'cu' => 3, 'grade' => 'C'],
        ['code' => 'CSC 353', 'title' => 'Enterprise Systems',              'cu' => 2, 'grade' => 'A'],
      ]
    ],
    [
      'matric' => '22/0248',
      'name'   => 'SANWOOLU JEDIDAH',
      'courses' => [
        ['code' => 'CSC 307', 'title' => 'Internet Technologies',           'cu' => 3, 'grade' => 'A'],
        ['code' => 'CSC 355', 'title' => 'User Experience Design',          'cu' => 3, 'grade' => 'A'],
        ['code' => 'CSC 357', 'title' => 'Advanced Web Programming',        'cu' => 3, 'grade' => 'B'],
        ['code' => 'GNS 305', 'title' => 'Religious Studies / Ethics',      'cu' => 2, 'grade' => 'B'],
      ]
    ],
    [
      'matric' => '22/0177',
      'name'   => 'SIJUADE OLUWAPELUMI AYODEJI',
      'courses' => [
        ['code' => 'CSC 307', 'title' => 'Internet Technologies',           'cu' => 3, 'grade' => 'B'],
        ['code' => 'CSC 359', 'title' => 'Machine Learning Basics',         'cu' => 3, 'grade' => 'A'],
        ['code' => 'CSC 361', 'title' => 'Distributed Systems',             'cu' => 3, 'grade' => 'C'],
        ['code' => 'CSC 363', 'title' => 'Capstone Project Preparation',    'cu' => 2, 'grade' => 'B'],
      ]
    ],
  ];

  foreach ($members as $member) {
      $totalQP = 0;
      $totalCU = 0;

      echo '<div class="member-card">';
      echo '<h3 style="margin-bottom:1rem; color:#2c3e50;">' . htmlspecialchars($member['name']) . ' (' . htmlspecialchars($member['matric']) . ')</h3>';

      echo '<table>';
      echo '<tr><th>Course Code</th><th>Course Title</th><th>Credit Units</th><th>Grade</th><th>Grade Point</th><th>Quality Points</th></tr>';

      foreach ($member['courses'] as $course) {
          $gp = $gradePoints[$course['grade']];
          $qp = $gp * $course['cu'];
          $totalQP += $qp;
          $totalCU += $course['cu'];

          echo '<tr>';
          echo '<td>' . htmlspecialchars($course['code']) . '</td>';
          echo '<td>' . htmlspecialchars($course['title']) . '</td>';
          echo '<td>' . $course['cu'] . '</td>';
          echo '<td>' . $course['grade'] . '</td>';
          echo '<td>' . $gp . '</td>';
          echo '<td>' . $qp . '</td>';
          echo '</tr>';
      }

      // Summary row
      echo '<tr style="font-weight:bold; background:#e8f4fd;">';
      echo '<td colspan="2" style="text-align:right;">TOTALS</td>';
      echo '<td>' . $totalCU . '</td>';
      echo '<td colspan="2"></td>';
      echo '<td>' . $totalQP . '</td>';
      echo '</tr>';

      echo '</table>';

      // GPA calculation
      $gpa = ($totalCU > 0) ? $totalQP / $totalCU : 0;
      echo '<div class="result">';
      echo '<strong>GPA: ' . number_format($gpa, 2) . ' / 5.00</strong>';
      echo '</div>';

      echo '</div>';
  }
  ?>
</div>

</body>
</html>