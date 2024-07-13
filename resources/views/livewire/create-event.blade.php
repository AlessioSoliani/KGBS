<div>
    <div class=" mt-5 pt-5 container">
        <div class=" row justify-content-center">
           <div class=" w-100 col-12 col-md-4">
               <h1 class="mt-3 display-4 w-100 text-center">Create Event</h1>
           </div>
        </div>
    </div>         
           
                       @if(session()->has('message'))
                       <div class=" d-flex flex-row justify-content-center mt-5 display-6 alert alert-info" role="alert">
                          {{session('message')}}
                       </div>
                       @endif
             


        <section class="container">
            <div class="row">
                <div class="col-8  d-flex justify-content-start">
                    <form class=" w-75"  wire:submit.prevent="store">
                        @csrf  
                        <label class="form-label w-50 my-2 me-5 text-center ">Title</label>
                        <input type="text" class="form-control" wire:model.change.debounce.500ms="title" @error('title') is-invalid @enderror >
                        @error('title')
                            {{$message}}
                        @enderror
                        <label class="form-label w-50 my-2 me-5 text-center">Description</label>
                        <textarea wire:model.blur="description" class="form-control" @error('description') is-invalid @enderror  ></textarea>
                        @error('description')
                            {{$message}}
                        @enderror
                        <label class="form-label w-50 my-2 me-5 text-center">Date</label>
                        <input type="date" class="form-control" wire:model.debounce.500ms="date" @error('date') is-invalid @enderror>
                        @error('date')
                            {{$message}}
                        @enderror
                        <label class="form-label w-50 my-2 me-5 text-center">Location</label>
                        <input type="text" class="form-control" wire:model.debounce.500ms="location" @error('location') is-invalid @enderror>
                        @error('location')
                            {{$message}}
                        @enderror
                        <label class="form-label w-50 my-2 me-5 text-center">Contatto</label>
                        <input type="text" class="form-control" wire:model.debounce.500ms="contact" @error('contact') is-invalid @enderror>
                        @error('contact')
                            {{$message}}
                        @enderror
                        <label class="form-label w-50 my-2 me-5 text-center">Immagine</label>
                        <input type="file" class="form-control" wire:model.debounce.500ms="image_url" @error('image_url') is-invalid @enderror>
                        @error('image_url')
                            {{$message}}
                        @enderror

                        <label class="w-50 my-2 me-5 text-center" for="category">Categoria</label>
                        <select wire:model.defer='category' id='category' class="form-control">
                            <option value=""></option>
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>                               
                            @endforeach                            
                          </select>


                        <label class="form-label w-50 my-2 me-5 text-center">Costo</label>
                        <input type="number" class="form-control" wire:model.debounce.500ms="cost" @error('cost') is-invalid @enderror>
                        @error('cost')
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
