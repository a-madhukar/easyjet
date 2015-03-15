@extends('app')

@section('heading')
<h2>Choose your flight</h2>
@stop

@section('content')
<p>
    @foreach($query as $routes)
<div class="container">
    <p class="simple_padding">
        Departure: {{$routes->departure_city}}, {{$routes->departure_country}}
    </p>
   
    <p class="simple_padding">
        Arrival: {{$routes->arrival_city}}, {{$routes->arrival_country}}
    </p>
    
    <p class="simple_padding">
        Outbound:
    </p>
    
    <p class="simple_padding">
        Return: 
    </p>
    
    <p class="simple_padding">
        Date: 
    </p>
    
    <p class="simple_padding">
        Time:
    </p>
    
    <p class="simple_padding">
        Price: 
    </p>
    
    <p class="simple_padding">
    <center><a href="#">Purchase </a></center>
    </p>
    
</div>
        
    @endforeach
   
</p>


@stop