<?php
session_start();

if (isset($_SESSION['user_id'])) {
    $userId = $_SESSION['user_id'];
  // echo "User ID: $userId";
} else {

    echo "User not logged in.";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <script type="text/javascript" src="/___vscode_livepreview_injected_script"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Main Page</title>
  <link rel="stylesheet" type="text/css" href="..\css\mainpagecitizen.css">
  <link rel="stylesheet" type="text/css" href="..\css\umf.css">
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC_nXA2oQ_YYbhvUp2MComLx7GwZLWVAxw&callback=initMap"></script>
  <script src="..\js\umf.js" ></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  
  <div id="menu-toggle" onclick="toggleMenu()">&#9776; </div>

  <!-- Side Navigation Menu -->
  <div id="mySidenav">
    <a id="close-btn" class="closebtn" onclick="toggleMenu()">&times;</a>
        <a href="announcementscitizen.php" onclick="toggleMenu()">Ανακοινώσεις</a>
       <!-- <a href="requests.html" onclick="toggleMenu()">Υπηρεσίες</a>-->
        <a href="requests.php" onclick="toggleMenu()">Υπηρεσίες</a>
        <a href="contact.php" onclick="toggleMenu()">Επικοινωνία</a>
</div>


<div id="user-container">
  <button id="imageButton" onclick="toggleUserMenu()">
      <img src="ssmvtnogc7ue0jufjd03h6mj89.png" alt="Button Image">
      <div id="userMenu" class="dropdown-content">
          <a href="orders.php">Λίστα Αιτημάτων/Προσφορών</a>
          <a href="profilsection.php">Προφιλ</a>
          <a href="initialpage.php">Αποσύνδεση</a>
      </div>
  </button>
</div>

<div id="header-container">
  <img src="volunteer.jpg" alt="Background Image" id="header-background">
    <div id="header-content">
    <h1>Η Ομάδα μας</h1>
  </div>
  <div class="arrow-down-circle">
    <a href="#contact-form" onclick="scrollToContactForm()">&#9660;</a>
  </div>
</div>

<div id="container">
  <div id="text-container">
    <p>
    Καλωσορίστε στην πλατφόρμα μας, ένα σύστημα που δημιουργήθηκε από τρεις ανθρώπους με την αποστολή να παρέχει άμεση βοήθεια και ανακούφιση σε κοινότητες που αντιμετωπίζουν φυσικές καταστροφές. Η ιδέα για τη δημιουργία αυτής της πλατφόρμας γεννήθηκε μετά τις πλημμύρες που συνέβησαν το Σεπτέμβριο του 2023, καθιστώντας την ανάγκη για αμεσότερη και αποτελεσματική αντιμετώπιση πιο επιτακτική από ποτέ.

Ελάτε μαζί μας και συνεισφέρετε στη δημιουργία μιας κοινότητας που ενισχύεται από τη συνεργασία και την αμοιβαία βοήθεια. Με τη συνδρομή των εθελοντών, των διασωστών και των οχημάτων μας, έχουμε ήδη επιτύχει σημαντικά αποτελέσματα. Με 250 εθελοντές, 120 διασώστες και 30 οχήματα στη διάθεσή μας, είμαστε πανέτοιμοι να ανταπεξέλθουμε σε κάθε κρίση και να παρέχουμε τη βοήθεια που χρειάζεται η κοινότητα. Σας προσκαλούμε να γίνετε μέρος αυτής της αποστολής και να μας βοηθήσετε να κάνουμε τη διαφορά μαζί.
    </p>
  </div>
  <div id="image-container">
    <img src="aleks.jpg" alt="Αλεξάνδρα Καγιούλη">
    <img src="aleksis.jpg" alt="Αλέξης Γεωργαντόπουλος">
    <img src="επαγγελματικη.jpg" alt="Μαριάνθη Θώδη">
  </div>

  <div id="counters-container">
    <div class="counter">
      <h2>Εθελοντές</h2>
      <p id="volunteers-counter">250</p>
    </div>

    <div class="counter">
      <h2>Διασώστες</h2>
      <p id="rescuers-counter">120</p>
    </div>

    <div class="counter">
      <h2>Οχήματα</h2>
      <p id="vehicles-counter">30</p>
    </div>
  </div>
</div>

<footer>
  <div class="footer-section">
    <div></div>  
    <p>Με την βοήθειά σου ,στηρίζεις τον καθημερινό διαμερισμό προιόντων σε ανθρώπους που το έχουν ανάγκη.Δώρισε σήμερα!</p>
    <a href="announcementscitizen.php" class="button">
      <img src="donate.png" alt="Donate Now">
  </a>
  </div>
      <hr class="divider"> <!-- Add a horizontal line as a divider -->
      <div class="section2">
              <div class="column">
                <h3>Επικοινωνία</h3>
                <ul>
                  <li>Τηλέφωνο(χωρίς χρέωση):+306946930521</li>
                  <li>Κινητό:+306946930521</li>
              </ul>
              <div id="social-media" class="left-align-icons" style="margin-top: 10px;">
                <a href="#" class="fa fa-facebook icon-small" target="_blank" rel="noopener noreferrer"></a>
                <a href="#" class="fa fa-twitter icon-medium" target="_blank" rel="noopener noreferrer"></a>
                <a href="mailto:thebestteam@outlook.com" class="fa fa-envelope icon-small"></a>
            </div>
              </div>
              <div class="column">
                  <h3>Links</h3>
                  <ul>
                      <li><a href="mainpagecitizen.php">Η Ομάδα Μας</a></li>
                      <li><a href="requests.php">Υπηρεσίες</a></li>
                      <li><a href="contact.php">Επικοινωνία</a></li>
                  </ul>
              </div>
              <div class="column">
                  <h3>Τοποθεσία</h3>
                  <p>Πλατεία Γεωργίου,Πάτρα</p>
                 <div id="map"></div>  
           </div>
          </div>
</footer>
</body>
<script>

</script>

</html>
