<x-main>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">title</th>
            <th scope="col">category</th>
            <th scope="col">data</th>
          </tr>
        </thead>
        <tbody>
            @foreach ( $events as $event )
            <tr>
                <th scope="row">{{$event->id}}</th>
                <td>{{$event->title}}</td>
                <td>{{$event->categories}}</td>
                <td>{{$event->date}}</td>
                <td>{{$event->created_at}}</td>
              </tr>  
            @endforeach

          
        
        </tbody>
      </table>
</x-main>