
// по клику на экране переместит квадрат (в консоли покажет координаты каждого клика)

// var elem = document.querySelector('#sq1');
// window.addEventListener('click', function (event) {
//
//     console.log(event.clientX); // инфо в консоль
//     console.log(event.clientY); // инфо в консоль
//     elem.style.top = event.clientY; //курсор в левом верхнем углу квадрата
//     elem.style.left = event.clientX;
//
// });


// по движению мышкой на экране переместит квадрат (в консоли покажет координаты каждого клика)
//
//     document.getElementById('sq').addEventListener('mousemove', function(event) {
//     let square = document.getElementById('sq1');
//        console.log(event.clientX); // инфо в консоль
//        console.log(event.clientY); // инфо в консоль
//        square.style.top = event.clientY - (sq1.offsetHeight / 2); // offset - курсор всегда в центре квадрата
//        square.style.left = event.clientX - (sq1.offsetWidth / 2);
//
//     });
//


/* В этом задании ты будешь двигать квадрат по экрану браузера.
Твой квадрат (к примеру его размеры 200х200 пикселей), по умолчанию имеет фон черного цвета.
При перемещении квадрата по экрану, его цвет фона должен изменяться.
Подели экран мысленно на 4-е секции (правый верхний и нижний угол, левый верхний и нижний угол).
При попадании в разные части экрана, цвет квадрата должен изменится. */


var clH = document.documentElement.clientHeight; // высота
var clW = document.documentElement.clientWidth; // ширина

var clHhalf = clH / 2; // половина высоты
var clWhalf = clW / 2; // половина ширины


var elem = document.querySelector('#sq1');


 window.addEventListener('click', function (event) {

     console.log(event.clientX); // инфо в консоль
     console.log(event.clientY); // инфо в консоль

     elem.style.top = event.clientY - (sq1.offsetHeight / 2);
     elem.style.left = event.clientX - (sq1.offsetWidth / 2);

     if (event.clientY < clHhalf && event.clientX > clWhalf)
     {
         window.addEventListener('click', function () {
             elem.style.background = 'red';
             elem.style.top = event.clientY - (sq1.offsetHeight / 2);
             elem.style.left = event.clientX - (sq1.offsetWidth / 2);
         })
     } else {
         window.addEventListener('click', function () {
         elem.style.background = 'black';
         elem.style.top = event.clientY - (sq1.offsetHeight / 2);
         elem.style.left = event.clientX - (sq1.offsetWidth / 2);
     })};

     if (event.clientY > clHhalf && event.clientX > clWhalf)
     {
         window.addEventListener('click', function () {
             elem.style.background = 'blue';
             elem.style.top = event.clientY - (sq1.offsetHeight / 2);
             elem.style.left = event.clientX - (sq1.offsetWidth / 2);
         })
     }

     if (event.clientY > clHhalf && event.clientX < clWhalf)
     {
         window.addEventListener('click', function () {
             elem.style.background = 'yellow';
             elem.style.top = event.clientY - (sq1.offsetHeight / 2);
             elem.style.left = event.clientX - (sq1.offsetWidth / 2);
         })
     }
 });














