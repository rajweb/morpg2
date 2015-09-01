@extends('layout.admin')

@section('title')
Dashboard
@endsection

@section('css')
	<link href="/assets/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
@endsection

@section('breadcrumb')
	<ol class="breadcrumb">
	    <li><a href="/admin/dashboard/index"><i class="fa fa-dashboard"></i> Dashboard</a></li>
	    <li><a href="/admin/players/index">Players List</a></li>
	    {{-- <li class="active">Blank page</li> --}}
  	</ol>
@endsection

@section('content')

<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Users List</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Email</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Created</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($players as $player)
                      <tr>
                        <td>{{ $player->id }}</td>
                        <td>{{ $player->email }}</td>
                        <td>{{ $player->name }}</td>
                        <td>{{ $player->type }}</td>
                        <td>{{ $player->created_at }}</td>
                        <td>Edit | Delete</td>
                      </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                      <tr>
                       <th>ID</th>
                        <th>Email</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Created</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

@endsection

@section('js')

	<script src="/assets/plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="/assets/plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>

	<script type="text/javascript">
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>

@endsection