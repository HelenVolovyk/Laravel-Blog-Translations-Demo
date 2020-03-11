@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Article') }} {{ $article->title }}</div>

                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th width="100">{{ __('Title') }}</th>
                            <td>{{ $article->title }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('Full Text') }}</th>
                            <td>{{ $article->full_text }}</td>
                        </tr>
                    </table>

                    <p>
                        <a href="{{ route('articles.index') }}">{{ __('Back to list') }}</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
