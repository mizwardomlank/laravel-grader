@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Submit Problems</div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/test-input') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-3 control-label">Title</label>

                            <div class="col-md-9">
                                <input id="title" type="title" class="form-control" name="title" value="{{ old('title') }}" required autofocus>

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                            <label for="content" class="col-md-3 control-label">Content</label>

                            <div class="col-md-9">

                                <textarea id="content" class="form-control" name="content" cols="30" rows="3" required autofocus>{{ old('content') }}</textarea>

                                @if ($errors->has('content'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('content') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('sample_input') ? ' has-error' : '' }}">
                            <label for="sample_input" class="col-md-3 control-label">Sample Input</label>

                            <div class="col-md-9">

                                <textarea id="sample_input" class="form-control" name="sample_input" cols="30" rows="3" required autofocus>{{ old('sample_input') }}</textarea>
                                @if ($errors->has('sample_input'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sample_input') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('sample_output') ? ' has-error' : '' }}">
                            <label for="sample_output" class="col-md-3 control-label">Sample Output</label>

                            <div class="col-md-9">
                                
                                <textarea id="sample_output" class="form-control" name="sample_output" cols="30" rows="3" required autofocus>{{ old('sample_output') }}</textarea>

                                @if ($errors->has('sample_output'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sample_output') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('source_code') ? ' has-error' : '' }}">
                            <label for="source_code" class="col-md-3 control-label">Source Code (*.c)</label>

                            <div class="col-md-9">

                                <input id="source" type="file" class="form-control" name="source" value="{{ old('source') }}" required autofocus>

                                @if ($errors->has('source_code'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('source_code') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('testcase_input') ? ' has-error' : '' }}">
                            <label for="testcase_input" class="col-md-3 control-label">Testcase Input</label>

                            <div class="col-md-9">
                                <input id="testcase_input" type="file" class="form-control" name="testcase_input" value="{{ old('testcase_input') }}" required autofocus>

                                @if ($errors->has('testcase_input'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('testcase_input') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-1 col-md-offset-9">
                                <button type="submit" class="btn btn-primary">
                                    Submit Problems
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
