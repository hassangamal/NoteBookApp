@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel">
                     <h1 style="margin-left:80px">New Note</h1>
                <div class="panel-body">
                        <form class="form-horizontal" role="form" method="post" action="{{url("home")}}">
                          {{csrf_field()}}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>
                            <div class="col-md-8">
                                <input id="name" placeholder="Name" type="text" class="form-control" name="name"  required autofocus>

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
                                <input id="number" placeholder="Number" type="text" class="form-control" name="number" required autofocus>

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
                                <input id="Note" type="text" class="form-control" placeholder="Note" name="Note" required autofocus>

                                @if ($errors->has('Note'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Note') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-success glyphicon glyphicon-plus">
                                    Submit
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
