<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Personal Details</title>
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
  <h2>Group Members Personal Details</h2>

  <?php
  $members = [
    [
        'name'    => 'OLADOYIN OLUWAPAMILERIN DANIEL',
        'blood'   => 'O+',
        'state'   => 'Ogun',
        'phone'   => '0803-456-7890',
        'hobbies' => ['Coding', 'Graphic design', 'Watching football', 'Music production']
    ],
    [
        'name'    => 'OLUSESAN AYOMIDE GERALD',
        'blood'   => 'A+',
        'state'   => 'Lagos',
        'phone'   => '0812-345-6789',
        'hobbies' => ['Gaming', 'Photography', 'Traveling', 'Reading novels']
    ],
    [
        'name'    => 'OYEDELE MOYOSOLUWA ESTHER',
        'blood'   => 'B-',
        'state'   => 'Oyo',
        'phone'   => '0906-789-0123',
        'hobbies' => ['Writing poetry', 'Dancing', 'Cooking', 'Fashion styling']
    ],
    [
        'name'    => 'RAHMON BOLUWATIFE IBUKUN',
        'blood'   => 'O-',
        'state'   => 'Osun',
        'phone'   => '0701-234-5678',
        'hobbies' => ['Basketball', 'Debate', 'Volunteering', 'Tech blogging']
    ],
    [
        'name'    => 'SAHEED REGINA TEMITAYO',
        'blood'   => 'AB+',
        'state'   => 'Kwara',
        'phone'   => '0816-901-2345',
        'hobbies' => ['Singing', 'Hair braiding', 'Movies', 'Event planning']
    ],
    [
        'name'    => 'SALAMI ABDULBASIT OLUWAMAYOWA',
        'blood'   => 'A-',
        'state'   => 'Ogun',
        'phone'   => '0802-567-8901',
        'hobbies' => ['Football', 'Fitness training', 'Chess', 'Freelance coding']
    ],
    [
        'name'    => 'SALAMI OLUWATOSIN ANUOLUWAPO',
        'blood'   => 'O+',
        'state'   => 'Lagos',
        'phone'   => '0903-123-4567',
        'hobbies' => ['Reading motivational books', 'Makeup artistry', 'Swimming', 'Social media content creation']
    ],
    [
        'name'    => 'SANNI TOHEEB OLOLADE',
        'blood'   => 'B+',
        'state'   => 'Ogun',
        'phone'   => '0708-901-2345',
        'hobbies' => ['Gaming (FIFA)', 'Music (Afrobeats)', 'Car detailing', 'Cryptocurrency research']
    ],
    [
        'name'    => 'SANWOOLU JEDIDAH',
        'blood'   => 'A+',
        'state'   => 'Ekiti',
        'phone'   => '0817-890-1234',
        'hobbies' => ['Prayer & Bible study', 'Cooking Nigerian dishes', 'Hair styling', 'Mentoring juniors']
    ],
    [
        'name'    => 'SIJUADE OLUWAPELUMI AYODEJI',
        'blood'   => 'AB-',
        'state'   => 'Ondo',
        'phone'   => '0809-876-5432',
        'hobbies' => ['Programming challenges', 'Watching anime', 'Photography', 'Cycling']
    ]
];

  foreach ($members as $m) {
    echo '<div class="member-card">';
    echo '<table>';
    echo '<tr><th>Name of Student</th><td>' . htmlspecialchars($m['name']) . '</td></tr>';
    echo '<tr><th>Blood Group</th><td>' . htmlspecialchars($m['blood']) . '</td></tr>';
    echo '<tr><th>State of Origin</th><td>' . htmlspecialchars($m['state']) . '</td></tr>';
    echo '<tr><th>Phone Number</th><td>' . htmlspecialchars($m['phone']) . '</td></tr>';
    echo '<tr><th>Hobbies</th><td><ul>';
    foreach ($m['hobbies'] as $h) {
      echo '<li>' . htmlspecialchars($h) . '</li>';
    }
    echo '</ul></td></tr>';
    echo '</table>';
    echo '</div>';
  }
  ?>
</div>

</body>
</html>