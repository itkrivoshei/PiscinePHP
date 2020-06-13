$(document).ready(function() {
    $("#button").click(function(){
        let content = prompt("To-do");
        let nbelem = getLastid();
        let id_box = "todo" + nbelem;
        if (content != null && content != "") {
            jQuery("<div/>", {
                id: id_box,
                class: "to_do_box",
                text: content,
                click: function() {
                    let ans = prompt("Del?", "y/n");
                    if (ans === "Y" || ans === "y" || ans === "yes" || ans === "Yes" || ans === "YES") {
                        delCookie(id_box, content);
                        $("#" + id_box).remove();
                    }
                }
            }).prependTo("#ft_list");
            setCookie(id_box, content, 10800000);
        }
    });
});
function getLastid() {
    let i = 0;
    let point = "todo" + i;
    let lastid = 0;
    while (i < 500) {
        if (getCookie(point) != "")
            lastid = i;
        i++;
        point = "todo" + i;
    }
    lastid++;
    return lastid;
}
function loadDiv (content, point) {
    if (content != null && content != "") {
        jQuery("<div/>", {
            id: point,
            class: "to_do_box",
            text: content,
            click: function() {
                let ans = prompt("Del?", "y/n");
                if (ans === "Y" || ans === "y" || ans === "yes" || ans === "Yes" || ans === "YES") {
                    delCookie(point, content);
                    $("#" + point).remove();
                }
            }
        }).prependTo("#ft_list");
    }
}
function setCookie(point, cvalue, time) {
    let d = new Date();
    d.setTime(d.getTime() + time);
    let expires = "expires="+ d.toUTCString();
    document.cookie = point + "=" + cvalue + "; " + expires;
}
function delCookie(point, cvalue) {
    let d = new Date();
    d.setTime(d.getTime() - (1000*60*60*24));
    let expires = "expires="+ d.toUTCString();
    document.cookie = point + "=" + cvalue + "; " + expires;
}
function getCookie(point) {
    let name = point + "=";
    let ca = document.cookie.split(";");
    for(let i = 0; i <ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0)==" ")
            c = c.substring(1);
        if (c.indexOf(name) == 0)
            return c.substring(name.length,c.length);
    }
    return "";
}