@extends('layouts.app')
@section('content')
    <form method="post" action="{{route('profile.update',['id'=>auth::id()])}}">
        {{csrf_field()}}
        {{ method_field('PATCH') }}
        <div class="form-group">
            <label for="institute">Institute</label>
            <select class="form-control" id="class" name="institute">
                <option selected>{{ auth()->user()->profile->institute }}</option>
                <option>Civil Aviation High School</option>
                <option>Dhaka College</option>
                <option>Chittagong University</option>
            </select>
        </div>
        <div class="form-group">
            <label for="class">Class</label>
            <select class="form-control" id="class" name="class">
                <option selected>{{ auth()->user()->profile->class }}</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
            </select>
        </div>
        <div class="form-group">
            <label for="group">Group</label>
            <select class="form-control" id="class" name="group">
                <option selected value="{{auth()->user()->profile->group}}">{{ucfirst(auth()->user()->profile->group)}}</option>
                <option value="science">Science</option>
                <option value="commerce">Commerce</option>
                <option value="humanities">Humanities</option>
            </select>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-outline-info">Update</button>
        </div>
    </form>
@endsection