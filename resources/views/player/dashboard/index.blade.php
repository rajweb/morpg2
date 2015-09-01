@extends('layout.player')

@section('title')
Dashboard
@endsection

@section('breadcrumb')
	<ol class="breadcrumb">
	    <li><a href="/player/dashboard/index"><i class="fa fa-dashboard"></i> Dashboard</a></li>
	    {{-- <li><a href="#">Examples</a></li>
	    <li class="active">Blank page</li> --}}
  	</ol>
@endsection

@section('content')
	User Dashboard<br>
	Welcome, {{ Auth::user()->email }}
	<br>
	<br>

	<a href="/auth/logout">Sign Out</a>
@endsection

