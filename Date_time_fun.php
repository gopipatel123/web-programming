#1. Create a PHP script to display the current date in the format "YYYY-MM-DD".

<?php

$currentDate = date("Y-m-d");

echo "Current date: " . $currentDate;

?>

#2.Write a script to display the current time in the format "HH:MM:SS".

<?php

$currentTime = date("H:i:s");

echo "Current time: " . $currentTime;

?>

#3.Take a specific date (e.g., your birthday) and display it in the format "Month DD, YYYY" using PHP date functions.

<?php

$birthday = "1990-09-15";

$formattedBirthday = date("F d, Y", strtotime($birthday));

echo "My birthday is: " . $formattedBirthday;

?>

#4.Create a script that calculates and displays the age of a person based on their birthdate.

<?php

function calculateAge($birthdate) {
    $today = new DateTime();
    $diff = $today->diff(new DateTime($birthdate));
    return $diff->y;
}

$birthdate = "1990-09-15";

$age = calculateAge($birthdate);

echo "The person's age is: " . $age . " years old.";

?>

#5.Write a PHP script that calculates and displays the number of days left until the next birthday, given the birthdate.

<?php

function daysUntilNextBirthday($birthdate) {
    $today = new DateTime();
    $birthday = new DateTime($birthdate);
    $birthday->modify('+' . $today->diff($birthday)->y . ' years');
    
    if ($birthday < $today) {
        $birthday->modify('+1 year');
    }

    return $today->diff($birthday)->days;
}

$birthdate = "1990-09-15";

$daysLeft = daysUntilNextBirthday($birthdate);

echo "There are " . $daysLeft . " days left until the next birthday.";

?>

#6.Convert a specific date to a Unix timestamp using the strtotime function.

<?php

$date = "2024-02-21";

$timestamp = strtotime($date);

echo "Unix timestamp for {$date}: {$timestamp}";

?>

#7.Write a script to display the current day of the week (e.g., Monday, Tuesday, etc.).

<?php

$currentDayOfWeek = date("l");

echo "Today is " . $currentDayOfWeek;

?>

#8.Take a date and time from one timezone and convert it to another timezone using PHP date functions

<?php

$originalDateTime = '2024-02-21 15:30:00';
$originalTimeZone = 'America/New_York'; 

$dateTime = new DateTime($originalDateTime, new DateTimeZone($originalTimeZone));

$newTimeZone = 'Europe/London'; 

$dateTime->setTimezone(new DateTimeZone($newTimeZone));

$convertedDateTime = $dateTime->format('Y-m-d H:i:s');

echo "Original Date and Time ({$originalTimeZone}): {$originalDateTime}<br>";
echo "Converted Date and Time ({$newTimeZone}): {$convertedDateTime}";

?>

#9.Create a script that calculates and displays the difference between two dates in terms of years, months, and days.

<?php

function dateDifference($date1, $date2) {
    
    $datetime1 = new DateTime($date1);
    $datetime2 = new DateTime($date2);
    
    $interval = $datetime1->diff($datetime2);
    
    $years = $interval->y;
    $months = $interval->m;
    $days = $interval->d;
    
    return array('years' => $years, 'months' => $months, 'days' => $days);
}

$date1 = '2022-01-01';
$date2 = '2024-02-21';

$difference = dateDifference($date1, $date2);

echo "Difference between $date1 and $date2: ";
echo "{$difference['years']} years, {$difference['months']} months, {$difference['days']} days";

?>

#10. Write a PHP script that checks if a given year is a leap year or not.

<?php

function isLeapYear($year) {
    
    if ($year % 4 == 0) {
        
        if ($year % 100 == 0 && $year % 400 != 0) {
            return false;
        }
        
        return true;
    }
    
    return false;
}

$year = 2024;

if (isLeapYear($year)) {
    echo "$year is a leap year.";
} else {
    echo "$year is not a leap year.";
}

?>

#11.Display the current week number using the date function.

<?php

$currentWeekNumber = date('W');

echo "The current week number is: " . $currentWeekNumber;

?>

#12.Use PHP to retrieve and display the last modified date of a specific file.

<?php

$filePath = 'path/to/your/file.txt'; 

$lastModifiedTimestamp = filemtime($filePath);

$lastModifiedDate = date('Y-m-d H:i:s', $lastModifiedTimestamp);

echo "The last modified date of the file '{$filePath}' is: {$lastModifiedDate}";

?>

#13.Develop a countdown timer that shows the time remaining for a specific event or deadline.

<?php

$deadline = '2024-03-01 00:00:00';

$now = time();
$deadlineTimestamp = strtotime($deadline);
$timeRemaining = $deadlineTimestamp - $now;

$daysRemaining = floor($timeRemaining / (60 * 60 * 24));
$hoursRemaining = floor(($timeRemaining % (60 * 60 * 24)) / (60 * 60));
$minutesRemaining = floor(($timeRemaining % (60 * 60)) / 60);
$secondsRemaining = $timeRemaining % 60;

echo "Countdown to {$deadline}:<br>";
echo "{$daysRemaining} days {$hoursRemaining} hours {$minutesRemaining} minutes {$secondsRemaining} seconds remaining";

?>

#14.Display Date and Time in a Specific Format:

<?php

date_default_timezone_set('Your/Timezone'); 

$currentDateTime = date('Y-m-d H:i:s');

echo "Current Date and Time: " . $currentDateTime;

?>

#15.Allow the user to input a date and time in a specific format, and then display it in a different custom format.

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date and Time Converter</title>
</head>
<body>
    <h2>Date and Time Converter</h2>
    <form method="post" action="">
        <label for="inputDateTime">Enter Date and Time (YYYY-MM-DD HH:MM:SS):</label><br>
        <input type="text" id="inputDateTime" name="inputDateTime"><br><br>
        <input type="submit" value="Convert">
    </form>

    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $inputDateTime = $_POST["inputDateTime"];

        $convertedDateTime = date('F j, Y \a\t g:i A', strtotime($inputDateTime));

        echo "<h3>Converted Date and Time:</h3>";
        echo $convertedDateTime;
    }
    ?>
</body>
</html>

#16. Create a script that checks if today is someone's birthday and displays a birthday message if it is.

<?php

function checkBirthday($birthdate) {
    
    $today = date("m-d");

    $birth_month_day = date("m-d", strtotime($birthdate));

    if ($today == $birth_month_day) {
        return true;
    } else {
        return false;
    }
}

$birthdate = "1990-09-15";

if (checkBirthday($birthdate)) {
    echo "Happy birthday!";
} else {
    echo "Today is not your birthday.";
}

?>




