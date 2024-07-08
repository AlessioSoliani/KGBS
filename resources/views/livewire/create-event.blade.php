<div>
    <div class=" mt-5 container">
        <div class=" mt-5 row justify-content-center">
           <div class="col-12 col-md-4">
               <h1 class=" mt-5 display-1 text-center">Create Event</h1>
           </div>
        </div>
    </div>         
            {{-- <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-4">
                        @if(session('success'))
                        <div class=" mt-5 display-6 alert alert-info" role="alert">
                            {{session('success')}}
                        </div>
                        @endif
                    </div>
                </div>
            </div> --}}


        <section class="container">
            <div class="row">
                <div class="col-8  d-flex justify-content-start">
                    <form class=" w-75"  wire:submit.prevent="store">
                        @csrf  
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" wire:model="title" @error('title') is-invalid @enderror >
                        @error('title')
                            {{$message}}
                        @enderror
                        <label class="form-label">Description</label>
                        <textarea wire:model="description" class="form-control" @error('description') is-invalid @enderror  ></textarea>
                        @error('description')
                            {{$message}}
                        @enderror
                        <label class="form-label">Date</label>
                        <input type="date" class="form-control" wire:model="date" @error('date') is-invalid @enderror>
                        @error('date')
                            {{$message}}
                        @enderror
                        <label class="form-label">Location</label>
                        <input type="text" class="form-control" wire:model="location" @error('location') is-invalid @enderror>
                        @error('location')
                            {{$message}}
                        @enderror
                        <label class="form-label">Contact</label>
                        <input type="text" class="form-control" wire:model="contact" @error('contact') is-invalid @enderror>
                        @error('contact')
                            {{$message}}
                        @enderror
                        <label class="form-label">Image</label>
                        <input type="file" class="form-control" wire:model="image_url" @error('image_url') is-invalid @enderror>
                        @error('image_url')
                            {{$message}}
                        @enderror
                        <label class="form-label">Categories</label>
                        <input type="text" class="form-control" wire:model="categories" @error('categories') is-invalid @enderror>
                        @error('categories')
                            {{$message}}
                        @enderror
                       
                        <div class=" mt-3 d-flex justify-content-center ">
                            <button type="submit" class="btn btn-outline-success">Invia</button>
                        </div>
                     </form>
                </div>

                <div class="col-4 d-flex justify-content-center ">
                    <div class="card d-flex justify-content-center " style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                       <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                       </div>
                       <ul class="list-group list-group-flush">
                          <li class="list-group-item">An item</li>
                          <li class="list-group-item">A second item</li>
                          <li class="list-group-item">A third item</li>
                       </ul>
                       <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                       </div>
                </div>
                </div>
            </div>
        </section>
               
    
</div>
