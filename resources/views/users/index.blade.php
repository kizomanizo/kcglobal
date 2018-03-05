@extends('layouts.admin')

    @section('content')
<div class="container-fluid">
	<!-- Breadcrumbs-->
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{ asset('users/') }}">Watumiaji</a></li>
		<li class="breadcrumb-item active">Orodha</li>
	</ol>
	<div class="row">
		<div class="col-12">
			<h2>Watu waliosajiliwa</h2>
			<!-- <p>Melezo ya ukurasa.</p> -->
		</div>
	</div>

	<div class="row">
		<div class="col-12">
			<table class="table">
				<thead class="thead-default">
					<tr>
						<th>#</th>
						<th>Jina la kwanza</th>
						<th>Ubini</th>
						<th>Email</th>
						<th>Namba ya simu</th>
						<th>Jinsi</th>
						<th>Badili</th>
					</tr>
				</thead>
				<tbody>
					@foreach($users as $user)
					<tr>
						<th scope="row">{{ $user->id }}</th>
						<td>{{ $user->firstname }}</td>
						<td>{{ $user->surname }}</td>
						<td>{{ $user->email }}</td>
						<td>0{{ $user->phone }}</td>
						<td>{{ $user->sex }}</td>
						<td><a href="{{ url('users/'.$user->id.'/edit') }}">Badili</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>

	<div class="row">
		<div class="col-12">
			<a class="nav-link text-secondary" href="users/create">
            <i class="fa fa-plus-circle fa-3x"></i>
            <!-- <span class="nav-link-text">Ongeza Mtumiaji</span> -->
          	</a>
		</div>
	</div>
    @endsection