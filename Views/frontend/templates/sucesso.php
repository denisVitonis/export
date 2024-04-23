<div class="central" style="min-height: 200px;">
<div class="container">
<script type="text/javascript">
  
swal({
  title: "Success!",
  text: "<?php echo $acao; ?>",
  type: "success",
  button: "OK!",
}, function () {
  window.location.href="<?php echo base_url($url)?>";
});
</script>
</div>









