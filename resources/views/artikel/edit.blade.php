<x-app-layout>

<div class="container  mt-6">
    <h4><a href="{{route('artikel')}}" style="text-decoration: none; color: black">< Back</a></h4>

    <div class="container d-flex flex-column justify-content-center mt-5" style="width: 75%">
        @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{session()->get('success')}}
        </div>
        @endif
        
        <div class="card mb-5">
            <div class="card-body">
                <h1 class="fs-1 fw-bold w-100">Edit Article</h1>
                <hr>
                <form action="{{route('artikel.update', $artikel->id)}}" method="post">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Edit title here" value="{{$artikel->title}}">
                        @error('title')
                            <div class="text-danger mt-2">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="author" class="form-label">Author</label>
                        <input type="text" name="author" class="form-control" id="author" placeholder="Edit author here" value="{{$artikel->author}}">
                        @error('author')
                            <div class="text-danger mt-2">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Content</label>
                        <textarea class="form-control" placeholder="Insert content here" id="content" name="content"></textarea value="{{$artikel->content}}">
                        @error('content')
                            <div class="text-danger mt-2">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                        <button type="submit" class="btn btn-dark">Edit</button>
                    </form>

                    <hr>
                    <h1 class="fs-4 fw-bold w-100 text-danger">Delete Article</h1>
                    <h6 class="text-muted mb-4">Once you delete it, there is no going back. Are you sure?</h6>

                    <form action="{{route('artikel.destroy', $artikel->id)}}" method="post">
                        @method('delete')
                        @csrf
                        <div class="d-flex flex-column">
                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                        </div>
                        
                    </form>
                    
            </div>
        </div>
    
    </div>
</div>

</x-app-layout>