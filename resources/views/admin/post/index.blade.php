@extends('template_backend.home')
@section('sub-judul', 'Post')
@section('content')

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
   {{ Session('success') }}
</div>
@endif

<a href="{{ route('post.create') }}" class="btn btn-info btn-sm mb-4">Tambah Post</a>

<table class="table table-striped table-hover table-sm table-bordered justify-content-center align-content-center">
   <thead class="text-center">
      <tr>
         <th>No</th>
         <th>Judul Post</th>
         <th>Kategori</th>
         <th>Tags</th>
         <th>Creator</th>
         <th>Thumbnail</th>
         <th>Action</th>
      </tr>
   </thead>
   <tbody class="text-center">
      <?php $no = 1 ?>
      @foreach ($post as $result)
      <tr>
         <td>{{ $no++ }}</td>
         <td>{{ $result->judul }}</td>
         <td>{{ $result->category->name }}</td>
         <td>
            @foreach ($result->tags as $tag)
            <h6><span class="badge badge-info">{{ $tag->name }}</span></h6>
            @endforeach
         </td>
         <td>{{ $result->users->name }}</td>
         <td><img src="{{ asset($result->gambar) }}" class="img-fluid" style="width: 100px;" alt="{{ $result->judul }}"></td>
         <td>
            <form action="{{ route('post.destroy', $result->id) }}" method="POST">
               @csrf
               @method('delete')
               <a href="{{ route('post.edit', $result->id) }}" class="btn btn-primary btn-sm mb-2">Edit</a>
               <button type="submit" class="btn btn-danger btn-sm mb-2">Delete</button>
            </form>
         </td>
      </tr>
      @endforeach
   </tbody>
   {{ $post->links() }}
</table>

@endsection