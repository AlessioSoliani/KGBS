<x-main>
  
    <div class=" mt-5 container">
        <div class=" mt-5 row justify-content-center">
            <div class="col-12 col-md-4">
                <h1 class=" mt-5 no-wrap display-1 text-center">Create Event</h1>
            </div>
        </div>
    </div>    

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4">
                @if(session('success'))
                <div class=" mt-5 display-6 alert alert-info" role="alert">
                    {{session('success')}}
                </div>
                @endif
            </div>
        </div>
    </div>
       

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <form  method="POST" action="{{route('events.store')}}" enctype="multipart/form-data">
                    @csrf                   
                    <label class="form-label">Title</label>
                    <input type="text" class="form-control"  name="title" value="{{old('title')}}">
                    @error('title')
                        <span>{{$message}}</span>
                    @enderror
                    <label class="form-label">Description</label>
                    <textarea  name="description" class="form-control" value="{{old('description')}}"></textarea>
                    @error('description')
                        <span>{{$message}}</span>
                    @enderror
                    <label class="form-label">Date</label>
                    <input type="date" class="form-control" name="date" value="{{old('date')}}">
                    @error('date')
                        <span>{{$message}}</span>
                    @enderror
                    <label class="form-label">Location</label>
                    <input type="text" class="form-control" name="location" value="{{old('location')}}">
                    @error('location')
                        <span>{{$message}}</span>
                    @enderror                  
                    <label class="form-label">Contact</label>
                    <input type="text" class="form-control" name="contact" value="{{old('contact')}}">
                    @error('contact')
                        <span>{{$message}}</span>
                    @enderror
                    <label class="form-label">Image</label>
                    <input type="file" class="form-control" value="{{old('image_url')}}"  name="image_url">
                    @error('image_url')
                        <span>{{$message}}</span>
                    @enderror
                    <label class="form-label">Categories</label>
                    <input type="text" class="form-control" value="{{old('categories')}}"  name="categories">
                    @error('categories')
                        <span>{{$message}}</span>
                    @enderror
                   
                    <div class=" mt-3 d-flex justify-content-center ">
                        <button type="submit" class="btn btn-outline-success">Invia</button>
                    </div>
                </form>
            
            </div>
            <div class="col-6">
                <div class="card" style="width: 18rem;">
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
    </div>

   
        
</x-main>

