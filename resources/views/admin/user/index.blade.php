@extends('template_backend.home')
@section('sub-judul', 'User')
@section('content')

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
   {{ Session('success') }}
</div>
@endif

<a href="{{ route('user.create') }}" class="btn btn-info btn-sm mb-4">Tambah User</a>

<table class="table table-striped table-hover table-sm table-bordered">
   <thead>
      <tr>
         <th>No</th>
         <th>Nama User</th>
         <th>Email</th>
         <th>Action</th>
      </tr>
   </thead>
   <tbody>
      <?php $no = 1 ?>
      @foreach ($user as $result)
      <tr>
         <td>{{ $no++ }}</td>
         <td>{{ $result->name }}</td>
         <td>{{ $result->email }}</td>
         <td>
            <form action="{{ route('user.destroy', $result->id )}}" method="POST">
               @csrf
               @method('delete')
               <a href="{{ route('user.edit', $result->id ) }}" class="btn btn-primary btn-sm">Edit</a>
               <button type="submit" class="btn btn-danger btn-sm">Delete</button>
            </form>
         </td>
      </tr>
      @endforeach

   </tbody>
</table>
{{ $user->links() }}

@endsection