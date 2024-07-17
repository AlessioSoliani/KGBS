
<nav class="w-100  container-fluid fixed-top"> 
   
      <div class="row rowNav mt-4">
        <!-- Burger Menu HTML -->
         <div class="burger-menu">
            <button class="burger-button" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-cross fa-flip fa-lg" style="color: #ffb83d;"></i>
            </button>
            <ul class="burger-links">
                <li><a class=" coloreSecondario linkBTNStyle fs-6" aria-current="page" href="{{route('home')}}">Home</a></li>
                <li><a class=" coloreSecondario  linkBTNStyle fs-6" href="{{route('chiSiamo')}}">Chi Siamo</a></li>
                <li><a class=" coloreSecondario linkBTNStyle fs-6" href="#">Spiritualità</a></li>
                <li><a class=" coloreSecondario linkBTNStyle fs-6" href="/struttura">Struttura</a></li>
                <li><a class=" coloreSecondario linkBTNStyle fs-6" aria-current="true" href="/formazione">Formazione</a></li>
                <li><a class=" coloreSecondario linkBTNStyle fs-6" aria-current="true" href="/storia">Storia</a></li>
                {{-- @if(auth()->check() && auth()->user()->is_admin) --}}               
                        <li><a class="coloreSecondario linkBTNStyle fs-6" href="{{ route('event.create') }}">Nuovo Evento</a></li>                   
                {{-- @endif --}}

            </ul>
         </div>

                     
                <div class="col-3 containLogo col-md-4">
                    <img class="logoNav" src="media/ElilogoRotondo.png" alt="">
                </div>
            
            <div class=" positionNav   w-75 ms-5 mt-5 ps-5 col-9 col-md-4">
                <ul class=" gradientNav list-unstyled w-100 d-flex justify-content-around">                                
                    <li>
                        <a class="NavancorStyle fs-6" aria-current="page" href="{{route('home')}}">Home</a>
                    </li>
                    <li>
                        <a class="NavancorStyle fs-6" href="{{route('chiSiamo')}}">Chi Siamo</a>
                    </li>
                    <li>
                        <a class="NavancorStyle fs-6" href="/spiritualita">Spiritualità</a>
                    </li>
                    <li>
                        <a class="NavancorStyle fs-6" href="/struttura">Struttura</a>
                    </li>
                    <li>
                        <a class="NavancorStyle fs-6" aria-current="true" href="/formazione">Formazione</a>
                    </li>
                    <li>
                        <a class="NavancorStyle fs-6" aria-current="true" href="/storia">Storia</a>
                    </li>
                     {{-- @if(auth()->check() && auth()->user()->is_admin) --}}                    
                          <li><a class="coloreSecondario linkBTNStyle fs-6" href="{{ route('event.create') }}">Nuovo Evento</a></li>                      
                  {{-- @endif --}}
                  <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="categoriesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categorie
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="categoriesDropdown">
                        @foreach ($categories as $category)
                        <li>
                            <a class="dropdown-item" href="{{route('categoryShow',compact('category'))}}">{{($category->name)}}</a>
                        </li>                            
                        @endforeach
                    </ul>
                  </li>
                </ul>
            </div>
         
         
      </div>
 
</nav>










  