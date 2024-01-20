<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Announcementes</title>
    <link rel="stylesheet" type="text/css" href="..\css\announcementscitizen.css">
    <link rel="stylesheet" type="text/css" href="..\css\umf.css">
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC_nXA2oQ_YYbhvUp2MComLx7GwZLWVAxw&callback=initMap"></script>
    <script src="..\js\announcementscitizen.js" ></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="..\js\umf.js" ></script>
</head>
<body>

    <!-- Menu Toggle Button -->
    <div id="menu-toggle" onclick="toggleMenu()">&#9776;</div>

    <header>
        <h1>Ανακοινώσεις</h1>
    </header>

      <!-- Side Navigation Menu -->
      <div id="mySidenav">
        <a id="close-btn" class="closebtn" onclick="toggleMenu()">&times;</a>
        <a href="mainpagecitizen.php" onclick="toggleMenu()">Αρχική</a>
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

    <!-- Page Content -->
    <div id="header-content">
      <!-- Announcement 1 with a data-date attribute -->
      <div class="announcement" data-date="2023-11-29">
          <div class="announcement-date">Νοέμβριος 29, 2023</div>
          <h2>Ανακοίνωση</h2>
          <p>Ζητείται γάλα και δημητριακά</p>
          <button onclick="showContributionPopup('2023-11-29')">Κάνε Δωρεά</button>
      </div>

      <!-- Announcement 2 with a data-date attribute -->
      <div class="announcement" data-date="2023-11-28">
          <div class="announcement-date">Νοέμβριος 28, 2023</div>
          <h2>Ανακοίνωση</h2>
          <p>Ζητείται νερό και σαμπουάν</p>
          <button onclick="showContributionPopup('2023-11-28')">Κάνε Δωρεά</button>
      </div>

      <!-- Add more announcements as needed with data-date attribute -->
  </div>

    
    <div id="contribution-popup" class="popup-menu">
        <div id="contribution-popup-header" class="popup-menu-header" onmousedown="dragElement(document.getElementById('contribution-popup'))">
            <p>Η προσφορά σου μετράει!</p>
            <span class="close-btn" onclick="closeContributionPopup()">x</span>
        </div>
        <div class="popup-menu-content" id="contribution-content">
            <!-- Content will be dynamically added here -->
            <p id="announcement-info"></p>
            <div id="donation-items">
                <!-- Donation items will be dynamically added here -->
            </div>
            <button onclick="donateItems()">Δώρισε</button>
        </div>
    </div>

    <footer>
        <div class="footer-section">
          <div></div>  
          <p>Με την βοήθειά σου ,στηρίζεις τον καθημερινό διαμερισμό προιόντων σε ανθρώπους που το έχουν ανάγκη.Δώρισε σήμερα!</p>
          <a href="requests.php" class="button">
            <img src="donate.png" alt="Donate Now">
        </a>
        </div>
            <hr class="divider">
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
</html>