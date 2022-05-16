
// Расширяю возможности локального хранилища
Storage.prototype.setObj = function (key, obj) {
    return this.setItem(key, JSON.stringify(obj))
}
Storage.prototype.getObj = function (key) {
    return JSON.parse(this.getItem(key))
}
// Объявляю глобальный счетчик, если уже такой есть, то беру значение с него, если же он новый, то с 0 ведется счет
var globalCounter = 0;
// localStorage.removeItem("globalCounter")
// localStorage.removeItem("orderCart")
if (localStorage.getItem("globalCounter")) {
    globalCounter = localStorage.getItem("globalCounter");
}
// Объявляю пустой массив заказов, если же в корзине есть какие-то заказы, тогда я присваиваю массив сохранненому значению

let booksArray = new Array();
if (localStorage.getObj("orderCart")) {
    booksArray = localStorage.getObj("orderCart");
}

// Когда мы находимся на странице любого магазина мы навешиваем события на кнопки, чтобы добавлять в корзину

// Описание работы функции
// Функция добавления работает достаточно просто, если произошло нажатие на кнопку, на кнопку попадает класс buttonClicked
// Затем я ищу нужную карточку, где есть кнопка с таким классом, затем я забираю все нужные данные с этой карточки
// А именно Название, Цену, Описание, а также присваиваю уникальный идентификатор через globalCounter, все эти
// Данные я помешаю в объект заказа, а затем этот объект помещаю в массив объектов заказа))
// Этот массив я отправляю в локальное хранилище, чтобы потом уже парсить данные с него 

if (window.location.href.includes('shop') || window.location.href.includes('auto')) {
    console.log('logged');
    const orderButtons = document.querySelectorAll('.cart-button');
    orderButtons.forEach(button => {
        button.addEventListener('click', () => {
            button.classList.add("buttonClicked");
            const allCards = document.querySelectorAll('.container-card');
            allCards.forEach(card => {
                if (card.querySelector('.buttonClicked')) {
                    const orderHeader = card.querySelector(".container-card__name").textContent.trim();
                    const orderPrice = card.querySelector(".container-card__price").textContent.trim();
                    const orderDescription = card.querySelector(".container-card__description").textContent.trim();
                    const orderObject = {
                        orderID: parseInt(globalCounter),
                        orderName: orderHeader,
                        orderPrice: orderPrice,
                        orderDescription: orderDescription
                    };
                    booksArray.push(orderObject);
                    localStorage.setObj("orderCart", booksArray);
                    globalCounter++;
                    localStorage.setItem("globalCounter", globalCounter);
                    setTimeout(() => {
                        window.location.href = 'cart';
                    }, 600);
                }
            });
        });
    });
}

if (window.location.href.includes('staff')) {
    console.log('logged');
    const orderButton = document.querySelector('.cart-button');
    orderButton.addEventListener('click', () => {
        const orderHeader = document.querySelector(".buy-parent__product-header").textContent.trim();
        const orderPrice = document.querySelector(".buy-parent__price-tag").textContent.trim();
        const orderDescription = document.querySelector(".buy-parent__product-description").textContent.trim();
        const orderObject = {
            orderID: parseInt(globalCounter),
            orderName: orderHeader,
            orderPrice: orderPrice,
            orderDescription: orderDescription
        };
        booksArray.push(orderObject);
        localStorage.setObj("orderCart", booksArray);
        globalCounter++;
        localStorage.setItem("globalCounter", globalCounter);
        setTimeout(() => {
            window.location.href = 'cart';
        }, 600);
    });
}
// Когда мы находимя на странице корзины, добавляем весь функционал для блоков
if (window.location.href.includes('/cart')) {

    setTimeout(updateTotalNumber, 100)
    setTimeout(updateUserOrderField, 100)
    if (localStorage.getObj("orderCart")) {
        // Создание блоков в списке заказов
        const orderArray = localStorage.getObj("orderCart");
        const orderContainer = document.querySelector(".orders-container");
        orderArray.forEach(order => {
            const orderName = order.orderName;
            const orderPrice = order.orderPrice;
            const orderID = order.orderID;
            const orderDescription = order.orderDescription;
            const readyOrder = createOrder(orderName, orderPrice, orderID, orderDescription);
            orderContainer.insertAdjacentHTML('beforeend', readyOrder);
            setTimeout(deleteOrderFromLists, 100)
        });
        // Создание элементов в списке заказов в блоке Всего
        const orderList = document.querySelector(".order-list");
        let serviceName = '';
        let servicePrice = '';
        const ordersBlock = orderContainer.querySelectorAll('.order-container');
        ordersBlock.forEach((order, index) => {
            serviceName = order.querySelector('.order-header').textContent.trim();
            servicePrice = order.querySelector('.order-cost').textContent.trim();
            servicePrice = servicePrice.match(/\d+/g);
            servicePrice = servicePrice[0];
            const totalOrder = createOrderTotal(serviceName, servicePrice, index);
            orderList.insertAdjacentHTML('beforeend', totalOrder);
        })

    }
}


