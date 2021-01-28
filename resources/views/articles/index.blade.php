@extends('layouts.layout')

@section('content')
<div id="wrapper">
	<div id="page" class="container">
        @foreach ($articles as $article)
        <div id="content" style="margin-bottom: 30px;">
			<div class="title">
                <h2>{{$article->title}}</h2>
            </div>
			<p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>
			{{$article->excerpt}}
        </div>
        @endforeach
	</div>
</div>
@endsection
