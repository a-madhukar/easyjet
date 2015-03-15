@extends('app')

@section('heading')
<h2>Search Flight</h2>
@stop

@section('content')
{!!Form::open(['url'=>'flights']) !!}

    <div class="form-group">
       {!! Form::label('departure','Flying from * : ') !!}
       {!! Form::select('departure[]', $departures,null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('arrival','Going to * : ') !!}
        {!! Form::select('arrival[]',$arrivals,null,['class'=>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::label('outbound','Outbound * :') !!}
        {!! Form::input('date','outbound',date('Y-m-d'),['class'=>'form-control'])!!}
    </div>           

    <div class="form-group">
        {!! Form::label('return','Return * :') !!}
        {!! Form::input('date','return',date('Y-m-d',strtotime("+5 days")),['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('adults','Adults :') !!}
        {!! Form::selectRange('adults',1,5,['class'=>'form-control']) !!}
        
    </div>

    <div class="form-group">
        {!! Form::submit('Search Flights',['class'=>'btn btn-primary form-control']) !!}
    </div>
            
   
{!!Form::close() !!}
@stop