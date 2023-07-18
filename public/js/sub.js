function calculatePrice(value, value2) {
    if(value === 'student' && value2 === 'student'){
        document.getElementById('price').innerHTML = '40';
        document.getElementById('og-price').innerHTML = '40';
    }
    else if(value === 'web' && value2 !== 'student'){
        document.getElementById('og-price').innerHTML = '290';
        document.getElementById('price').innerHTML = '290';
    }
    else if(value === 'desktop' && value2 !== 'student'){
        document.getElementById('og-price').innerHTML = '140';
        document.getElementById('price').innerHTML = '140';
    }
    else if(value === 'mobile' && value2 !== 'student'){
        document.getElementById('og-price').innerHTML = '390';
        document.getElementById('price').innerHTML = '390';
    }
    else if(value === 'cross' && value2 !== 'student'){
        document.getElementById('og-price').innerHTML = '490';
        document.getElementById('price').innerHTML = '490';
    }

}
function changeForm(value){
    if(value === 'student'){
        document.getElementById('student').style.display = 'block';
        document.getElementById('non-student').style.display = 'none';
    }
    else if(value === 'non-student'){
        document.getElementById('non-student').style.display = 'block';
        document.getElementById('student').style.display = 'none';
    }
}
function fakedays(value) {
    document.getElementById('days').innerHTML = value.toString();
    deliveryDays(value.toString());
}

function deliveryDays(value) {
    const price = parseFloat(document.getElementById('og-price').innerHTML.toString());
    if(value === '7'){
        const temp = price + price;
        document.getElementById('price').innerHTML = temp.toString();
    }
    else if(value === '14'){
        const temp = price + (0.5 * price);
        document.getElementById('price').innerHTML = temp.toString();
    }
    else if(value === '21'){
        const temp = price + (0.25 * price);
        document.getElementById('price').innerHTML = temp.toString();
    }
    else if(value === '21'){
        const temp = price + (0.25 * price);
        document.getElementById('price').innerHTML = temp.toString();
    }
    else if(value === '28'){
        document.getElementById('price').innerHTML = price.toString();
    }

}