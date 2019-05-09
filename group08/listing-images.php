<?php
		$title = "Listings Create";
    		$date = "Sept 14th, 2018";
    		$filename = "listing-create.php";
    		$banner = "Create a Listing";
    		$description = "This page will allow users to post a real estate listing to the database. The post should then be visible in the browse listings page.";
   		  include ("header.php");

        if(!isset($_SESSION['user']) || $_SESSION['user']['users_type'] != AGENT)
        {
        	$_SESSION['message'] = "You must be logged in as an agent to creae a new listing";
        	header("Location:./login.php");
        	ob_flush();
        }
        echo "<pre>";
		print_r($_COOKIE);
 		echo "</pre>";
         
         $ID = " "; 
         $ID = $_SESSION['user']["user_id"];
        $error = "";
        $dir ="$ID"; 

        if($_SERVER['REQUEST_METHOD'] == "POST")
        {

            if(isset($_FILES["uploadfile"]))
            {
                echo "<pre>";
                print_r($_FILES);
                echo "</pre>";
                $filename = $_FILES['uploadfile']['name'];
                $fileTmpName = $_FILES['uploadfile']['tmp_name'];
                $fileSize = $_FILES['uploadfile']['size'];
                $fileError = $_FILES['uploadfile']['error'];
                $fileType = $_FILES['uploadfile']['type'];

                $fileExt = explode('.', $filename);
                $fileActualExit = strtolower(end($fileExt));

                $allowed = array ('jpg');

                if(in_array($fileActualExit, $allowed))
                {
                    if($fileError == 0)
                    {
                        if($fileSize<2000000)
                        {
                            $fileTmpNameNew = uniqid('',true).".".$fileActualExit;
                            $fileDestination = 'images/uploads'.$fileTmpNameNew;
                            move_uploaded_file($fileTmpName, $fileDestination);
                            //header("Location:listing-create.php");
                        }
                        else
                        {
                            echo "Invalid file Size.";  //for invalid size
                        }

                    }
                    else
                    {
                         echo "There is an error.";  //for inte error
                    }

                }
                else
                {
                   echo "You can not uupload this file."; //wrong format
                }
            }
            else
            {
                $error = "No file selected"; //not selected
            }
        }
?>
<h1><?php echo "$error"; ?>
<form id="uploadform" enctype="multipart/form-data" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <strong>Select image for upload: </strong>
    <input name="uploadfile" type="file" id="uploadfile" multiple="multiple" />
    <input type="submit" value="Upload New Image" />
</form>

<?php include ("footer.php") ?>