// Скрытое поле формы, которое собирает всю информацию о заказе
function updateUserOrderField() {
    const userOrderField = document.getElementById("userOrder");
    const userOrderList = document.querySelectorAll(".order-item");
    const totalPrice = document.getElementById("orderTotalPrice").textContent.trim();
    let orderString = '';
    userOrderList.forEach(order => {
        const orderName = order.querySelector(".order-item__name").textContent.trim();
        const orderPrice = order.querySelector(".order-item__price").textContent.trim();
        orderString = `${orderString} ${orderName} - ${orderPrice}.   `

    });
    let totalString = `Всего: ${totalPrice}`;
    orderString += totalString;
    userOrderField.value = orderString;
    console.log(userOrderField.value);
}

// Фунция обновления числа Всего с списке заказов
// Собирает все числа из списка, складывает их и выводит

function updateTotalNumber() {
    if (document.querySelectorAll(".order-item__price")) {
        const allOrdersNums = document.querySelectorAll(".order-item__price");
        const totalNum = document.getElementById("orderTotalPrice");
        let totalSum = 0;
        allOrdersNums.forEach(price => {
            var realPrice = parseInt(price.textContent.trim())
            totalSum += realPrice;
        })
        let totalNumFinal = totalNum.childNodes[0];
        totalNumFinal.nodeValue = totalSum + ' ';
    }
}

// Функция удаления из списка заказа
// Собирает все крестики, забирает у них все идентификаторы и забирает сам номер
// Номер креста равен номеру блока, по нажатию на крест, ищется блок и элемент списка с таким же номером
// из блока заказов удаляется нужный блок, затем создается новый массив заказов на основе старого - удаленный блок
// в локальное хранилище добавляется уже новый массив, перезарписывая старый, затем страница перезагружается
function deleteOrderFromLists() {
    const allCrosses = document.querySelectorAll(".js-cross");
    var orderContainer = document.querySelector(".orders-container");
    var orderList = document.querySelector(".order-list");
    allCrosses.forEach(cross => {
        cross.addEventListener("click", (event) => {
            let crossCounter = cross.id.replace('cross', '');
            const orderItem = document.getElementById(`service${crossCounter}`);

            orderContainer.removeChild(orderItem);
            crossCounter = parseInt(crossCounter);
            var filteredArray = booksArray.filter(function (value) {
                value = value.orderID;
                return value != crossCounter;
            });
            localStorage.setObj("orderCart", filteredArray);
            location.reload()

        })
    })
}

// Функция-фабрика для создания блоков с заказами в корзине
// На вход 4 параметра, которые нужны, чтобы вставить нужные данные в блок-шаблон
// Из названия понятно, кто есть кто)
// Возвращает блок HTML-кода
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
                    <div class="order-cost">${price}
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
// Функция-фабрика для создания блоков с заказами в корзине
// На вход 3 параметра, которые нужны, чтобы вставить нужные данные в блок-шаблон
// Из названия понятно, кто есть кто)
// Возвращает блок HTML-кода
function createOrderTotal(name, price, id) {
    const HTMLString =
        `
      <div class="order-item order-item--service" id="totalOrderID${id}">
        <div class="order-item__name" id="orderServiceName">${name}</div>
        <div class="order-item__bar"> </div>
        <div class="order-item__price" id="orderServicePrice">${price} <span>₽</span></div>
    </div>
    `;
    return HTMLString;
}




// const idArray = new Array();
// function compareAndUpdateIDs() {
//     const allBathOrders = document.querySelectorAll('.order-container');

//     allBathOrders.forEach(bathOrder => {
//         let bathID = bathOrder.id.match(/\d+/g);
//         bathID = bathID[0];
//         idArray.push(bathID);
//     })
//     const allTotalOrders = document.querySelectorAll('.order-item');
//     for (let counter = 0; counter < idArray.length; counter++) {
//         const orderItem = allTotalOrders.item(counter);
//         const orderHeader = orderItem.querySelector('.order-item__name').textContent.trim();
//         if (orderHeader.includes('Станция')) {

//             allTotalOrders.item(counter).id = `totalOrderID${idArray[counter]}`;
//         }
//     }
// }