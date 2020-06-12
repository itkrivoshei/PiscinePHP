function createDiv() {
    let content = prompt("Your to-do", "Ex: What you won't do");
    let nbelem = getLastid();
    if (content != null && content != "") {
        let div = document.createElement("div");
        div.className = "todo" + nbelem;
        div.innerHTML = content;
        div.onclick = function(){
            let ans = prompt("Are you sure you want to delete that to-do?", "Y/N");
            if (ans === "Y" || ans === "y" || ans === "yes" || ans === "Yes" || ans === "YES") {
                delCookie(div.className, div.innerHTML);
                this.parentElement.removeChild(this);
            }
        };
        setCookie(div.className, div.innerHTML, 10800000);
        document.getElementById("ft_list").insertBefore(div, document.getElementById("ft_list").childNodes[0]);
    }
}

function getLastid()
{
    let i = 0;
    let cname = "todo" + i;
    let lastid = 0;
    while (i < 500)
    {
        if (getCookie(cname) != "")
            lastid = i;
        i++;
        cname = "todo" + i;
    }
    lastid++;
    return lastid;
}

function loadDiv(content, cname) {
    if (content != null && content != "") {
        let div = document.createElement("div");
        div.className = cname;
        div.innerHTML = content;
        div.onclick = function() {
            let ans = prompt("Are you sure you want to delete that to-do?", "Y/N");
            if (ans === "Y" || ans === "y" || ans === "yes" || ans === "Yes" || ans === "YES") {
                delCookie(div.className, div.innerHTML);
                this.parentElement.removeChild(this);
            }
        };
        document.getElementById("ft_list").insertBefore(div, document.getElementById("ft_list").childNodes[0]);
    }
}

function setCookie(cname, cvalue, time) {
    let d = new Date();
    d.setTime(d.getTime() + time);
    let expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
}

function delCookie(cname, cvalue) {
    let d = new Date();
    d.setTime(d.getTime() - (1000*60*60*24));
    let expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
}

function getCookie(cname) {
    let name = cname + "=";
    let ca = document.cookie.split(';');

    for(let i = 0; i <ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0)==' ')
            c = c.substring(1);
        if (c.indexOf(name) == 0)
            return c.substring(name.length,c.length);
    }
    return "";
}
