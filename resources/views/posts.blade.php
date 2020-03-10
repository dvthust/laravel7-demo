@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Posts</div>

                <div class="row">
                    @foreach($posts as $post)
                        <x-post-item :post="$post" class="mt-3" />
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
