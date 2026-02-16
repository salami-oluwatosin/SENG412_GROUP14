<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payroll Calculator</title>
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
  <h2>Simple Payroll for Small Company (50+ Employees)</h2>

  <?php
  // Array of 50 employees with their hours worked, hourly rate, and deductions
  $employees = [
    ['id' => 1,  'name' => 'Adebayo Olumide',        'hours' => 40, 'rate' => 1500, 'deduction' => 5000],
    ['id' => 2,  'name' => 'Okonkwo Chukwuma',        'hours' => 38, 'rate' => 1800, 'deduction' => 7000],
    ['id' => 3,  'name' => 'Ibrahim Fatima',           'hours' => 45, 'rate' => 1200, 'deduction' => 4000],
    ['id' => 4,  'name' => 'Balogun Temitope',         'hours' => 42, 'rate' => 2000, 'deduction' => 8000],
    ['id' => 5,  'name' => 'Eze Chinonso',             'hours' => 36, 'rate' => 1600, 'deduction' => 6000],
    ['id' => 6,  'name' => 'Afolabi Kehinde',          'hours' => 40, 'rate' => 1400, 'deduction' => 5500],
    ['id' => 7,  'name' => 'Nnamdi Obinna',            'hours' => 44, 'rate' => 1750, 'deduction' => 7500],
    ['id' => 8,  'name' => 'Yusuf Amina',              'hours' => 39, 'rate' => 1300, 'deduction' => 4500],
    ['id' => 9,  'name' => 'Ogunleye Segun',           'hours' => 41, 'rate' => 1900, 'deduction' => 6500],
    ['id' => 10, 'name' => 'Chidi Ngozi',              'hours' => 37, 'rate' => 1550, 'deduction' => 5000],
    ['id' => 11, 'name' => 'Adeleke Folashade',        'hours' => 40, 'rate' => 2200, 'deduction' => 9000],
    ['id' => 12, 'name' => 'Okoro Emmanuel',           'hours' => 43, 'rate' => 1650, 'deduction' => 7000],
    ['id' => 13, 'name' => 'Abdullahi Musa',           'hours' => 38, 'rate' => 1450, 'deduction' => 5500],
    ['id' => 14, 'name' => 'Fashola Bukola',           'hours' => 40, 'rate' => 1800, 'deduction' => 6000],
    ['id' => 15, 'name' => 'Uche Kelechi',             'hours' => 46, 'rate' => 1350, 'deduction' => 4000],
    ['id' => 16, 'name' => 'Bakare Olayinka',          'hours' => 35, 'rate' => 2000, 'deduction' => 8500],
    ['id' => 17, 'name' => 'Obi Chidinma',             'hours' => 40, 'rate' => 1700, 'deduction' => 7000],
    ['id' => 18, 'name' => 'Suleiman Halima',          'hours' => 42, 'rate' => 1250, 'deduction' => 4500],
    ['id' => 19, 'name' => 'Adeniyi Gbenga',           'hours' => 39, 'rate' => 1950, 'deduction' => 6500],
    ['id' => 20, 'name' => 'Nwosu Ifeoma',             'hours' => 41, 'rate' => 1600, 'deduction' => 5500],
    ['id' => 21, 'name' => 'Oladipo Yemi',             'hours' => 40, 'rate' => 1850, 'deduction' => 7500],
    ['id' => 22, 'name' => 'Emeka Chibuzo',            'hours' => 44, 'rate' => 1400, 'deduction' => 5000],
    ['id' => 23, 'name' => 'Alabi Mojisola',           'hours' => 37, 'rate' => 2100, 'deduction' => 8000],
    ['id' => 24, 'name' => 'Okafor Ugochukwu',         'hours' => 40, 'rate' => 1500, 'deduction' => 6000],
    ['id' => 25, 'name' => 'Garba Aisha',              'hours' => 43, 'rate' => 1350, 'deduction' => 4500],
    ['id' => 26, 'name' => 'Owolabi Adeyemi',          'hours' => 38, 'rate' => 1750, 'deduction' => 7000],
    ['id' => 27, 'name' => 'Nneka Amarachi',           'hours' => 41, 'rate' => 1650, 'deduction' => 5500],
    ['id' => 28, 'name' => 'Lawal Rashidat',           'hours' => 40, 'rate' => 1900, 'deduction' => 6500],
    ['id' => 29, 'name' => 'Igwe Chinedu',             'hours' => 36, 'rate' => 2000, 'deduction' => 8000],
    ['id' => 30, 'name' => 'Akinola Busayo',           'hours' => 45, 'rate' => 1300, 'deduction' => 4000],
    ['id' => 31, 'name' => 'Onuoha Tochukwu',          'hours' => 40, 'rate' => 1550, 'deduction' => 5000],
    ['id' => 32, 'name' => 'Dada Omotola',             'hours' => 42, 'rate' => 1800, 'deduction' => 7500],
    ['id' => 33, 'name' => 'Akpan Iniobong',           'hours' => 39, 'rate' => 1450, 'deduction' => 5500],
    ['id' => 34, 'name' => 'Oyelaran Funke',           'hours' => 40, 'rate' => 2050, 'deduction' => 8500],
    ['id' => 35, 'name' => 'Udo Nsikak',               'hours' => 44, 'rate' => 1600, 'deduction' => 6000],
    ['id' => 36, 'name' => 'Jimoh Wasiu',              'hours' => 37, 'rate' => 1700, 'deduction' => 7000],
    ['id' => 37, 'name' => 'Anyanwu Somtochukwu',      'hours' => 40, 'rate' => 1400, 'deduction' => 5000],
    ['id' => 38, 'name' => 'Ojo Titilayo',             'hours' => 43, 'rate' => 1850, 'deduction' => 6500],
    ['id' => 39, 'name' => 'Etim Aniekan',             'hours' => 38, 'rate' => 1250, 'deduction' => 4000],
    ['id' => 40, 'name' => 'Ogundele Tolulope',        'hours' => 41, 'rate' => 1950, 'deduction' => 7500],
    ['id' => 41, 'name' => 'Bassey Enobong',           'hours' => 40, 'rate' => 1500, 'deduction' => 5500],
    ['id' => 42, 'name' => 'Ayodele Babatunde',        'hours' => 46, 'rate' => 1650, 'deduction' => 6000],
    ['id' => 43, 'name' => 'Okeke Adaeze',             'hours' => 35, 'rate' => 2200, 'deduction' => 9000],
    ['id' => 44, 'name' => 'Oyedepo Damilola',         'hours' => 40, 'rate' => 1350, 'deduction' => 4500],
    ['id' => 45, 'name' => 'Amaechi Obianuju',          'hours' => 42, 'rate' => 1800, 'deduction' => 7000],
    ['id' => 46, 'name' => 'Mustapha Zainab',          'hours' => 39, 'rate' => 1550, 'deduction' => 5000],
    ['id' => 47, 'name' => 'Adekunle Mayowa',          'hours' => 41, 'rate' => 2000, 'deduction' => 8000],
    ['id' => 48, 'name' => 'Nwachukwu Ebere',          'hours' => 40, 'rate' => 1700, 'deduction' => 6500],
    ['id' => 49, 'name' => 'Kolawole Adeola',          'hours' => 44, 'rate' => 1450, 'deduction' => 5500],
    ['id' => 50, 'name' => 'Offor Chisom',             'hours' => 38, 'rate' => 1900, 'deduction' => 7500],
  ];

  echo '<table>';
  echo '<tr>';
  echo '<th>S/N</th>';
  echo '<th>Employee Name</th>';
  echo '<th>Hours Worked</th>';
  echo '<th>Hourly Rate (₦)</th>';
  echo '<th>Gross Pay (₦)</th>';
  echo '<th>Deductions (₦)</th>';
  echo '<th>Net Pay (₦)</th>';
  echo '</tr>';

  $totalGross = 0;
  $totalDeductions = 0;
  $totalNet = 0;

  foreach ($employees as $emp) {
      $gross = $emp['hours'] * $emp['rate'];
      $net   = $gross - $emp['deduction'];

      $totalGross      += $gross;
      $totalDeductions += $emp['deduction'];
      $totalNet        += $net;

      echo '<tr>';
      echo '<td>' . $emp['id'] . '</td>';
      echo '<td>' . htmlspecialchars($emp['name']) . '</td>';
      echo '<td>' . $emp['hours'] . '</td>';
      echo '<td>' . number_format($emp['rate'], 2) . '</td>';
      echo '<td>' . number_format($gross, 2) . '</td>';
      echo '<td>' . number_format($emp['deduction'], 2) . '</td>';
      echo '<td>' . number_format($net, 2) . '</td>';
      echo '</tr>';
  }

  // Summary row
  echo '<tr style="font-weight:bold; background:#2c3e50; color:white;">';
  echo '<td colspan="4" style="text-align:right;">TOTALS</td>';
  echo '<td>₦' . number_format($totalGross, 2) . '</td>';
  echo '<td>₦' . number_format($totalDeductions, 2) . '</td>';
  echo '<td>₦' . number_format($totalNet, 2) . '</td>';
  echo '</tr>';

  echo '</table>';

  echo '<div class="result">';
  echo '<strong>Payroll Summary</strong><br><br>';
  echo 'Total Employees: ' . count($employees) . '<br>';
  echo 'Total Gross Pay: ₦' . number_format($totalGross, 2) . '<br>';
  echo 'Total Deductions: ₦' . number_format($totalDeductions, 2) . '<br>';
  echo '<strong>Total Net Pay: ₦' . number_format($totalNet, 2) . '</strong>';
  echo '</div>';
  ?>
</div>

</body>
</html>