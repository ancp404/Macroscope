<x-app-layout>

    <div class="container  mt-6">
        <h4><a href="{{route('webinar')}}" style="text-decoration: none; color: black">< Back</a></h4>

    <div class="container d-flex flex-column justify-content-center mt-5" style="width: 75%">
        @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{session()->get('success')}}
        </div>
        @endif

        <div class="card mb-5">
            <div class="card-body">
                <h1 class="fs-1 fw-bold w-100">Insert Webinar</h1>
                <hr>
                <form action="{{route('webinar.store')}}" method="post">
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
                        <label for="speaker" class="form-label">Speaker</label>
                        <input type="text" name="speaker" class="form-control" id="speaker" placeholder="Insert speaker here" required value="{{old('speaker')}}">
                        @error('speaker')
                            <div class="text-danger mt-2">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3 d-flex justify-content-between gap-3">

                        <div class="w-50">
                            <label for="link" class="form-label">Link</label>
                            <input type="text" name="link" class="form-control" id="link" placeholder="Insert link here" required value="{{old('link')}}">
                            @error('link')
                                <div class="text-danger mt-2">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>

                        <div class="w-50">
                            <label for="date" class="form-label">Date</label>
                            <input type="date" name="date" id="date" value="{{old('link')}} required" class="form-control">
                            @error('date')
                                <div class="text-danger mt-2">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        
                        
                    </div>

                    <div class="d-flex justify-content-center mt-4">
                        <button type="submit" class="btn btn-dark w-100">Insert</button>
                    </div>
                    
                    
                </form>
            </div>
        </div>
    
    </div>
    </div>
    

</x-app-layout>