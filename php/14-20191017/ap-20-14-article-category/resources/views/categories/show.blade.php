<h1>{{$category->name}}</h1>
@foreach($category->articles as $article)
<a href="{{route('articles.show',$article->id)}}">{{$article->title}}</a>
<br>
@endforeach