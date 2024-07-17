<x-main>
  
    
 <div class="hero">
    <video id="video-homepage" loop muted style="display: none;">
        <source src="media/Hero.mp4" type="video/mp4">
    </video>          
  </div> 

    <section id="hero-content" class="container hero-content">
      {{-- <div class=" image_container d-flex justify-content-center mt-5 ">
        <div class="background-image"></div>
      </div> --}}
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 d-flex justify-content-center" >
                <h1 class="display-1 text-center mt-4 text-nowrap">Cristo è Risorto</h1>
            </div>
            <div class="row justify-content-center">
              <div class="col-12 col-md-4 d-flex justify-content-center">
                <h3>La nostra gioia trabocca! Benvenuto nella casa virtuale della nostra fede, dove la gioia di Cristo risplende in ogni angolo. Preparati per un viaggio di ispirazione e meraviglia!</h3>
              </div>
            </div>
            
        </div>
    </section>

    <section class=" w-75 container mt-5">
      <div class="row justify-content-center">
        @foreach ($events as $event)
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
        @endforeach
      </div>
    </section>



</x-main>
