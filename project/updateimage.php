
<?php
require'connection.php';
require'functions.php'; 
if(isset($_POST['up'])){
  ?>
  <script>
    $(document).ready(function(){
        $("#myMod").modal('show');
    });
</script>
   


<?php
}
?>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 <link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


   <link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>
<body>
	
	<div id="myMod" class="modal" style="background-color: #5cb85c;">
   <div class="modal-dialog"style="background-color: white; width:auto;">
        <div class="modal-content"style="background-color: white;">

            <div class="modal-header" style="background-color: #5cb85c;">
                  <h4 class="modal-title">Update Required Field</h4><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              
            </div>
            <div class="modal-body">

 <form class="modal-content animate" action="#" enctype="multipart/form-data" method="POST" autocomplete="off">
   <label><b>Upload Logo  Of Scheme, If Any</b></Label>
  <input type="file" name="avatar"/><br/>

                    <button type="submit" name="modified" class="btnclass">Update </button></label></form></div></div></div></div>
</body></html>