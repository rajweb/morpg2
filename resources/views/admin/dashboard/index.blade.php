@extends('layout.admin')

@section('title')
Dashboard
@endsection

@section('breadcrumb')
	<ol class="breadcrumb">
	    <li><a href="/admin/dashboard/index"><i class="fa fa-dashboard"></i> Dashboard</a></li>
	    {{-- <li><a href="#">Examples</a></li>
	    <li class="active">Blank page</li> --}}
  	</ol>
@endsection

@section('content')
Admin Dashboard<br>
Welcome, {{ Auth::user()->name }}
<br>
<br>


@endsection
