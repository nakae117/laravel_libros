<?php $mensaje = Session::get('mensaje'); ?>

@if($mensaje)

<script>
alertify.success("<?=$mensaje?>...");
</script>

@endif