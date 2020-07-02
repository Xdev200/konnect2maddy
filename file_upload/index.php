<html>
 
<head>   
 
<!-- 1 -->
<link href="dropzone.css" type="text/css" rel="stylesheet" />
 
<!-- 2 -->
<script src="jquery-3.0.0.js"></script>
<script src="dropzone.js"></script>
<script>
 

Dropzone.options.myAwesomeDropzone = {
  maxFiles:1,
  acceptedFiles: ".jpeg,.jpg,.png,.gif",
init: function() {
      this.on("maxfilesexceeded", function(file) {
            this.removeAllFiles();
            this.addFile(file);
            


      });

 }  

 
}





</script>
 
</head>
 
<body>
 
<!-- 3 -->
<form action="upload.php" id="my-awesome-dropzone" class="dropzone"></form>


   
</body>
 
</html>
