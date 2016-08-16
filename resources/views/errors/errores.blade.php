@if(count($errors) > 0)
<div class="ui negative message">
	<i class="close icon"></i>
	<div class="header"><i class="warning circle icon"></i> ¡Error! </div>
	<p>
		<ul class="list">
			@foreach($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</ul>
	</p>
</div>
<script>
	$('.message .close').on('click', function(){
		$(this).closest('.message').transition('fade');
	});
</script>
@endif