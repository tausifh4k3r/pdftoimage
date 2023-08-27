<!-- index.html -->
<!DOCTYPE html>
<html>
<head>
  <title>PDF to Image Converter</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">
<body>
  <div class="container">
  <h1 class='text-center'>PDF to Image Converter</h1>
  <br>
  <form>
  <div class="mb-3">
    <label for="pdfNameId" class="form-label">Enter Your Campaign Id</label>
    <input type="text" class="form-control" id="pdfNameId" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Upload Your Campaign PDF FILE:</label>
    <input type="file" id="pdfFile" class='dropify' accept=".pdf" />
  </div>

  <button type="button" id="convertBtn" class="btn btn-primary">Download</button>
</form>
<div id="imageContainer"></div>


</div>

  <!-- Add the required PDF.js scripts -->
  <script src="js/pdf.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
  <script src="js/server.js"></script>

  <!-- <script src="pdf-to-image.js"></script> -->
</body>

</html>
