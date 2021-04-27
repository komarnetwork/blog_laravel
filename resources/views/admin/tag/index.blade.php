@extends('template_backend.home')
@section('sub-judul', 'Tag')
@section('content')

   @if(Session::has('success'))
   <div class="alert alert-success" role="alert">
      {{ Session('success') }}
   </div> 
   @endif

   <a href="{{ route('tag.create') }}" class="btn btn-info btn-sm mb-4">Tambah Tag</a>

   <table class="table table-striped table-hover table-sm table-bordered">
      <thead>
         <tr>
            <th>No</th>
            <th>Nama Tag</th>
            <th>Action</th>
         </tr>
      </thead>
      <tbody>
         <?php $no = 1 ?>
         @foreach ($tag as $result)
            <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $result->name }}</td>
            <td>
               <form action="{{ route('tag.destroy', $result->id) }}" method="POST">
               @csrf
               @method('delete')
                  <a href="{{ route('tag.edit', $result->id) }}" class="btn btn-primary btn-sm">Edit</a>
                  <button type="submit" class="btn btn-danger btn-sm">Delete</button>
               </form>
            </td>
            
         </tr>
         @endforeach

      </tbody>
   </table>
   {{ $tag->links() }}

@endsection