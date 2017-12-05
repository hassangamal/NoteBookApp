@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel">

                     <h1 style="margin-left:60px">Update Note</h1>
                <div class="panel-body">

                <form method="post" action="{{ url("home/$user_notes->id")}}">                       
                 {{ csrf_field() }}
                {{ method_field('PUT') }}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>
                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control" name="name" value="{{$user_notes->name}}" required autofocus>
<br>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

 <div class="form-group{{ $errors->has('number') ? ' has-error' : '' }}">
                            <label for="number" class="col-md-4 control-label">number</label>
                            <div class="col-md-8">
                                <input id="number" type="text" class="form-control" name="number" value="{{$user_notes->number}}" required autofocus>
                                <br>
                                @if ($errors->has('number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('Note') ? ' has-error' : '' }}">
                            <label for="Note" class="col-md-4 control-label">Note</label>
                            <div class="col-md-8">
                                <input id="Note" type="text" class="form-control" name="Note" value="{{$user_notes->Note}}" required autofocus>
<br>
                                @if ($errors->has('Note'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Note') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-warning glyphicon glyphicon-pencil">
                                    Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
