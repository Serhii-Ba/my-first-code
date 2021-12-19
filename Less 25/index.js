
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