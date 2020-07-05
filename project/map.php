<?php
if(isset($_POST['regular'])){
  ?>
  <script>
    $(document).ready(function(){
        $("#modalRegular").modal('show');
    });
</script>
<?php
}
else if(isset($_POST['satellite'])){
  ?>
 
  <script>
    $(document).ready(function(){
        $(" #modalSatellite").modal('show');
    });
</script>
<?php
}
else if(isset($_POST['satellite'])){
  ?>
    <script>
    $(document).ready(function(){
        $("#modalCustom").modal('show');
    });
</script>
<?php
}
else{
?>

  <script>
    $(document).ready(function(){
        $("#modalRegular").modal('show');
    });
</script>
  <?php
}
?>
<!DOCTYPE html>
<head>
  <style>
.map-container-9,
.map-container-10,
.map-container-11 {
overflow:hidden;
padding-bottom:56.25%;
position:relative;
height:0;
}
.map-container-9 iframe,
.map-container-10 iframe,
.map-container-11 iframe{
left:0;
top:0;
height:100%;
width:100%;
position:absolute;
}
</style></head>
<body>

<div class="text-center">

  <button type="submit" name="regular" class="btn btn-info" data-toggle="modal" data-target="#modalRegular">Regular map modal</button>
  <button type="submit" name="satellite" class="btn btn-default" data-toggle="modal" data-target="#modalSatellite">Satellite map
    modal</button>
  <button type="submit" name="custom" class="btn btn-secondary" data-toggle="modal" data-target="#modalCustom">Custom map
    modal</button>

</div>

<!--Modal: Name-->
<div class="modal" id="modalRegular" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">

    <!--Content-->
    <div class="modal-content">

      <!--Body-->
      <div class="modal-body mb-0 p-0">

        <!--Google map-->
        <div id="map-container-google-16" class="z-depth-1-half map-container-9" style="height: 400px">
          <iframe src="https://maps.google.com/maps?q=new%20delphi&t=&z=13&ie=UTF8&iwloc=&output=embed"
            frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

      </div>

    

    </div>
    <!--/.Content-->

  </div>
</div>
<!--Modal: Name-->

<!--Modal: Name-->
<div  class="modal" id="modalSatellite" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">

    <!--Content-->
    <div class="modal-content">

      <!--Body-->
      <div class="modal-body mb-0 p-0">

        <!--Google map-->
        <div id="map-container-google-17" class="z-depth-1-half map-container-10" style="height: 400px">
          <iframe src="https://maps.google.com/maps?q=new%20york&t=k&z=13&ie=UTF8&iwloc=&output=embed"
            frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

      </div>

      <!--Footer-->
    

    </div>
    <!--/.Content-->

  </div>
</div>
<!--Modal: Name-->

<!--Modal: Name-->
<div class="modal" id="modalCustom" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">

    <!--Content-->
    <div class="modal-content">

      <!--Body-->
      <div class="modal-body mb-0 p-0">

        <!--Google map-->
        <div id="map-container-google-18" class="z-depth-1-half map-container-11"  style="height: 400px">
          <iframe src="https://maps.google.com/maps?q=los%20angeles&t=&z=13&ie=UTF8&iwloc=&output=embed"
            frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

      </div>

      <!--Footer-->
   

    </div>
    <!--/.Content-->

  </div>
</div>
<!--Modal: Name-->

</body>
</html>