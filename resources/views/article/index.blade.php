@extends('layouts.app')

@section('content')
    <div class="row">

        @forelse( $articles as $article)
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">



                        <span>   {{  User::find($article->user_id) }}</span>

                    <span class="pull-right">
                    {{$article->created_at->diffForHumans()}}
                    </span>
                </div>
                <div class="panel-body">
{{$article->shortContent}}
                    <a class="info" href="/articles/{{$article->id}}">Read more</a>
                </div>
                <div class="panel-footer clearfix ">
                    @if($article->user_id==Auth::id())
                        <form class="pull-right" method="POST" action="/articles/{{$article->id}}" style="margin-left: 25px">
                            {{ csrf_field() }}
                            {{method_field('DELETE')}}
                            <button class="btn btn-danger btn-sm">Delete

                            </button>
                        </form>

                        @endif


                    <i class="fa fa-heart pull-right "></i>
                </div>
            </div>
        </div>
            @empty
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="jumbotron text-center">
                        Article feeds will appear here
                    </div>
                </div>

            </div>

        @endforelse

    </div>
    <div class="row col-md-6 col-md-offset-3">
        {{$articles-> links()}}
    </div>

@endsection