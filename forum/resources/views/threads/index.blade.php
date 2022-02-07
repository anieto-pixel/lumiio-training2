@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">S
            <div class="col-and-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-hearing">
                        Forum Threads
                    </div>

                    <div class="panel-body">
                        @foreach ($threads as $thread)
                            <article>
                                <h4>
                                    {{$thread->title}}
                                </h4>
                                <div
                                    class="body">{{$thread->body}}
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
