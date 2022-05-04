<x-app-layout>

    <h4><a href="{{route('artikel')}}" style="text-decoration: none; color: black">< Back</a></h4>

    <div class="container d-flex flex-column justify-content-center mt-5" style="width: 75%">
        @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{session()->get('success')}}
        </div>
        @endif

        <div class="card mb-5">
            <div class="card-body">
                <h1 class="fs-1 fw-bold w-100">Insert Article</h1>
    <hr>
    <form action="{{route('artikel.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Insert title here" required value="{{old('title')}}">
            @error('title')
                <div class="text-danger mt-2">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input type="text" name="author" class="form-control" id="author" placeholder="Insert author here" required value="{{old('author')}}">
            @error('author')
                <div class="text-danger mt-2">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" placeholder="Insert content here" id="content" name="content"></textarea required value="{{old('content')}}">
            @error('content')
                <div class="text-danger mt-2">
                    {{$message}}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-dark">Insert</button>
    </form>
            </div>
        </div>
    
    </div>

</x-app-layout>