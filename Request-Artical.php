
<?php
include "./backend/test_db_connection.php"


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>iFound</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- logos -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/ifound.png" rel="ifound">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/table.css" rel="stylesheet">
  <link href="artical.css" rel="stylesheet">

  </head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">iFound</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i><!-- End logo -->

    
    </div><!-- End Home -->

    
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <li class="nav-item dropdown">
          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/harsha.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Harsha Ranjan</h4>
                  <p>I lost my Collage ID</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/Ankit.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>AnkitKumar</h4>
                  <p>I lost my Collage ID</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/shreya.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Shreya Tripathi</h4>
                  <p>I lost my Collage ID</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/Ankit.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">User</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>USER</h6>
              
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="index2.html">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed " href="donate-Artical.php">
          <i class="bi bi-grid"></i>
          <span>Recent Post</span>
        </a>
      </li>
      


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>FOUND</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="found.html">
              <i class="bi bi-circle"></i><span>Found Here</span>
            </a>
          </li>
          <li>
            <a href="found-artical.php">
              <i class="bi bi-circle"></i><span>Found Articles</span>
            </a>
          </li>
         
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>LOST</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="lost.html">
              <i class="bi bi-circle"></i><span>LostHere</span>
            </a>
          </li>
          <li>
            <a href="lost-artical.php">
              <i class="bi bi-circle"></i><span>Lost Articles</span>
            </a>
          </li>
          <li>
        </ul>
      </li><!-- End Forms Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>DONATE</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="donate.html">
              <i class="bi bi-circle"></i><span>Donate Here</span>
            </a>
          </li>
          <li>
            <a href="donate-artical.php">
              <i class="bi bi-circle"></i><span>Donate Articles</span>
            </a>
          </li>
        </ul>
      </li><!-- End Icons Nav -->

      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="team.html">
          <i class="bi bi-person"></i>
          <span>About iFound Team</span>
        </a>
      </li><!-- End team Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="about.html">
          <i class="bi bi-person"></i>
          <span>About iFound </span>
        </a>
      </li><!-- End About team  Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->
    </ul>

  </aside><!-- End Sidebar-->
  <style>

table {
        width: 100%;
        border-collapse: collapse;
    }

    td {
        padding: 2px;
        margin: 0;
        font-size: 14px;
        word-wrap: break-word;
    }

</style>

<main id="main" class="main" style="background-image: url('assets/img/454545454.png'); background-size: cover; background-position: center;">

<body>
<div class="container">
  <h1>Recent Posts Request</h1>
  <div class="table-responsive">
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th>Image</th>
          <th>Name</th>
          <th>Description</th>
          <th>Location</th>
          <th>Date</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
  // Fetch data from the found table
$sql = "SELECT item_name, item_description, found_location, found_date, item_image FROM found";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    // Output the data here
    echo "<tr>";
    echo "<td>" . $row["item_image"] . "</td>";
    echo "<td>" . $row["item_name"] . "</td>";
    echo "<td>" . $row["item_description"] . "</td>";
    echo "<td>" . $row["found_location"] . "</td>";
    echo "<td>" . $row["found_date"] . "</td>";
    echo '<td><button class="approve-button">Approve</button>
        <button class="delete-button">Delete</button></td>';
        echo '</tr>';
    echo "</tr>";
  }
} else {
  echo "No data found in the found table";
}

// Fetch data from the lost table
$sql = "SELECT item_name, item_description, lost_location, contact_information, lost_date, item_image FROM lost";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    // Output the data here
    echo "<tr>";
    echo "<td>" . $row["item_image"] . "</td>";
    echo "<td>" . $row["item_name"] . "</td>";
    echo "<td>" . $row["item_description"] . "</td>";
    echo "<td>" . $row["lost_location"] . "</td>";
    echo "<td>" . $row["lost_date"] . "</td>";
    echo '<td><button class="approve-button">Approve</button>
        <button class="delete-button">Delete</button></td>';
        echo '</tr>';
    echo "</tr>";
  }
} else {
  echo "No data found in the lost table";
}


// Fetch data from the donate table
$sql = "SELECT item_name, item_description, donate_location, donate_date, item_image FROM donate";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    // Output the data here
    echo "<tr>";
    echo "<td>" . $row["item_image"] . "</td>";
    echo "<td>" . $row["item_name"] . "</td>";
    echo "<td>" . $row["item_description"] . "</td>";
    echo "<td>" . $row["donate_location"] . "</td>";
    echo "<td>" . $row["donate_date"] . "</td>";
    echo '<td><button class="approve-button">Approve</button>
        <button class="delete-button">Delete</button></td>';
        echo '</tr>';
    echo "</tr>";
  }
} else {
  echo "No data found in the donate table";
}
$conn->close();
?>

</body>
</main>





  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
  // Select all approve buttons
  const approveButtons = document.querySelectorAll(".approve-button");

  // Add click event listener to each approve button
  approveButtons.forEach((button) => {
    button.addEventListener("click", () => {
      // Get the corresponding row
      const row = button.parentElement.parentElement;
      // Change the row's background color to green to indicate approval
      row.style.backgroundColor = "#c8e6c9";
    });
  });

  // Select all delete buttons
  const deleteButtons = document.querySelectorAll(".delete-button");

  // Add click event listener to each delete button
  deleteButtons.forEach((button) => {
    button.addEventListener("click", () => {
      // Get the corresponding row
      const row = button.parentElement.parentElement;
      // Remove the row from the table
      row.remove();
    });
  });
</script>

</body>

</html>