@extends('system-mgmt.procedures-to-process.base')

@section('action-content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Update Procedure</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('procedures-to-process.update', ['id' => $data->id]) }}">
                        <input type="hidden" name="_method" value="PATCH">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Procedure Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $data->name }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('start_stage') ? ' has-error' : '' }}">
                            <label for="start_stage" class="col-md-4 control-label">Process</label>

                            <div class="col-md-6">
                              <select class="form-control name " name="process_id">
                                  <option value="0" >-Select-</option>
                                  @foreach($process as $da)
                                  <option value="{{$da->id}}"{{$da->id == $data->process_id ? 'selected' : ''}} >{{$da->name}}</option>
                                  @endforeach
                              </select>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('next_procedure_to_process') ? ' has-error' : '' }}">
                            <label for="next_procedure_to_process" class="col-md-4 control-label">Next Procedure To Process</label>

                            <div class="col-md-6">
                              <select class="form-control name " name="next_procedure_to_process">
                                  <option value="0" >-Select-</option>
                                  @foreach($proceduretoprocess as $da)
                                  <option value="{{$da->id}}"{{$da->id == $data->next_procedure_to_process ? 'selected' : ''}} >{{$da->name}}</option>
                                  @endforeach
                              </select>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('procedure_id') ? ' has-error' : '' }}">
                            <label for="procedure_id" class="col-md-4 control-label">Procedure</label>

                            <div class="col-md-6">
                              <select class="form-control  name" name="procedure_id">
                                  <option value="0" >-Select-</option>
                                  @foreach($procedure as $da)
                                  <option value="{{$da->id}}"{{$da->id == $data->procedure_id ? 'selected' : ''}} >{{$da->name}}</option>
                                  @endforeach
                              </select>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('start_process_flag') ? ' has-error' : '' }}">
                            <label for="start_process_flag" class="col-md-4 control-label">Start Process Flag</label>

                            <div class="col-md-6">
                              <select class="form-control  name" name="start_process_flag">
                                  <option value="0" {{0 == $data->start_process_flag ? 'selected' : ''}}>0</option>
                                  <option value="1"{{1 == $data->start_process_flag ? 'selected' : ''}} >1</option>


                              </select>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('end_process_flag') ? ' has-error' : '' }}">
                            <label for="end_process_flag" class="col-md-4 control-label">End Process Flag</label>

                            <div class="col-md-6">
                              <select class="form-control  name" name="end_process_flag">
                                  <option value="0"{{0 == $data->end_process_flag ? 'selected' : ''}} >0</option>
                                  <option value="1"{{1 == $data->end_process_flag ? 'selected' : ''}} >1</option>


                              </select>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label">Description</label>

                            <div class="col-md-6">
                                <textarea id="description" type="text" class="form-control" name="description" value="{{ $data->description }}"  >{{ $data->description }}</textarea>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
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
