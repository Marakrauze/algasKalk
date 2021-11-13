document.getElementById('submit').addEventListener("click", myFunction);

function myFunction() {
    event.preventDefault();

    let alga = document.getElementById('alga').value;
    let valueYes = 0.30;
    let valueNo = 0.35;
    let sum = document.getElementById('result');

    if (document.getElementById('yes').checked) {

        sum.innerHTML= alga * valueYes + " EUR";

    } else if (document.getElementById('no').checked) {
        sum.innerHTML = alga * valueNo + " EUR";
    }
}