<script src="<?php echo base_url();?>adminassets/js/jquery-3.2.1.min.js"></script>

<script src="<?php echo base_url();?>adminassets/js/popper.min.js"></script>
<script src="<?php echo base_url();?>adminassets/js/bootstrap.min.js"></script>

<script src="<?php echo base_url();?>adminassets/js/script.js"></script>

<script src="<?php echo base_url();?>adminasset/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="<?php echo base_url();?>adminasset/plugins/toastr/toastr.min.js"></script>

<script>

var latitude = document.getElementById("latitude");
var longitude = document.getElementById("longitude");
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else {
    alert("Geolocation is not supported by this browser.");
  }
}

function showPosition(position) {
  latitude.value=position.coords.latitude; 
  longitude.value=position.coords.longitude;
}
getLocation();
</script>
<?php if($this->session->flashdata('success')){?>
<script>
  $(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
    
      toastr.success('<?php echo $this->session->flashdata('success');?>')
  
});
</script>
<?php } ?>
<?php if($this->session->flashdata('info')){?>
<script>
  $(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
    
      toastr.info('<?php echo $this->session->flashdata('info');?>')
   
});
</script>
<?php } ?>
<?php if($this->session->flashdata('warning')){?>
<script>
  $(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
    
      toastr.warning('<?php echo $this->session->flashdata('warning');?>')
    
});
</script>
<?php } ?>
<?php if($this->session->flashdata('error')){?>
<script>
  $(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
    
      toastr.error('<?php echo $this->session->flashdata('error');?>')

});
</script>
<?php } ?>
<?php 
if(isset($_SESSION['success'])){
    unset($_SESSION['success']);
}
if(isset($_SESSION['info'])){
    unset($_SESSION['info']);
}
if(isset($_SESSION['warning'])){
    unset($_SESSION['warning']);
}
if(isset($_SESSION['error'])){
    unset($_SESSION['error']);
}
?>
</body>

</html>