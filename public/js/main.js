// scroll JS
window.onscroll = function() { myFunction() };

function myFunction() {
    var navbar = document.getElementById("myHeader");
    var navbarFixed = document.getElementById("myHeader-fixed");
    var sticky = navbar.offsetTop;
    if (window.pageYOffset > sticky) {
        navbar.style.display = 'none';
        navbarFixed.style.display = 'block';
        document.getElementById('light').style.display = 'none'
        document.getElementById('dark').style.display = 'block';
    } else {
        navbar.style.display = 'block';
        navbarFixed.style.display = 'none';
        document.getElementById('light').style.display = 'block'
        document.getElementById('dark').style.display = 'none';
    }
}
// slide show 
var slideIndex = 1;
var timer;
window.addEventListener("load", function() {
    slideShow(slideIndex);
    timer = setInterval(function() { plusSlides(1) }, 5000);
})

function plusSlides(anh) {
    clearInterval(timer);
    if (anh < 0) {
        slideShow(slideIndex -= 1);
    } else {
        slideShow(slideIndex += 1);
    }
    if (anh === -1) {
        timer = setInterval(function() { plusSlides(anh + 2) }, 5000);
    } else {
        timer = setInterval(function() { plusSlides(anh + 1) }, 5000);
    }
}

function slideShow(anh) {
    var i;
    var slide = document.getElementsByClassName("mySlides");
    if (anh > slide.length) {
        slideIndex = 1;
    }
    if (anh < 1) {
        slideIndex = slide.length;
    }
    if (anh === undefined) {
        anh = ++slideIndex;
    }
    for (i = 0; i < slide.length; i++) {
        slide[i].style.display = "none";
    }
    slide[slideIndex - 1].style.display = "block";

}
// gio hang JS
var shopPingCart = [];
var saleTotal = 0;

function addToCart(bien) {
    var button = document.getElementById("product-" + bien);
    var id = button.id;
    var img = "<img src = 'images/order-" + bien + ".jpg'>";
    var price = button.parentElement.parentElement.childNodes[3].children[2].textContent;
    var name = button.parentElement.parentElement.childNodes[3].children[1].textContent;
    var quantity = 1;
    var item = {
        id: id,
        img: img,
        name: name,
        price: price,
        quantity: quantity
    };
    var flag = false;
    if (shopPingCart.length > 0) {
        shopPingCart.forEach(value => {
            if (value.id == item.id) {
                value.quantity++;
                flag = true;
                return false;
            }
        });
    }
    if (!flag) {
        shopPingCart.push(item)
    }

    var htmlString = '';
    for (var i = 0; i < shopPingCart.length; i++) {
        htmlString += ' <div class="cart-product">' +
            '<div class="cart-content">' +
            shopPingCart[i].img +
            '<div class="icon-cart" id=' + shopPingCart[i].id + ' onclick = "Xoa(this)"> <i class="fa fa-remove"></i></div>' +
            '<div class="cart-price">' + shopPingCart[i].price + '</div>' +
            '<div class="cart-name">' + shopPingCart[i].name + '</div>' +
            '<div class="cart-price">' + shopPingCart[i].quantity +
            '</div>' + '</div>' +
            '<div class="clr"></div>'
    }
    document.getElementById("cart").innerHTML = htmlString;
    saleTotal += parseFloat(price.substring(30) * quantity);
    document.getElementById('total').innerHTML = '<div class="cart-name">' + "ToTal:" + '</div>' +
        '<div class="cart-price">' + "$ " + saleTotal.toFixed(2) + '</div>';
}

function Xoa(obj) {
    if (confirm("Are You Sure?")) {
        var btn = obj.parentElement;
        var qty = btn.childNodes[4].textContent;
        var price = btn.childNodes[2].textContent;
        for (var i = 0; i <= shopPingCart.length; i++) {
            var idBtn = document.getElementById(shopPingCart[i].id);
            if (shopPingCart[i].id == idBtn.id) {
                shopPingCart.splice(i, 1);
                break;
            }
        }
        var tong = parseFloat(price.substring(30) * qty);
        saleTotal = saleTotal - tong.toFixed(2);
        if (saleTotal < 0) {
            saleTotal = 0
        }
        btn.remove(btn);
        document.getElementById('total').innerHTML = '<div class="cart-name">' + "ToTal:" + '</div>' +
            '<div class="cart-price">' + "$ " + saleTotal.toFixed(2) + '</div>';
    }
}
// check form validation

function checkRef() {
    if (document.myForm.people.value.trim() == "") {
        document.myForm.people.value = "Vui Long Dien Thong Tin";
        document.myForm.people.focus();
        document.myForm.people.classList.add("error");
        return;
    };
    if (!checkDate()) {
        return;
    }
    if (document.myForm.time.value.trim() === "") {
        document.myForm.time.value = "Vui Long Dien Thong Tin";
        document.myForm.time.focus();
        document.myForm.time.classList.add("error");
        return;
    };
    if (document.myForm.yourName.value.trim() === "") {
        document.myForm.yourName.value = "Vui Long Dien Thong Tin";
        document.myForm.yourName.focus();
        document.myForm.yourName.classList.add("error");
        return;
    }
    if (!checkEmail()) {
        return;
    }
    if (!checkPhone()) {
        return;
    }
    if (!checkTextbox()) {
        return;
    }
}

function checkEmail() {
    var email = document.getElementById('email');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (!filter.test(email.value)) {
        alert('Sai Email Vui long nhap lai')
        email.classList.add("error");
        email.focus();
        return false;
    }
    return true;
}

function checkPhone() {
    var phone = document.getElementById('phone');
    var check = /((09|03|07|08|05)+([0-9]{8})\b)/g;
    if (!check.test(phone.value)) {
        alert('Sai SDT vui lòng nhập lại.')
        phone.classList.add("error");
        phone.focus();
        return false;
    }
    return true;
}
// check date
function checkDate() {
    var date = document.getElementById('date');
    var reg = /^(((0[1-9]|[12]\d|3[01])\/(0[13578]|1[02])\/((19|[2-9]\d)\d{2}))|((0[1-9]|[12]\d|30)\/(0[13456789]|1[012])\/((19|[2-9]\d)\d{2}))|((0[1-9]|1\d|2[0-8])\/02\/((19|[2-9]\d)\d{2}))|(29\/02\/((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|(([1][26]|[2468][048]|[3579][26])00))))$/g;
    if (!reg.test(date.value)) {
        alert('Sai date vui lòng nhập lại')
        date.classList.add("error");
        date.focus();
        return false;
    }
    return true;
}
// check Email
function checkTextbox() {
    if (document.myForm.comment.value.length > 200 || document.MyForm.comment.value.length <= 0) {
        alert("Sai Ghi Chu vui long nhap lai");
        document.myForm.comment.classList.add("error");
        document.myForm.comment.focus();
        return false;
    }
    return true;
}

function show(a) {
    var i = document.getElementById("id" + a);
    if (i.className === "display-none") {
        i.className += "display-block";
    } else {
        i.className = i.className.replace("display-block", "")
    }
}
// DEtail
$(document).ready(function() {
    $('.color-choose input').on('click', function() {
        var headphonesColor = $(this).attr('data-image');
        $('.active').removeClass('active');
        $('.left-column-detail img[data-image = ' + headphonesColor + ']').addClass('active');
        $(this).addClass('active');
    });

});