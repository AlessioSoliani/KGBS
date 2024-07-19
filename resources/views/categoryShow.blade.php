<x-main>
    <div class="container-fluid p-5 bg-gradient bg-success shadow mb-4">
        <div class="row">
            <div class="clo-12 col-md-4 text-light p-5">
                <h1 class="display-6">Categoria Eventi{{$category->name}}</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row  justify-content-center m-5">
            @forelse ($category->events as $event )
            <div class="cardCategoryShow">
                <div class="row">
                   
                    <div class="col-md-7 px-3">
                        <div class="card-block px-6">
                            <h4 class="card-title">{{$event->title}} </h4>
                            <p class="card-text">{{$event->description}}</p>
                            <p class="card-text">{{$event->date}}</p>
                            <br>
                            <a href="#" class="mt-auto btn btn-primary">Read More</a>
                            <a href="" class="my-2 border-top pt-2 border-dark card-link shadow btn btn-outline-success">{{$event->category->name}}</a>

                        </div>
                    </div>
                              <!-- Carousel start -->
                              <div class="col-md-5">
                                 <div id="CarouselTest" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                      <li data-target="#CarouselTest" data-slide-to="0" class="active"></li>
                                      <li data-target="#CarouselTest" data-slide-to="1"></li>
                                      <li data-target="#CarouselTest" data-slide-to="2"></li>                                 
                                    </ol>
                                     <div class="carousel-inner">
                                        <div class="carousel-item active">
                                          <img class="d-block" src="https://picsum.photos/200" alt="">
                                        </div>
                                        <div class="carousel-item">
                                          <img class="d-block" src="https://picsum.photos/200" alt="">
                                        </div>
                                        <div class="carousel-item">
                                          <img class="d-block" src="https://picsum.photos/200" alt="">
                                        </div>
                                        <a class="carousel-control-prev" href="#CarouselTest" role="button" data-slide="prev">
                                         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                         <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#CarouselTest" role="button" data-slide="next">
                                         <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                         <span class="sr-only">Next</span>
                                       </a>
                                     </div>
                                 </div>
                              </div>
                        <!-- End of carousel -->
                       </div>
                    </div>
                  <!-- End of card -->
                        {{-- <div class="col-12 col-md-4 my-2">
                            <div class="col-12 col-md-4">
                             <div class="card text-bg-dark">
                               <img src="https://picsum.photos/200" class="card-img" alt="...">
                               <div class="card-img-overlay">
                                 <h5 class="card-title">{{$event->title}}</h5>
                                 <p class="card-text">{{$event->description}}</p>
                                 <p class="card-text"><small>{{$event->date}}</small></p>
                                 <a href="" class="btn btn-outline-primary">Per Saperne Di Più</a>
                               </div>
                             </div>
                        </div> --}}
                    @empty
                        <div class="col-12">
                            <p class="h1">Non sono presenti eventi per questa categoria!</p>
                            <p class="h2">Vuoi pubblicarne uno? <a href="{{route('event.create')}}" class="btn btn-outline-success shadow">Nuovo Evento</a></p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-main>