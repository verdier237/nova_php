//************ function ************
function showLoading() {
    $("#loading").show();
}

function hideLoading() {
    $("#loading").hide();
}

function showToast(msg) {


    console.log(msg);
    $("#toast-text")[0].innerText = msg;
    window.clearTimeout(ref);
    toast.style.display = "block";
    ref = window.setTimeout(function () {
        toast.style.display = "none";
    }, 1000);
}

function btnClip(clip) {
    clip.on('success', function (e) {
        showToast("success");
    });
    clip.on('error', function (e) {
        alert('copy failed, please copy manually');
    });
}

function showAlert(msg) {
    console.log(msg);
    return Swal.fire({
        title: 'Tips',
        text: msg,
        button: {
            text: "OK",
            closeModal: false
        },
        allowOutsideClick: false
    });
}

function showAlertIconHtml(icon, html) {
    console.log(html);
    return Swal.fire({
        imageUrl: icon,
        imageWidth: 99,
        imageHeight: 73,
        html: html,
        button: {
            text: "OK",
            closeModal: false
        },
        allowOutsideClick: false
    });
}

//************ main ************
// variable
var ref, senderName;
var tick = $("#tick").text();
var sessionId = $("#sessionId").text();
var callBackUrl = $("#callBackUrl").text();
var uploadUrl = $("#uploadUrl").text();

// Countdown
var curTick = new Date().getTime();
var maxTime = parseInt((tick - curTick) / 1000);

function CountDown() {
    if (maxTime > 0) {
        --maxTime;
        $("#timer").html(maxTime);
    }
    // else {
    //     Swal.close();
    //     $("#detail-layout").css('display', 'none');
    //     $("#overtime").css('display', 'block');
    //     clearInterval(timer);
    // }
}

function countdown() {
    var i = document.getElementById('counter');
    i.innerHTML = parseInt(i.innerHTML)-1;
    if (parseInt(i.innerHTML)==0) {
        clearInterval(timerId);

        Swal.close();
        $("#detail-layout").css('display', 'none');
        $("#overtime").css('display', 'block');
        clearInterval(timer);
    }
}
var timerId = setInterval(function(){ countdown(); }, 1000);


timer = setInterval("CountDown()", 1000);

// Copy monitor
btnClip(new ClipboardJS('#btn-account', {
    text: function () {
        return $("#account").text();
    }
}));
btnClip(new ClipboardJS('#btn-money', {
    text: function () {
        return $("#money").text();
    }
}));
btnClip(new ClipboardJS('#btn-reference', {
    text: function () {
        return $("#reference").text();
    }
}));

// main
showAlert('After transfer, kindly upload your payment reciept, otherwise the recharge will not be successful.');

function submit() {
    senderName = $("#inputName").val();
    if (senderName == '') {
        showToast("please enter the sender name");
        return;
    }

    showLoading();

    $.ajax({
        url: callBackUrl,
        type: 'post',
        contentType: "application/json",
        data: JSON.stringify({session: sessionId, payName: senderName}),
        success: function (response) {
            console.log(response);
            hideLoading();
            showToast('Submit successful!');
            $("#float-btn").css('display', 'none');
        },
        error: function (data) {
            console.log(data);
            hideLoading();
            showToast('Submit successful!');
            $("#float-btn").css('display', 'none');
        }
    });
}
