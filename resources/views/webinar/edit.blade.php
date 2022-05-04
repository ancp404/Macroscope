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
                    <h1 class="fs-1 fw-bold w-100">Edit Webinar</h1>
                    <hr>
                    <form action="{{route('webinar.update', $webinar->id)}}" method="post">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Insert title here" required value="{{$webinar->title}}">
                            @error('title')
                                <div class="text-danger mt-2">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="speaker" class="form-label">Speaker</label>
                            <input type="text" name="speaker" class="form-control" id="speaker" placeholder="Insert speaker here" required value="{{$webinar->speaker}}">
                            @error('speaker')
                                <div class="text-danger mt-2">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3 d-flex justify-content-between gap-3">
    
                            <div class="w-50">
                                <label for="link" class="form-label">Link</label>
                                <input type="text" name="link" class="form-control" id="link" placeholder="Insert link here" required value="{{$webinar->link}}">
                                @error('link')
                                    <div class="text-danger mt-2">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
    
                            <div class="w-50">
                                <label for="date" class="form-label">Date</label>
                                <input type="date" name="date" id="date" value="{{$webinar->date}}" required class="form-control">
                                @error('date')
                                    <div class="text-danger mt-2">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            
                            
                        </div>
    
                        <div class="d-flex justify-content-center mt-4">
                            <button type="submit" class="btn btn-dark w-100">Edit</button>
                        </div>
                        
                        
                    </form>
                        
                    
            <hr>
            <h1 class="fs-4 fw-bold w-100 text-danger">Delete Webinar</h1>
            <h6 class="text-muted mb-4">Once you delete it, there is no going back. Are you sure?</h6>

            <form action="{{route('webinar.destroy', $webinar->id)}}" method="post">
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