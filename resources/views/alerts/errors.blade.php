@if (count($errors) > 0)
    <div class="alert alert_error">
        <div class="alert_icon">
            <i class="fas fa-exclamation-triangle"></i>
        </div>
        <div class="alert_wrapper">
            Datos incorrectos<br><br>
		<ul style="color: white">
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
        </div><a href="#" class="close"><i class="fas fa-timer"></i></a>
    </div>
@endif