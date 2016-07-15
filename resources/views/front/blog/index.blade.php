@extends('front.template1')

@section('main')

    <div class="container">
        <div class="subheading"></div>
        <div class="row" style="margin-top: 100px;">
            @foreach($posts->chunk(2) as $chunk)
                <div class="row">
                @foreach($chunk as $post)
                <div class="col-md-6 col-xs-12">
                    <div class="box">
                        <div class="text-center">
                            <h2>{{ $post->title }}
                                <br>
                                <small>{{ $post->user->username }} {{ trans('front/blog.on') }} {!! $post->created_at . ($post->created_at != $post->updated_at ? trans('front/blog.updated') . $post->updated_at : '') !!}</small>
                            </h2>
                        </div>
                        <div>
                            <p>{!! $post->summary !!}</p>
                        </div>
                        <div class="text-center">
                            {!! link_to('blog/' . $post->slug, trans('front/blog.button'), ['class' => 'btn btn-default btn-lg']) !!}
                            <hr>
                        </div>
                    </div>
                </div>
                @endforeach
                </div>

            @endforeach
            <div class="col-lg-12 text-center">
                {!! $links !!}
            </div>

        </div>
    </div>

@stop

