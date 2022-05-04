<x-app-layout>

            <div class="d-flex align-items-center">
                <h1 class="fs-1 fw-bold w-100">Our Articles</h1>
                
                    
                @can('admin')
                <div>
                    <a class="btn btn-dark" href="{{route('artikel.insert')}}" role="button">Insert</a>
                </div>
                @endcan
            </div>
            
            <hr class="mb-4">
            @foreach($artikels as $artikel)
            <div class="card mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                    <h5 class="card-title"><a href="artikel/{{$artikel->id}}" style="text-decoration: none; color: black" class="fs-4">{{$artikel->title}}</a></h5>
                        @can('admin')
                        <div>
                            <a class="btn btn-primary" href="artikel/edit/{{$artikel->id}}" role="button">Edit</a>
                        </div>
                        @endcan
                    </div>
                    <h6 class="card-subtitle mb-2 text-muted">By {{$artikel->author}}</h6>
                    {{-- PROBLEM!!! --}}
                    <p class="card-text">{{$artikel->content}}</p>
                    <a href="artikel/{{$artikel->id}}" class="card-link">Read more</a>
                </div>
            </div>
            @endforeach

            {{$artikels->links()}}

</x-app-layout>