@extends('layouts.index');
@yield('title', 'Bienvenido');




    <div class="col-md-12">
    	<div class="form-group">
    		<div class="form-control">
    			{{ Form::label('name', 'Your Name', array('class' => 'mylabel')) }}
    		</div>
    		
    	</div>
    	<div class="form-group">
    		<div class="form-control">
    			{{Form::text('username', 'nombre', array('id' => 'texto', 'class' => 'miprimerblade'))}}
    		</div>
    		
    	</div>
    	<div class="form-group">
    		<div class="form-control">
    			{{ Form::email('email_address', 'noreply@gmail.com', ['class' => 'field alert-warning']) }}
    		</div>
    		
    	</div>
    	<div class="form-group">
    		<div class="form-control">
    			{{ Form::submit('Entrar', array('class' => 'btn btn-success btn-pull')) }}
    		</div>
    		
    	</div>
    </div>
    
    
    
    



