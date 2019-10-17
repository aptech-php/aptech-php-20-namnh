<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <form action="{{route('articles.store')}}" method="POST">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div>
      <label for="">Title</label>
      <input name="title" type="text">
    </div>
    <div>
      <label for="">Description</label>
      <textarea name="description" id="" cols="30" rows="10"></textarea>
    </div>
    <!-- LUA CHON CATEGORY -->
    <div>
      <select name="categoryId" id="">
        @foreach($categories as $category)
        <option value="{{$category->id}}">
          {{$category->name}}
        </option>
        @endforeach
      </select>
    </div>
    <div>
      <textarea name="content" id="" cols="30" rows="10"></textarea>
    </div>
    <button type="submit">Gui Len May Chu</button>
  </form>
</body>

</html>