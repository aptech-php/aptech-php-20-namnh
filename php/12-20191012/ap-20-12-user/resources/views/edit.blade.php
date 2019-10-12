<form action="{{route('users.update',$user->id)}}" method="POST">
  <input type="hidden" name="_method" value="PUT">
  <input type="hidden" name="_token" value={{csrf_token()}}>
  <div>
    <input type="text" value="{{$user->name}}" name="name">
  </div>
  <div>
    <input type="email" value="{{$user->email}}" name="email">
  </div>
  <div>
    <input type="password" value="{{$user->password}}" name="password">
  </div>
  <button type="submit">Cap Nhat</button>
</form>