function sendMes() {
    var message = document.getElementById("text").value;

    var message1 = document.createElement('small');
    message1.innerHtml = message;

    var container = document.createElement('div');
    container.appendChild(message1);
    container.className = "media-body";

    var container2 = document.createElement('div');
    container2.appendChild(container);
    container2.className = "msg";
    document.getElementById("messagess").appendChild(container2);

}
