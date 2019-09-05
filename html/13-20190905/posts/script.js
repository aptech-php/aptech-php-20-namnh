function taiDuLieu() {
  var http = new XMLHttpRequest();
  http.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      // var data = JSON.parse(this.responseText);
      // var baiDauTien = data[0];
      // var div = document.createElement('div');
      // div.innerHTML = baiDauTien.title;
      // document.body.appendChild(div);

      // div.classList.add()
      // div.setAttribute('class','container d-flex');

      // var img = document.createElement('img');
      // img.setAttribute("src", baiDauTien.image_url);
      // document.body.appendChild(img);

      // var posts = "<div class='card'></div>"

      var div = document.createElement('div');
      div.innerHTML = 'hello world';
      // document.body.append
      var h1 = document.createElement('h1');
      h1.innerHTML = 'php 20';

      div.appendChild(h1);
      document.body.appendChild(div);

      // <img src="lsdajflsdlfj">

    }
  }
  http.open('GET', 'https://namcoi.com/projects/news-website-laravel/public/api/posts');
  http.send();
}

document.getElementById('nutTai').addEventListener("click", taiDuLieu);