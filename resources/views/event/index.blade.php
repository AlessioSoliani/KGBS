<x-main>

  <div class="container  mt-5">
    <div class="row mt-5 justify-content-center">
      <div class="  mt-5 col-12 col-md-4 ">
        <h1 class=" mt-5 text-center display-1">Indice degli eventi</h1>
      </div>
    </div>
  </div>

  <section class="container-fluid">
    <div class="row mt-5 justify-content-center ">
      <div class="col-12 col-md-8">
        <table class="table">
          <thead>
            <tr>
              <th class="text-center" scope="col">event code</th>
              <th class="text-center" scope="col">title</th>
              <th class="text-center" scope="col">category</th>
              <th class="text-center" scope="col">data</th>
              <th class="text-center" scope="col">data creazione</th>
            </tr>
          </thead>
          <tbody>
              @foreach ( $events as $event )
                   <tr>
                     <th class="text-center"  scope="row">{{$event->id}}</th>
                     <td class="text-center" >{{$event->title}}</td>
                     <td class="text-center" >{{$event->categories}}</td>
                     <td class="text-center" >{{$event->date}}</td>
                     <td class="text-center" >{{$event->created_at}}</td>
                    <td>
                      <a href="" class="btn btn-outline-info">show</a>
                      <a href="" class="btn btn-outline-secondary">edit</a>
                      <a href="" class="btn btn-outline-danger">delete</a>
                    </td>

                   </tr>  
              @endforeach             
          </tbody>
        </table>
      </div>
    </div>
  </section>

   
</x-main>