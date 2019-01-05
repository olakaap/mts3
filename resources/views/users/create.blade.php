@extends('layouts.app')

@section('title', '| create User')

@section('content')

    <div class="right_col" role="main">

        <h1><i class='fa fa-user'></i> Add User</h1>
        <hr>

        {{-- @include ('errors.list') --}}

        {{ Form::open(array('url' => 'users')) }}

        {{--<div class="form-group">--}}
        {{--{{ Form::label('name', 'Name') }}--}}
        {{--{{ Form::text('name', '', array('class' => 'form-control')) }}--}}
        {{--</div>--}}

        <div class="form-group">
            <label for="name">Full Name * :</label>
            <input type="text" id="name" class="form-control" name="name" placeholder="Full Name" required/>
        </div>
        <div class="form-group">
            <label for="email">Email * :</label>
            <input type="email" id="email" class="form-control" placeholder="email address" name="email" data-parsley-trigger="change" required/>
        </div>
        {{--<div class="form-group">--}}
        {{--{{ Form::label('email', 'Email') }}--}}
        {{--{{ Form::email('email', '', array('class' => 'form-control')) }}--}}
        {{--</div>--}}

        {{--<div class='form-group'>--}}
        {{--@foreach ($roles as $role)--}}
        {{--{{ Form::checkbox('roles[]',  $role->id ) }}--}}
        {{--{{ Form::label($role->name, ucfirst($role->name)) }}<br>--}}

        {{--@endforeach--}}
        {{--</div>--}}
        <div class="form-group">
            @foreach ($roles as $role)
                {{ Form::checkbox('roles[]',  $role->id ) }}
                {{ Form::label($role->name, ucfirst($role->name)) }}<br>
            @endforeach
        </div>


        {{--<div class="form-group">--}}
        {{--{{ Form::label('password', 'Password') }}<br>--}}
        {{--{{ Form::password('password', array('class' => 'form-control')) }}--}}

        {{--</div>--}}
        <div class="form-group">
            <label>Password *:</label>
            <input type="password" class="form-control" placeholder="Password">
        </div>

        <div class="form-group">
            <label>Confirm Password *:</label>
            <input type="password_confirmation" class="form-control" placeholder="Password">
        </div>
        {{--<div class="form-group">--}}
            {{--{{ Form::label('password', 'Confirm Password') }}<br>--}}
            {{--{{ Form::password('password_confirmation', array('class' => 'form-control')) }}--}}

        {{--</div>--}}

        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
            <button type="submit" class="btn btn-primary">Cancel</button>
            <button type="submit" class="btn btn-success">Submit</button>
        </div>

        {{--{{ Form::submit('Add', array('class' => 'btn btn-primary')) }}--}}

        {{ Form::close() }}

    </div>

@endsection


