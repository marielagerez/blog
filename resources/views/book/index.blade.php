@extends('layouts.app')
@section('content')
<div class="container">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('book.create') }}" class="btn btn-info" >Añadir </a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Name</th>
               <th>Code</th>
               <th>Enum</th> 
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @if($books->count())  
              @foreach($books as $book)  
              <tr>
                <td>{{$book->name}}</td>
                <td>{{$book->code}}</td>
                <td>{{$book->enum}}</td> 
                <td><a class="btn btn-primary btn-xs" href="{{action('BookController@edit', $book->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('BookController@destroy', $book->id)}}" method="post">
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE">

                   <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                 </td>
               </tr>
               @endforeach 
               @else
               <tr>
                <td colspan="8">No hay registro !!</td>
              </tr>
              @endif
            </tbody>

          </table>
        </div>
      </div>
     
    </div>
  </div>
</section> 
</div>
@endsection