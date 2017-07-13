# Map of your users
Данный модуль позволяет сохранить координаты, каждого пользователя
и вывести все сохраненные точки на карту google.
Требуется БД, для сохранения геометок, <br>
и google API-ключ.<br>
Проверить работоспособность можно по ссылке http://geek42.webutu.com/ <br>
<b><i>недароботки:</b></i><br>
1)нет функции, которая определяла бы координаты по клику на карте  <br>
2)при обращении к базе, очень некрасивая сортировка координат (через метод split),  <br>
```markdown
var data = getdata.split('||');  

        var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'; var j = 0;
        var markers = [];
        for (var i = 0; i <data.length-1; i=i+3) {
          var latLng = new google.maps.LatLng(data[i],
              data[i+1]);
          var marker = new google.maps.Marker({
            position: latLng,
            title: data[i+2],
            label: labels[j]
          });
          markers.push(marker);  j++;
        }
```
это серьезное нарушение, обязательно нуждается в исправлении! <br>
