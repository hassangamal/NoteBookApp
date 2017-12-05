
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">       
     <div class="col-md-12">
      <a href="{{ URL::to('home/create') }}">
     <button class="btn btn-primary"><span class="glyphicon glyphicon-plus "style="font-size:15px;"></span> Add Users</button>
     </a>
        <h4>MyNotes</h4>
         <div class="table table-hover">
              <table id="mytable" class="table table-striped">
              <thead>
                    <th>Name</th>
                     <th>Number</th>
                     <th>Note</th>
                      <th style="padding-left:35px;">Edit</th>
                       <th style="padding-left:35px;">Delete</th>
              </thead>
              <tbody>
            @foreach($user_notes as $notes)
            <tr style="padding-left:100px;">
                <td>{{$notes->name}}</td>
                <td>{{$notes->number}}</td>
                <td>{{$notes->Note}}</td>
                <td >
                <form method="get" action="{{ url("home/$notes->id/edit")}}">
                    {{ method_field('EDIT') }}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                    <button class="btn btn-primary btn-sm" style="width:100px;" type="submit">
                <span class="glyphicon glyphicon-edit"style="font-size:15px;"></span></button>
              </form>
                </td>
                
                 <td >
                <form method="post" action="{{ url("home/$notes->id")}}">
                    {{ method_field('DELETE') }}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                    <button class="btn btn-danger btn-sm" style="width:100px;" type="submit">
                <span class="glyphicon glyphicon-trash"style="font-size:15px;"></span></button>
                
                </form>
             </td>
          
              </tr>
             @endforeach
             </tbody>
             </table>

         </div>
      </div>
     </div>
</div>
@endsection
