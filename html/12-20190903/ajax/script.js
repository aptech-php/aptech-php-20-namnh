;

function taiDuLieu() {
  var nam = new XMLHttpRequest();
  nam.onreadystatechange = function () {
    if (nam.readyState == 4 && nam.status == 200) {
      var data = nam.responseText;
      var duLieuSauKhiParse = JSON.parse(data);
      console.log(duLieuSauKhiParse);
    } else {
      console.log('du lieu chua ve dau' + nam.readyState);
    }
  }
  nam.open('GET', 'https://namcoi.com/projects/users-crud-laravel/public/api/users');
  nam.send();
}