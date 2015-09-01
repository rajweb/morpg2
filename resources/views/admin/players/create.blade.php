@extends('layout.admin')

@section('title')
Create User
@endsection

@section('breadcrumb')
	<ol class="breadcrumb">
	    <li><a href="/admin/home"><i class="fa fa-dashboard"></i> Dashboard</a></li>
	    {{-- <li><a href="#">Examples</a></li>
	    <li class="active">Blank page</li> --}}
  	</ol>
@endsection

@section('content')

<div class="box box-primary">

		<div class="box-header with-border">
	  <h3 class="box-title">User Registration</h3>
	</div><!-- /.box-header -->
	<!-- form start -->
	{!! Form::open(['url' => 'admin/players']) !!}
		 <div class="box-body">
			<div class="row">
				<div class="col-md-6">
					 <div class="form-group">
                       	{!! Form::label('email', 'Email Address') !!}
                     	{!! Form::email('email', null, array('class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                       	{!! Form::label('password', 'Password') !!}
                      	{!! Form::password('password', array('class' => 'form-control')) !!}
                    </div>
                     <div class="form-group">
                     	{!! Form::label('password_confirmation', 'Confirm Password') !!}
                      	{!! Form::password('password_confirmation', array('class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                      	{!! Form::label('name', 'Name') !!}
                      	{!! Form::text('name', null, array('class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
				        {!! Form::label('type', 'User Type:') !!}
				        {!! Form::select('type', array('admin' => 'Administrator', 'player' => 'Game Player'), 'player', array('class' => 'form-control')) !!}
				    </div>
                    
                   <div class="checkbox">
                      <label>
                        {!! Form::checkbox('privacy_policy', 'value') !!} Privacy Policy
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                       {!! Form::checkbox('term_condition', 'value') !!} Term and Conditions
                      </label>
                    </div>
                    
				</div>
				<div class="col-md-6">
					<div class="form-group">
						{!! Form::label('country', 'Country') !!}
                      	{!! Form::select('country', array('1' => 'India', '2' => 'USA', '3' => 'UAE'),null,array('class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                    	{!! Form::label('state', 'State') !!}
                      	{!! Form::select('state', array('1' => 'UP', '2' => 'Michigan', '3' => 'Jedda'),null,array('class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                    	{!! Form::label('city', 'City') !!}
                      	{!! Form::text('city', null, array('class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                    	{!! Form::label('gender', 'Gender') !!}
                      	{!! Form::select('gender', array('Male' => 'Male', 'Female' => 'Female', 'Other' => 'Other'),null,array('class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                      	{!! Form::label('age', 'Age') !!}
                      	{!! Form::selectRange('age', 18, 100, 18, array('class' => 'form-control') ) !!}
                    </div>
                    
				</div>
			</div>	
	     </div><!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Create User</button>
          </div>
        {!! Form::close() !!}
</div>


@endsection