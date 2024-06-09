<nav class="navbar position-fixed navbar-expand-lg bgrPrimario">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img class="logo" src="media/logo.png" alt=""></a>
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="w-75 collapse navbar-collapse" id="navbarNav">
        <ul class=" w-75 d-flex justify-content-center navbar-nav">
          <li class=" mx-5 nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
          </li>
          <li class=" mx-5 nav-item">
            <a class="nav-link" href="{{route('chiSiamo')}}">Chi Siamo</a>
          </li>
          <li class=" mx-5 nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class=" mx-5 nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  