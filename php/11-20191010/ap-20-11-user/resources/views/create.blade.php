<form action="/users" method="POST">
  <input type="hidden" name="_token" value={{csrf_token()}}>
  <div>
    <input type="text" placeholder="Ten cua nguoi dung" name="ten">
  </div>
  <br>
  <div>
    <input type="email" placeholder="Email nguoi dung" name="thu-dien-tu">
  </div>
  <br>
  <div>
    <input type="password" name="mat-khau" placeholder="Mat Khau">
  </div>
  <br>
  <button type="submit">Tao Nguoi Dung</button>
</form>