@extends('layout/Login_Frame')

<title>Register</title>

@section('Frame')

<br><br><br><br><br>

	<div class="w-50 center border rounded px-3 py-3 mx-auto">
		
		<h1>Register</h1>
		<form action="/sesi/create" method="POST">
			
			@csrf

			<div class="mb-3">

				<label for="name" class="form-label">Nama</label>
				<input type="text" value="{{ Session::get('name') }}" name="name" class="form-control">

			</div>

			<div class="mb-3">

				<label for="email" class="form-label">Email</label>
				<input type="email" value="{{ Session::get('email') }}" name="email" class="form-control">

			</div>

			<div class="mb-3">

				<label for="password" class="form-label">Password</label>
				<input type="password" name="password" class="form-control">

			</div>

			<div class="col-sm-9">

				<label for="role" class="form-label">Role</label>
		        <select name="role" class="form-control" id="role" required>

		         	<option value=""> <--pilih--> </option>

		         	@foreach ($role as $item)

			         	<option value="{{ $item->id}}"> {{ $item->role}} </option>

		         	@endforeach


				</select>

   			</div>

   			<br>


				<button name="submit" type="submit" class="btn btn-primary">Register</button>

				<a href='{{ url('/sesi')}}' class="btn btn-secondary">Kembali</a>

		</form>

	</div>

@endsection