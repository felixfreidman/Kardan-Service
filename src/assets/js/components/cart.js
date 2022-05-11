
Storage.prototype.setObj = function (key, obj) {
    return this.setItem(key, JSON.stringify(obj))
}
Storage.prototype.getObj = function (key) {
    return JSON.parse(this.getItem(key))
}
var globalCounter = 0;
// localStorage.removeItem("globalCounter")
// localStorage.removeItem("bookedServices")
if (localStorage.getItem("globalCounter")) {
    globalCounter = localStorage.getItem("globalCounter");
}


let booksArray = new Array();
if (localStorage.getObj("bookedServices")) {
    booksArray = localStorage.getObj("bookedServices");
}

if (window.location.href.includes('shop')) {
    const orderButtons = document.querySelectorAll('.container-card__button');
    orderButtons.forEach(button => {
        button.addEventListener('click', () => {
            // function AddToCart
            button.classList.add("buttonClicked");
            const allCards = document.querySelectorAll('.container-card');
            allCards.forEach(card => {
                if (card.querySelector('.buttonClicked')) {
                    const orderHeader = card.querySelector(".container-card__name").textContent;
                }
            })
            headerName.textContent = bathroomHeader.textContent;
            const inputPrice = document.querySelectorAll("[name='optionPrice']");
            const image = document.querySelector('.swiper-slide-active').querySelector('img').src;
            let checkedPrice;
            inputPrice.forEach(input => {
                if (input.checked) {
                    checkedPrice = document.querySelector(`[for=${input.id}]`).querySelector('.price').textContent;
                }
            })
            let bathroomObject = {
                serviceCounter: parseInt(globalCounter),
                bathName: bathroomHeader.textContent,
                bathPrice: checkedPrice,
                bathImage: image,
            }
            booksArray.push(bathroomObject);
            localStorage.setObj("bookedServices", booksArray);
            globalCounter++;
            localStorage.setItem("globalCounter", globalCounter);
        });
    });
}

function addToCart() {

}
function createOrder(name, price, id, description) {
    const HTMLString =
        `
        <div class="order-container order-place" id="service${id}">
            <div class="cross js-cross" id="cross${id}">
                <div class="cross-one"> </div>
                <div class="cross-two"></div>
            </div>
            <div class="order-row">
                <div class="order-info">
                    <div class="order-header">
                        ${name}
                    </div>
                    <div class="order-cost">${price} ₽
                    </div>
                </div>
            </div>
            <div class="order-content">
                <div class="content-header">Описание</div>
                <div class="content-description">
                    ${description}
                </div>
            </div>
        </div> 
        `
    return HTMLString;
}
function deleteOrderFromLists() {
    const allCrosses = document.querySelectorAll(".js-cross");
    var orderContainer = document.querySelector(".orders-container");
    var orderList = document.querySelector(".order-list");
    var length = document.querySelectorAll('.remove').length;
    allCrosses.forEach(cross => {
        cross.addEventListener("click", (event) => {
            let crossCounter = cross.id.replace('cross', '');

            const orderItem = document.getElementById(`service${crossCounter}`);
            const orderTotalItem = document.getElementById(`totalOrderID${length + crossCounter}`);
            orderContainer.removeChild(orderItem);
            crossCounter = parseInt(crossCounter);
            var filteredArray = booksArray.filter(function (value, index, arr) {
                value = value.serviceCounter;
                return value != crossCounter;
            });
            localStorage.setObj("bookedServices", filteredArray);

            location.reload()
        })
    })
}

const idArray = new Array();
function compareAndUpdateIDs() {
    const allBathOrders = document.querySelectorAll('.order-container');

    allBathOrders.forEach(bathOrder => {
        let bathID = bathOrder.id.match(/\d+/g);
        bathID = bathID[0];
        idArray.push(bathID);
    })
    const allTotalOrders = document.querySelectorAll('.order-item');
    for (let counter = 0; counter < idArray.length; counter++) {
        const orderItem = allTotalOrders.item(counter);
        const orderHeader = orderItem.querySelector('.order-item__name').textContent;
        if (orderHeader.includes('Станция')) {

            allTotalOrders.item(counter).id = `totalOrderID${idArray[counter]}`;
        }
    }
}


