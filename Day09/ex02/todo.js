function createDiv() {
    let content = prompt("To-do");
    let elem = getLastid();
    if (content != null && content != "") {
        let div = document.createElement("div");
        div.className = "todo" + elem;
        div.innerHTML = content;
        div.onclick = function(){
            let ans = prompt("Del?", "Y/N");
            if (ans === "Y" || ans === "y" || ans === "yes" || ans === "Yes" || ans === "YES") {
                delCookie(div.className, div.innerHTML);
                this.parentElement.removeChild(this);
            }
        };
        setCookie(div.className, div.innerHTML, 10800000);
        document.getElementById("ft_list").insertBefore(div, document.getElementById("ft_list").childNodes[0]);
    }
}

function setCookie(point, value, time) {
    let date = new Date();
    date.setTime(date.getTime() + time);
    let expires = "expires=" + date.toUTCString();
    document.cookie = point + "=" + value + "; " + expires;
}

function delCookie(point, value) {
    let date = new Date();
    date.setTime(date.getTime() - (1000*60*60*24));
    let expires = "expires="+ date.toUTCString();
    document.cookie = point + "=" + value + "; " + expires;
}

function getCookie(point) {
    let name = point + "=";
    let ca = document.cookie.split(';');
    for(let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0)==' ')
            c = c.substring(1);
        if (c.indexOf(name) == 0)
            return c.substring(name.length,c.length);
    }
    return "";
}

function getLastid() {
    let i = 0;
    let point = "todo" + i;
    let last = 0;
    while (i < 500) {
        if (getCookie(point) != "")
            ls = i;
        i++;
        point = "todo" + i;
    } 
    last++;
    return last;
}

function loadDiv(content, point) {
    if (content != null && content != "") {
        let div = document.createElement("div");
        div.className = point;
        div.innerHTML = content;
        div.onclick = function() {
            let ans = prompt("Del?", "y/n");
            if (ans === "Y" || ans === "y" || ans === "yes" || ans === "Yes" || ans === "YES") {
                delCookie(div.className, div.innerHTML);
                this.parentElement.removeChild(this);
            }
        }
        document.getElementById("ft_list").insertBefore(div, document.getElementById("ft_list").childNodes[0]);
    }
}