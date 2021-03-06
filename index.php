<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Cloud Storage!</title>
</head>

<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <div class="input-group mb-3 mainDiv">
            <input type="file" class="form-control uploadButton" id="inputGroupFile02" name="filesToUpload">
            <!-- <label class="input-group-text uploadButton" for="inputGroupFile02">Upload</label> -->
        </div>
        <div>
            <input type="submit" class="btn btn-primary submitButton" value="Upload" name="submitBtn">
        </div>
        
        <div>
            <input type="button" value="Download" class = "btn btn-secondary submitButton" id="downloadBtn">           
        </div>
    </form>

</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="script.js"></script>
</html>