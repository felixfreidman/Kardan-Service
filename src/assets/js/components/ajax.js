// AJAX-запрос для отправки сообщений на почту, которая указана в админке сайта
$(function () {
    $("#orderForm").on("submit", function (e) {
        e.preventDefault();
        var name = $("#userName").val();
        var phone = $("#userPhone").val();
        var mail = $("#userEmail").val();
        var order = $("#userOrder").val();
        var orderButton = document.querySelector('.order-button');
        orderButton.textContent = "Подтверждаем";

        $.ajax({
            type: "post",
            url: "/wp-admin/admin-ajax.php",
            data: {
                action: "ajax_form",
                name: name,
                phone: phone,
                mail: mail,
                order: order,
            },
            success: function (response) {
                orderButton.textContent = response;
                localStorage.removeItem("globalCounter")
                localStorage.removeItem("orderCart")
                setTimeout(() => {
                    window.location.href = "http://kardan.bezrealtora.ru/";
                }, 1200);
            },
        });
    });
});
$(function () {
    $("#applyForm").on("submit", function (e) {
        e.preventDefault();
        console.log("yes");
        var name = $("#userNameApply").val();
        var phone = $("#userPhoneApply").val();
        var orderButton = document.querySelector('.form-button');
        orderButton.textContent = "Подтверждаем";

        $.ajax({
            type: "post",
            url: "/wp-admin/admin-ajax.php",
            data: {
                action: "ajax_apply",
                name: name,
                phone: phone,
            },
            success: function (response) {
                orderButton.textContent = response;
                setTimeout(() => {
                    location.reload();
                }, 1200);
            },
        });
    });
});
$(function () {
    $("#miniApplyForm").on("submit", function (e) {
        e.preventDefault();
        var name = $("#userNameMini").val();
        var phone = $("#userPhoneMini").val();
        var orderButton = document.querySelector('.miniButton');
        orderButton.textContent = "Подтверждаем";

        $.ajax({
            type: "post",
            url: "/wp-admin/admin-ajax.php",
            data: {
                action: "ajax_miniapply",
                name: name,
                phone: phone,
            },
            success: function (response) {
                orderButton.textContent = response;
                setTimeout(() => {
                    location.reload();
                }, 1200);
            },
        });
    });
});
$(function () {
    $("#serviceForm").on("submit", function (e) {
        e.preventDefault();
        var name = $("#serviceName").val();
        var phone = $("#servicePhone").val();
        var orderButton = document.querySelector('.number-application-form_button');
        orderButton.textContent = "Подтверждаем";

        $.ajax({
            type: "post",
            url: "/wp-admin/admin-ajax.php",
            data: {
                action: "ajax_serviceform",
                name: name,
                phone: phone,
            },
            success: function (response) {
                orderButton.textContent = response;
                setTimeout(() => {
                    location.reload();
                }, 1200);
            },
        });
    });
});
$(function () {
    $("#otherApplyForm").on("submit", function (e) {
        e.preventDefault();
        var name = $("#userNameOther").val();
        var phone = $("#userPhoneOther").val();
        var city = $("#userCityOther").val();
        var orderButton = document.querySelector('.form-parent__button');
        orderButton.textContent = "Подтверждаем";

        $.ajax({
            type: "post",
            url: "/wp-admin/admin-ajax.php",
            data: {
                action: "ajax_othercityform",
                name: name,
                phone: phone,
                city: city,
            },
            success: function (response) {
                orderButton.textContent = response;
                setTimeout(() => {
                    location.reload();
                }, 1200);
            },
        });
    });
});
function closeAppliedForm() {
    const closeAppliedForm = document.getElementById("closeAppliedForm");
    const darkLayer__local = document.querySelector(".dark-layer");
    closeAppliedForm.addEventListener("click", () => {
        darkLayer__local.classList.toggle("js--hidden");
    });
}
// Проверяем, что все поля важные заполнены
$(".order-button").on("click", function () {
    inputAuthorization();
});
//   
// Сама функция проверки полей и добавления дополнительных свойств полю
function inputAuthorization() {
    const inputsArray = document.querySelectorAll(".form-input");
    inputsArray.forEach((input) => {
        if (!input.value) {
            const span = addWarningEmptySpan();
            input.classList.add("form-input--warning");
            const inputID = input.id;
            const inputLabel = document.querySelector(`[for=${inputID}]`);
            inputLabel.appendChild(span);
        }
    });
}

// Не хотел перегружать функция проверки и прочее, поэтому создание отдельного спана вынес отдельно
function addWarningEmptySpan() {
    const warningEmptySpan = document.createElement("span");
    warningEmptySpan.classList.add("empty--input");
    return warningEmptySpan;
}
// Как только пользователь решился ввести данные, если было предупреждение я удаляю предупреждения всякие
function deleteWarningSpans() {
    const inputsArray = document.querySelectorAll(".form-input");
    inputsArray.forEach((input) => {
        input.addEventListener("input", () => {
            const inputID = input.id;
            const inputLabel = document.querySelector(`[for=${inputID}]`);
            if (inputLabel.querySelector(".empty--input")) {
                const certainSpan = inputLabel.querySelector(".empty--input");
                certainSpan.remove();
                input.classList.remove("form-input--warning");
            }
        });
    });
}

deleteWarningSpans();

