;

function taiDuLieu() {
  var nam = new XMLHttpRequest();
  nam.onreadystatechange = function () {
    if (nam.readyState == 4 && nam.status == 200) {
      var data = nam.responseText;
      var duLieuSauKhiParse = JSON.parse(data);
      console.log(duLieuSauKhiParse.users.length);
      var tableBody = document.getElementById('table-body');
      // i = i + 1;
      for (var i = 0; i < duLieuSauKhiParse.users.length; i++) {
        var tableRow = document.createElement('tr');
        tableBody.appendChild(tableRow);
        var td1 = document.createElement('td');
        td1.innerHTML = duLieuSauKhiParse.users[i].id;
        tableRow.appendChild(td1);
        var td2 = document.createElement('td');
        td2.innerHTML = duLieuSauKhiParse.users[i].name;
        tableRow.appendChild(td2);
        var td3 = document.createElement('td');
        td3.innerHTML = duLieuSauKhiParse.users[i].email;
        tableRow.appendChild(td3);
        var td4 = document.createElement('td');
        td4.innerHTML = duLieuSauKhiParse.users[i].password;
        tableRow.appendChild(td4);
      }
    } else {
      console.log('du lieu chua ve dau' + nam.readyState);
    }
  }
  nam.open('GET', 'https://namcoi.com/projects/users-crud-laravel/public/api/users');
  nam.send();
}