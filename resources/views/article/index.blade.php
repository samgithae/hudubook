@extends('layouts.app')

@section('content')
    <div class="row">

        @forelse( $articles as $article)
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span>Sammy</span>
                    <span class="pull-right">
                    {{$article->created_at->diffForHumans()}}
                    </span>
                </div>
                <div class="panel-body">
sdsd
                </div>
                <div class="panel-footer clearfix">
                    <i class="fa fa-heart pull-right"></i>
                </div>
            </div>
        </div>
            @empty()
            Article feed will appear here
        @endforelse
    </div>

@endsection