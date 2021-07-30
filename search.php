<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Search</title>
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/search.css">
  <link rel="shortcut icon" href="img/fav.ico">
</head>

<body>
  <div class="top">
    <header align="center">
      <img src="img/logo-for-web-site.jpg" alt="JSS-STU" width="250px">
    </header>
    <nav>
      <a href="home.html">HOME</a>|
      <a href="admission.php">ADMISSION</a>|
      <a href="search.php">STUDENT INFO</a>|
      <a href="update.php">UPDATE INFO</a>
    </nav>
  </div>
  <div class="window">
    <h2>Search Student!</h2>
    <form class="" action="" method="GET">
      <div class="">
        <input type="search" name="sid" value="" required>
        <label for="sid" class="float">Student ID</label>
      </div>
      <input type="submit" name="button_1" value="Search">
    </form>
    <div style="display: inline-block;">
      <?php
      /* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
      $link = mysqli_connect("localhost", "root", "openmysql", "admission");

      if ($link === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
      }
      if (isset($_GET['button_1'])) {
        $sid = $_GET['sid'];
        // Attempt select query execution

        $sql = "SELECT * FROM display where SID='$sid'";
        if ($result = mysqli_query($link, $sql)) {
          if (mysqli_num_rows($result) > 0) {

            echo "<table class='table'>";
            echo "<tr>";
            echo "<th>Sid</th>";
            echo "<th>Name</th>";
            echo "<th>Gender</th>";
            echo "<th>Mail</th>";
            echo "<th>Address</th>";
            echo "<th>Ph No.</th>";
            echo "<th>PUC %</th>";
            echo "<th>CET Rank</th>";
            echo "<th>Dept. Name</th>";
            echo "<th>HOSTEL Block</th>";
            echo "</tr>";
            while ($row = mysqli_fetch_array($result)) {
              echo "<tr>";
              echo "<td>" . $row['SID'] . "</td>";
              echo "<td>" . $row['SNAME'] . "</td>";
              echo "<td>" . $row['SGENDER'] . "</td>";
              echo "<td>" . $row['SMAIL'] . "</td>";
              echo "<td>" . $row['SADDRESS'] . "</td>";
              echo "<td>" . $row['SPHONE'] . "</td>";
              echo "<td>" . $row['PUCPER'] . "</td>";
              echo "<td>" . $row['CETRANK'] . "</td>";
              echo "<td>" . $row['DNAME'] . "</td>";
              echo "<td>" . $row['BUILDINGCODE'] . "</td>";
              echo "</tr>";
            }
            echo "</table>";
            // Free result set
            mysqli_free_result($result);
          } else {
            echo "No records matching your query were found.";
          }
        }
      }

      // Close connection
      mysqli_close($link);
      ?>

    </div>
  </div>
  <footer>
    <b>Contact us:</b>
    <ul>
      <li>8791209876</li>
      <li>official@jssstu.in</li>
    </ul>
  </footer>
</body>

</html>