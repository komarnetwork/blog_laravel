@extends('template_backend.home')
@section('sub-judul', 'Kategori')
@section('content')

   @if(Session::has('success'))
   <div class="alert alert-success" role="alert">
      {{ Session('success') }}
   </div> 
   @endif

   <a href="{{ route('category.create') }}" class="btn btn-info btn-sm mb-4">Tambah Kategori</a>

   <table class="table table-striped table-hover table-sm table-bordered">
      <thead>
         <tr>
            <th>No</th>
            <th>Nama Kategori</th>
            <th>Action</th>
         </tr>
      </thead>
      <tbody>
         <?php $no = 1 ?>
         @foreach ($category as $result)
         <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $result->name }}</td>
            <td>
               <form action="{{ route('category.destroy', $result->id )}}" method="POST">
                  @csrf
                  @method('delete') 
               <a href="{{ route('category.edit', $result->id ) }}" class="btn btn-primary btn-sm">Edit</a>
               <button type="submit" class="btn btn-danger btn-sm">Delete</button>
               </form>
            </td>
         </tr>
         @endforeach

      </tbody>
   </table>
   {{ $category->links() }}

@endsection