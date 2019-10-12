<form action="/users/create" method="GET">
  <button type="submit">Tao Nguoi Dung Moi</button>
</form>
@foreach($users as $user)
<div style="display:flex;">
  <h3>{{$user->id}}</h3>
  <h1>{{$user->name}}</h1>
  <form action="{{route('users.show',$user->id)}}" method="GET">
    <button type="submit">Xem Nguoi Dung Nay</button>
  </form>
  {{-- // XOA NGUOI DUNG // --}}
  <form action="{{route('users.destroy', $user->id)}}" method="POST">
    <input type="hidden" name="_method" value="DELETE">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <button type="submit">Xoa Nguoi Dung Nay</button>
  </form>
  {{-- SUA NGUOI DUNG --}}
  <form action="{{route('users.edit',$user->id)}}" method="GET">
    <button type="submit">Sua Nguoi Dung</button>
  </form>
</div>
<hr>
@endforeach