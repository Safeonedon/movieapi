<div class="row p-5">
    <div class="col-span-6 sm:col-span-4">
        <x-input id="current_password" style="padding: 8px; border: 1px solid #eee;" class="mt-1 block w-full"  wire:model="search" class='w-1/4' placeholder="Search" />
    </div>

@foreach($data as $movie )
        <div class="col-4 mt-3 ">
        <div class="card " style="width: 18rem;">
            <img class="card-img-top" src="https://image.tmdb.org/t/p/w220_and_h330_face/{{$movie->poster_path}}" alt="Card image cap">
            <img class="card-img-top"  style="width: 60px; height: 60px; object-fit: cover; position: absolute; top: 1%; right: 1%;    box-shadow: 0 0 9px 0px #000;border-radius: 100%" src="https://image.tmdb.org/t/p/w220_and_h330_face/{{$movie->backdrop_path}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title "  style="font-weight:bold ">{{ $movie->title }} </h5>
                <p class="card-text">{{Str::limit($movie->overview,50)}}.</p>
                <a href="/movie/{{ $movie->id }} " class="btn btn-primary mt-3">Details</a>
            </div>
        </div>
        </div>
@endforeach
    {{ $data->links() }}
</div>
