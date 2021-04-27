@extends('template_backend.home')
@section('sub-judul', 'Post Deleted')
@section('content')

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
   {{ Session('success') }}
</div>
@endif

<table class="table table-striped table-hover table-sm table-bordered justify-content-center align-content-center">
   <thead class="text-center">
      <tr>
         <th>No</th>
         <th>Judul Post</th>
         <th>Kategori</th>
         <th>Tags</th>
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
            <ul>
               <li>{{ $tag->name }}</li>
            </ul>
            @endforeach
         </td>
         <td><img src="{{ asset($result->gambar) }}" class="img-fluid" style="width: 100px;" alt="{{ $result->judul }}"></td>
         <td>
            <form action="{{ route('post.kill', $result->id) }}" method="POST">
               @csrf
               @method('delete')
               <a href="{{ route('post.restore', $result->id) }}" class="btn btn-info btn-sm mb-2">Restore</a>
               <button type="submit" class="btn btn-danger btn-sm mb-2">Delete</button>
            </form>
         </td>
      </tr>
      @endforeach
   </tbody>
   {{ $post->links() }}
</table>

@endsection