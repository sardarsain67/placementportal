<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Resume</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 100px;
        }
        .upload-form {
            background-color: #fff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .form-title {
            text-align: center;
            margin-bottom: 30px;
        }
        .form-label {
            font-weight: bold;
        }
        .upload-button {
            display: block;
            width: 100%;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 16px;
            border-radius: 4px;
        }
        .upload-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 upload-form">
                <?php
                include('myconnection.php');
                session_start();
                $usr = $_SESSION['usr'];
                echo "<h1 class='form-title'>Please upload updated resume</h1><hr>";
                ?>
                <form>
                    <div class="mb-3">
                        <label for="fileupload" class="form-label">Select file</label>
                        <input id="fileupload" type="file" name="fileupload" class="form-control">
                    </div>
                    <button id="upload-button" onclick="uploadFile()" class="upload-button">Upload</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function uploadFile() {
            var fileUpload = document.getElementById("fileupload");
            if (fileUpload.files.length > 0) {
                // Perform the file upload logic here
                // You can use AJAX to send the file to the server or any other desired implementation
                console.log("File uploaded successfully!");
            } else {
                alert("Please select a file to upload.");
            }
        }
    </script>
</body>
</html>
