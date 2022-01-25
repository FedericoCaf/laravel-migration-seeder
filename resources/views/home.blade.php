@extends('layouts.main')

@section('content')

  <main class="container">
    <table class="table table-striped my-5">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">HOTEL INCLUSO</th>
          <th scope="col">GIORNI</th>
          <th scope="col">CITTA DI PARTENZA</th>
          <th scope="col">CITTA DI DESTINAZIONE</th>
          <th scope="col">DATA DI PARTENZA</th>
          <th scope="col">PREZZO</th>
          <th scope="col">PACCHETTO</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($packages as $package) 
            <tr>
              <th scope="row"> {{ $package->id }} </th>
              <td> {{ $package->hotel_incluso }} </td>
              <td> {{ $package->giorni }} </td>
              <td> {{ $package->citta_di_partenza }} </td>
              <td> {{ $package->citta_di_destinazione }} </td>
              <td> {{ $package->data_di_partenza }} </td>
              <td> {{ $package->prezzo }} </td>
              <td> {{ $package->pacchetto }} </td>
              
          
            </tr>
        @empty
          <h6> No data</h6>
        @endforelse
        
   
      
      </tbody>
    </table>
  </main>
  
@endsection