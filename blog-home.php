<?php
    include_once('header.php');
?>
    <!-- Page Content -->


    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Blog Our Events</h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active">Our Events</li>
        </ol>

        <!-- Blog Post -->
       
<?php
$dbServername = "localhost";
$dbUsername = "sculpurp_dbadmin";
$dbPassword = "123456";
$dbName = "sculpurp_registrations";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword,$dbName);
$sql    =   "SELECT * FROM photos";
$result =   mysqli_query($conn,$sql);
while($row  =   mysqli_fetch_array($result)){
 echo "<div class="."card mb-4".">";
           echo "<div class="."card-body".">"; 
               echo "<div class="."row".">"; 
                   echo "<div class="."col-lg-6".">"; 
                      echo " <a href="."#".">"; 
                           echo "<img class='img-fluid rounded' src='uploads/".$row['image']."' width="."750"." height="."300"." >";
                          // echo "<img class="."img-fluid rounded"."src='uploads/".$row['image']."' width="."750"."height="."300".">"; 
                        echo "</a>";
                   echo "</div>"; 
                    echo "<div class="."col-lg-6".">";
                      echo "<h2 class="."card-title".">".$row['title']."</h2>";
                       echo" <p class="."card-text".">".$row['content']."</p>";
                   echo" </div>";
               echo" </div>";
            echo"</div>";          
        echo"</div>";
}          
?>   
    </div>
  <?php
        include_once('footer.php');
  ?>