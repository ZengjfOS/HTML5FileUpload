<?php
    if ((($_FILES["fileToUpload"]["type"] == "image/gif")
        || ($_FILES["fileToUpload"]["type"] == "image/jpeg")
        || ($_FILES["fileToUpload"]["type"] == "image/pjpeg"))
        )
    {
        if ($_FILES["fileToUpload"]["error"] > 0)
        {
            echo "Return Code: " . $_FILES["fileToUpload"]["error"] . "<br />";
        }
        else
        {
            echo "Upload: " . $_FILES["fileToUpload"]["name"] . "<br />";
            echo "Type: " . $_FILES["fileToUpload"]["type"] . "<br />";
            echo "Size: " . ($_FILES["fileToUpload"]["size"] / 1024) . " Kb<br />";
            echo "Temp file: " . $_FILES["fileToUpload"]["tmp_name"] . "<br />";
    
            if (file_exists("upload/" . $_FILES["fileToUpload"]["name"]))
            {
                echo $_FILES["fileToUpload"]["name"] . " already exists. ";
            }
            else
            {
                move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],
                "uploads/" . $_FILES["fileToUpload"]["name"]);
                echo "Stored in: " . "uploads/" . $_FILES["fileToUpload"]["name"];
            }
        }
    }
    else
    {
        echo "Invalid file";
    }
?>
