@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Translate</div>

                <div class="card-body">
                    <form class="formTranslate" action="{{ route('translate.post') }}" method="POST">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" name="keyword" class="form-control" placeholder="Từ khóa" aria-label="Từ khóa" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-danger">Dịch</button>
                            </div>
                        </div>
                        @if($translate)
                            <span class="translate">{{ $translate }}</span>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
