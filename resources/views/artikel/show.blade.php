<x-app-layout>
<div class="container  mt-6">
    <h4><a href="{{route('artikel')}}" style="text-decoration: none; color: black">< Back</a></h4>

    <div class="container d-flex flex-column justify-content-center mt-5" style="width: 75%">
        <h2>{{$artikel->title}}</h2>
    <h5 class="text-muted">By {{$artikel->author}}</h5>
    <p class="mt-3">{{$artikel->content}}</p>
    </div>
</div>
    
</x-app-layout>