<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

?>
     <!DOCTYPE html>
     <html>

     <head>
          <title>HOME</title>

          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
          <link rel="stylesheet" type="text/css" href="style.css">
     </head>

     <body>
          <div class=container>

               <div style="text-align:center" class=col-md-12>
                    <h2>List of Visitor</h2>
                    <br>
                    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
                    <table class="table" id="myTable">
                         <thead>
                              <tr>
                                   <!-- <th>id</th> -->
                                   <th>Name</th>
                                   <th>Contact Number</th>
                                   <th>Purpose</th>
                                   <th>Check-In Time</th>
                                   <th>Check-Out Time</th>
                              </tr>
                         </thead>
                         <tbody>
                              <?php
                              $servername = "localhost";
                              $username = "root";
                              $password = "";
                              $database = "visitor_registration_db";

                              $connection = new mysqli($servername, $username, $password, $database);

                              if ($connection->connect_error) {
                                   die("Connection failed: " . $connection->connect_error);
                              }

                              $sql = "SELECT * FROM visitors";
                              $result = $connection->query($sql);

                              if (!$result) {
                                   die("Invalid query: " . $connection->error);
                              }

                              while ($row = $result->fetch_assoc()) {
                                   echo "
                                   <tr>
                                        <th>$row[name]</th>
                                        <th>$row[contactnumber]</th>
                                        <th>$row[purpose]</th>
                                        <th>$row[created_at]</th>
                                        <th>$row[updated_at]</th>
                                   </tr>
                                   ";
                              }
                              ?>

                         </tbody>
                    </table>



               </div>
               <br><br>
               <div style="text-align:center" class=col-md-12>
                    <!-- <h4><?php echo $_SESSION['name']; ?></h4> -->
                    <a href="logout.blade.php">
                         <button1>Logout</button1>
                    </a>
               </div>
          </div>




     </body>

     </html>

<?php
} else {
     header("Location: login.blade.php");
     exit();
}
?>



<script>
     function myFunction() {
          // Declare variables
          var input, filter, table, tr, td, i, txtValue;
          input = document.getElementById("myInput");
          filter = input.value.toUpperCase();
          table = document.getElementById("myTable");
          tr = table.getElementsByTagName("tr");

          // Loop through all table rows, and hide those who don't match the search query
          for (i = 0; i < tr.length; i++) {
               td = tr[i].getElementsByTagName("td")[0];
               if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                         tr[i].style.display = "";
                    } else {
                         tr[i].style.display = "none";
                    }
               }
          }
     }
</script>