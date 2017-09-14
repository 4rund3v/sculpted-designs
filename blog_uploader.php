<?php
    include_once('header.php');
?>

<div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Blog Our Events</h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active">Our Events</li>
        </ol>

<div id="container">
			<form method="post" action="blog_uploader.php" enctype="multipart/form-data">
				<input type="hidden" name="size" value="1000000">
					<div>
						<input type="file" name='image'>
					</div>
					<div>
						<textarea name="title"	cols="40" rows="2" placeholder="Whats the title"></textarea>
					</div>
					<div>
						<textarea name="blogcontent" cols="60" rows="4" placeholder="Whats the event about, more information"></textarea>
					</div>
					<div>
						<input type="submit" name="upload" value="Upload">
					</div>

			</form>
</div>

<?php
$dbServername = "localhost";
$dbUsername = "sculpurp_dbadmin";
$dbPassword = "123456";
$dbName = "sculpurp_registrations";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword,$dbName);

$msg="";

if (isset($_POST['upload'])) {

	$target	=	"uploads/".basename($_FILES['image']['name']);

	$image	=	$_FILES['image']['name'];
	$title	=	$_POST['title'];
	$blogcontent	=	$_POST['blogcontent'];

	$sql	=	"INSERT INTO photos (image, title, content) VALUES ('$image', '$title',	'$blogcontent');";
	mysqli_query($conn, $sql);

	if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){

		$msg	=	"Uplaoded Successfully!";
			echo "<script type='text/javascript'>alert('submitted successfully!')</script>";

	}else{
		$msg	=	"Upload Failed!";
        echo "<script type='text/javascript'>alert('failed!')</script>";
	}

}
?>


       
    </div>




  <?php
        include_once('footer.php')


  ?>