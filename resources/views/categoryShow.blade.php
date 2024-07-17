<x-main>
    <div class="container-fluid p-5 bg-gradient bg-success shadow mb-4">
        <div class="row">
            <div class="clo-12 col-md-4 text-light p-5">
                <h1 class="display-6">Categoria Eventi{{$category->name}}</h1>
            </div>
        </div>
    </div>
    <div class="containe">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    @forelse ($category->events as $event )
                        <div class="col-12 col-md-4 my-2">
                            <div class="col-12 col-md-4">
                             <div class="card text-bg-dark">
                               <img src="https://picsum.photos/200" class="card-img" alt="...">
                               <div class="card-img-overlay">
                                 <h5 class="card-title">{{$event->title}}</h5>
                                 <p class="card-text">{{$event->description}}</p>
                                 <p class="card-text"><small>{{$event->date}}</small></p>
                                 <a href="" class="btn btn-outline-primary">Per Saperne Di Più</a>
                                 <a href="" class="my-2 border-top pt-2 border-dark card-link shadow btn btn-outline-success">{{$event->category->name}}</a>
                               </div>
                             </div>
                        </div>
                    @empty
                        <div class="col-12">
                            <p class="h1">Non sono presenti eventi per questa categoria!</p>
                            <p class="h2">Vuoi pubblicarne uno? <a href="{{route('event.create')}}" class="btn-btn-success shadow">Nuovo Evento</a></p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-main>