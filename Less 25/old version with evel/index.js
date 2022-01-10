 function clearEnterValue() {
     let enterElement = document.getElementById('enter');
     enterElement.value = '';
 }
 // вар 1
 // function enterNumber(v) {
 //    document.form.textview.value = document.form.textview.value + v;
 // }

 // вар 2
 function enterNumber(v) {
     document.getElementById("enter").value += v;
 }

 function enterBack() {
    let back = document.form.textview.value;
    document.form.textview.value = back.substring(0,back.length-1);
 }

 //если бы можно было использовать eval, то...
 function enterAction() {
     var num1 = document.getElementById("enter").value;
     var num2 = eval(num1);
     document.getElementById("enter").value = num2;
 }
