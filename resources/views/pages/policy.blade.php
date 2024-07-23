@extends('layouts.default', ['title' => 'Policy'])

@section('content')
<div class="wrapper">
    <div class="section-post-detail">
        @foreach ($policies as $policy)
            <div>
                {!! $policy->description !!}
            </div>
        @endforeach
    </div>
</div>
@endsection