if (window.location.href.includes('/cart')) {
    if (localStorage.getObj("bookedServices")) {
        var bookedItems = localStorage.getObj("bookedServices");
        var orderContainer = document.querySelector(".orders-container");
        var orderList = document.querySelector(".order-list");
        let counter = 0;
        bookedItems.forEach(order => {
            const serviceName = order.bathName;
            const servicePrice = order.bathPrice;
            const serviceCounter = order.serviceCounter;
            const serviceImage = order.bathImage;
            const readyOrder = createOrder(serviceName, servicePrice, serviceCounter, serviceDesription);
            orderContainer.insertAdjacentHTML('beforeend', readyOrder);
            setTimeout(deleteOrderFromLists, 100)
        });

        const ordersContainer = document.querySelectorAll(".order-container");

        setTimeout(compareAndUpdateIDs, 1200);
        ordersContainer.forEach(order => {
            let servicePrice = '';
            if (order.querySelector('.order-cost') && order.querySelector('select')) {
                servicePrice = order.querySelector('.order-cost').textContent;
                let calendar = order.querySelector('[name="orderDate"]');
                calendar.valueAsDate = new Date();
                if (servicePrice.includes('5 800')) {
                    let select = order.querySelector('select');
                    select.value = '16:00';
                } else {
                    let select = order.querySelector('select');
                    select.value = '12:00';
                }




                const totalTime = order.querySelector('.timeInput');
                const selectTime = order.querySelector('.selectInput');
                totalTime.addEventListener('input', () => {


                    let value = totalTime.value;
                    const allOrders = document.querySelectorAll('.order-item');
                    const bathHeader = order.querySelector('.bath-header').textContent;
                    allOrders.forEach(orderTotal => {

                        let orderID = order.id.match(/\d+/g);
                        orderID = orderID[0];
                        let orderTotalID = orderTotal.id.match(/\d+/g);
                        orderTotalID = orderTotalID[0];
                        if (orderTotal.querySelector(".order-item__name").textContent == bathHeader && (orderID == orderTotalID)) {
                            let orderPrice = document.querySelector('.bath-cost').textContent;
                            orderPrice = orderPrice.match(/\d+/g);
                            orderPrice = orderPrice[0] + orderPrice[1];
                            orderPrice = parseInt(orderPrice);
                            orderPrice *= value;
                            orderTotal.querySelector('.order-item__price').textContent = orderPrice + ' ₽';
                            updateTotalNumber()
                            setTimeout(updateUserOrderField, 100)
                        }
                    })
                })
                selectTime.addEventListener('change', () => {
                    let value = selectTime.value;
                    switch (value) {
                        case '16:00':
                            order.querySelector('.bath-cost').textContent = ' 5 800  ₽ / час';
                            break;
                        case '17:00':
                            order.querySelector('.bath-cost').textContent = ' 5 800  ₽ / час';
                            break;
                        case '18:00':
                            order.querySelector('.bath-cost').textContent = ' 5 800  ₽ / час';
                            break;
                        case '19:00':
                            order.querySelector('.bath-cost').textContent = ' 5 800  ₽ / час';
                            break;
                        case '20:00':
                            order.querySelector('.bath-cost').textContent = ' 5 800  ₽ / час';
                            break;
                        case '21:00':
                            order.querySelector('.bath-cost').textContent = ' 5 800  ₽ / час';
                            break;
                        case '22:00':
                            order.querySelector('.bath-cost').textContent = ' 5 800  ₽ / час';
                            break;
                        case '23:00':
                            order.querySelector('.bath-cost').textContent = ' 5 800  ₽ / час';
                            break;
                        case '24:00':
                            order.querySelector('.bath-cost').textContent = ' 5 800  ₽ / час';
                            break;
                        case '01:00':
                            order.querySelector('.bath-cost').textContent = ' 5 800  ₽ / час';
                            break;
                        case '02:00':
                            order.querySelector('.bath-cost').textContent = ' 5 800  ₽ / час';
                            break;
                        case '03:00':
                            order.querySelector('.bath-cost').textContent = ' 5 800  ₽ / час';
                            break;
                        case '04:00':
                            order.querySelector('.bath-cost').textContent = ' 5 800  ₽ / час';
                            break;
                        case '05:00':
                            order.querySelector('.bath-cost').textContent = ' 5 800  ₽ / час';
                            break;
                        default:
                            order.querySelector('.bath-cost').textContent = ' 3 600  ₽ / час';
                            break;

                    }
                    const allOrders = document.querySelectorAll('.order-item');
                    const bathHeader = order.querySelector('.bath-header').textContent;
                    allOrders.forEach(orderInBook => {
                        let orderID = order.id.match(/\d+/g);
                        orderID = orderID[0];
                        let orderTotalID = orderInBook.id.match(/\d+/g);
                        orderTotalID = orderTotalID[0];
                        if (orderInBook.querySelector(".order-item__name").textContent == bathHeader && (orderID == orderTotalID)) {
                            let orderPrice = order.querySelector('.bath-cost').textContent;
                            orderPrice = orderPrice.match(/\d+/g);
                            orderPrice = orderPrice[0] + orderPrice[1];
                            orderPrice = parseInt(orderPrice);
                            orderInBook.querySelector('.order-item__price').textContent = orderPrice + ' ₽';
                            updateTotalNumber()
                            setTimeout(updateUserOrderField, 100)
                        }
                    })
                })
            }

        });
    }

}
function updateTotalNumber() {
    if (document.querySelectorAll(".order-item__price")) {
        const allOrdersNums = document.querySelectorAll(".order-item__price");
        const totalNum = document.getElementById("orderTotalPrice");
        let totalSum = 0;
        allOrdersNums.forEach(price => {
            var realPrice = parseInt(price.textContent)
            totalSum += realPrice;
        })
        let totalNumFinal = totalNum.childNodes[0];
        totalNumFinal.nodeValue = totalSum + ' ';
    }
    else {
        const totalNum = document.getElementById("orderTotalPrice");
        let totalSum = 0;
        let totalNumFinal = totalNum.childNodes[0];
        totalNumFinal.nodeValue = totalSum + ' ';
    }
}
