<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<head>
    <style>
        .uploadAgainBtn{
            margin-left:40%;
            margin-top:3%;
        }
    </style>
</head>

<?php
    $targetDirectory = "uploads/";
    $targetFileName = "uploads/" . basename($_FILES['filesToUpload']['name']);



    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['submitBtn'])){
            $tmpFileName = strval($_FILES['filesToUpload']['tmp_name']);
            if(file_exists($targetFileName)){
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <div class="alert alert-warning d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                    <div>
                      File already exits !
                    </div>
                  </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
                //   echo '<script>location.assign("upload.php")</script>';
                }
                else{
                // die;
                $result = move_uploaded_file($tmpFileName,$targetFileName);
                if($result){
                    
                    // echo "<script>alert('File uploaded successfully !');</script>";
                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <div class="alert alert-success d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                    <div>
                    Successfully uploaded file !
                    </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                  
                }
                else{
                    // echo "<script>alert('Coud not upload file !');</script>";
                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <div class="alert alert-warning d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                    <div>
                      Could not upload this file !
                    </div>
                  </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
                  

                }
            }
        }
    }
?>

<button type="button" class="btn btn-outline-secondary uploadAgainBtn" >Upload Again !</button>
<script>
    document.getElementsByTagName("button")[0].addEventListener("click",function(){
        window.location.assign("index.php");
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
