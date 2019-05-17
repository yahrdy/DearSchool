@extends('layouts.app')

@section('content')
    <div class="row align-content-center">
        <div class="col-sm-12 col-md-8 col-lg-6">
            <a href="bangla">
                <div class="card m-5">
                    <div class="card-header">Bangla</div>
                    <div class="card-body">Your progression is 25%</div>
                </div>
            </a>
            <a href="english">
                <div class="card m-5">
                    <div class="card-header">English</div>
                    <div class="card-body">Your progression is 20%</div>
                </div>
            </a>
            <a href="general-math">
                <div class="card m-5">
                    <div class="card-header">General Mathematics</div>
                    <div class="card-body">Your progression is 30%</div>
                </div>
            </a>
            <a href="ict">
                <div class="card m-5">
                    <div class="card-header">Information And Communication Technology</div>
                    <div class="card-body">Your progression is 20%</div>
                </div>
            </a>
        </div>
        <div class="col-sm-12 col-md-8 col-lg-6">
            <a href="physics">
                <div class="card m-5">
                    <div class="card-header">Physics</div>
                    <div class="card-body">Your progression is 20%</div>
                </div>
            </a>
            <a href="chemistry">
                <div class="card m-5">
                    <div class="card-header">Chemistry</div>
                    <div class="card-body">Your progression is 20%</div>
                </div>
            </a>
            <a href="higher-math">
                <div class="card m-5">
                    <div class="card-header">Higher Mathematics</div>
                    <div class="card-body">Your progression is 20%</div>
                </div>
            </a>
        </div>
    </div>
@endsection