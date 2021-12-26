 function clearEnterValue() {
     let enterElement = document.getElementById('enter');
     enterElement.value = '';
 }

 function enterNumber(v) {
    document.form.textview.value = document.form.textview.value + v;
 }

 function enterBack() {
    let back = document.form.textview.value;
    document.form.textview.value = back.substring(0,back.length-1);
 }

 function enterAction(v) {
      document.form.textview.value = document.form.textview.value + v;
 }

 var actVar = ['+', '-', '*', '/'];

 var num1 = '';
 var num2 = '';
 var resVar = '';

 function action() {

        let enterElement = document.getElementById('enter');
        var displayVar = enterElement.value;

        if (displayVar.includes(actVar)) {

                num1 = displayVar.split(actVar,1);
                num2 = displayVar.split(actVar,2);

              switch (actVar) {
                  case '+':
                    resVar = num1 + num2;
                  break;
                  case '-':
                    resVar = num1 - num2;
                  break;
                  case '*':
                    resVar = num1 * num2;
                  break;
                  case '/':
                    resVar = num1 / num2;
                  break;
              }
        //enterElement.value = resVar;
        document.getElementById("result").innerHTML = resVar;
        }
 }

