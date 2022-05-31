@extends('layout')

@section('content')
<h1 class="text-left pt-3">Contenidos</h1>

<ul>
    <div class="container ps-6">
    @foreach ($posts as $post)
        <div class="d-inline-flex">
            <li class="card" style="width: 18rem;">
                <img src="https://picsum.photos/id/3{{$post->id }}/300/200" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="{{ route('blog.show', $post->slug) }}" class="btn btn-primary">Ir al post</a>
                </div>
            </li>
        </div>
    @endforeach
    </div>
</ul>



@endsection
