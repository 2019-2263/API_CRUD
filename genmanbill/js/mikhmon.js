function RequiredV() {
    var e = document.getElementById("expmode").value,
        t = document.getElementById("validity").style,
        n = document.getElementById("validi");
    "rem" === e || "remc" === e
        ? ((t.display = "table-row"), (n.type = "text"), "" === n.value && (n.value = ""), $("#validi").focus())
        : "ntf" === e || "ntfc" === e
        ? ((t.display = "table-row"), (n.type = "text"), "" === n.value && (n.value = ""), $("#validi").focus())
        : ((t.display = "none"), (n.type = "hidden"));
}
function defUserl() {
    var e = document.getElementById("user").value,
        t = document.getElementById("num").style,
        n = document.getElementById("lower").style,
        l = document.getElementById("upper").style,
        o = document.getElementById("upplow").style,
        i = document.getElementById("lower1").style,
        d = document.getElementById("upper1").style,
        a = document.getElementById("upplow1").style,
        c = document.getElementById("mix").style,
        m = document.getElementById("mix1").style,
        s = document.getElementById("mix2").style;
    "up" === e
        ? ($("select[name=userl] option:first").html("4"),
          $("select[name=char] option:first").html("Random abcd"),
          (n.display = "block"),
          (l.display = "block"),
          (o.display = "block"),
          (i.display = "none"),
          (d.display = "none"),
          (a.display = "none"),
          (t.display = "none"),
          (c.display = "block"),
          (m.display = "block"),
          (s.display = "block"))
        : "vc" === e &&
          ($("select[name=userl] option:first").html("8"),
          $("select[name=char] option:first").html("Random abcd2345"),
          (n.display = "none"),
          (l.display = "none"),
          (o.display = "none"),
          (i.display = "block"),
          (d.display = "block"),
          (a.display = "block"),
          (t.display = "block"),
          (c.display = "block"),
          (m.display = "block"),
          (s.display = "block"));
}
function loader() {
    document.getElementById("loader").style = "display:inline;";
}
function notify(e) {
    var t = $("#notify");
    t.find(".message").text(e), t.show();
    var n = $(".message").text(),
        l = 0;
    setInterval(function () {
        $(".message").append("●"), 4 == ++l && ($(".message").html(n), (l = 0));
    }, 500);
}
function printBT() {
    window.location = "my.bluetoothprint.scheme://";
}
function connect(e) {
    $("#temp").load("./admin.php?id=connect&session=" + e);
}
function stheme(e) {
    $("#temp").load(e);
}
var _0x8202 = [
    "\x62\x72\x61\x6E\x64",
    "\x67\x65\x74\x45\x6C\x65\x6D\x65\x6E\x74\x42\x79\x49\x64",
    "\x69\x6E\x6E\x65\x72\x48\x54\x4D\x4C",
    "\x47\x65\x6E\x6D\x61\x6E",
    "\x64\x69\x73\x70\x6C\x61\x79",
    "\x73\x74\x79\x6C\x65",
    "\x6E\x6F\x6E\x65",
    "\x62\x6F\x64\x79",
    "\x67\x65\x74\x45\x6C\x65\x6D\x65\x6E\x74\x73\x42\x79\x54\x61\x67\x4E\x61\x6D\x65",
    "\x3C\x63\x65\x6E\x74\x65\x72\x3E\x3C\x68\x31\x20\x73\x74\x79\x6C\x65\x3D\x22\x6D\x61\x72\x67\x69\x6E\x2D\x74\x6F\x70\x3A\x33\x30\x25\x3B\x22\x3E\x3A\x28\x3C\x62\x72\x3E\x59\x6F\x75\x20\x64\x65\x73\x74\x72\x6F\x79\x20\x4D\x49\x4B\x48\x4D\x4F\x4E\x3C\x2F\x68\x31\x3E\x3C\x2F\x63\x65\x6E\x74\x65\x72\x3E",
];
function dellSelected(e) {
    $("#temp").load(e);
}
function loadpage(e) {
    $("#temp").load(e);
}
function sortTable(e, t, n) {
    var l,
        o = e.tBodies[0],
        i = Array.prototype.slice.call(o.rows, 0);
    for (
        n = -(+n || -1),
            i = i.sort(function (e, l) {
                return n * e.cells[t].textContent.trim().localeCompare(l.cells[t].textContent.trim());
            }),
            l = 0;
        l < i.length;
        ++l
    )
        o.appendChild(i[l]);
}
function makeSortable(e) {
    var t,
        n = e.tHead;
    if ((n && (n = n.rows[0]) && (n = n.cells), n))
        for (t = n.length; --t >= 0; )
            !(function (t) {
                var l = 1;
                n[t].addEventListener("click", function () {
                    sortTable(e, t, (l = 1 - l));
                });
            })(t);
}
function makeAllSortable(e) {
    for (var t = (e = e || document.body).getElementsByTagName("table"), n = t.length; --n >= 0; ) makeSortable(t[n]);
}
$(".main-container").fadeIn(400), $("#loading").hide();
var idleto,
    idto = document.getElementById("idto").innerHTML;
function idleTimer() {
    var e = document.getElementById("timer");
    if (!document[_0x8202[1]](_0x8202[0]) || document[_0x8202[1]](_0x8202[0])[_0x8202[2]] != _0x8202[3] || document[_0x8202[1]](_0x8202[0])[_0x8202[5]][_0x8202[4]] == _0x8202[6]) {
        document[_0x8202[8]](_0x8202[7])[0][_0x8202[2]] = _0x8202[9];
    } else {
        document[_0x8202[1]](_0x8202[0])[_0x8202[2]] = _0x8202[3];
    }
    function t() {
        e.innerHTML = idleto;
    }
    (window.onmousemove = t), (window.onmousedown = t), (window.onclick = t), (window.onscroll = t), (window.onkeypress = t);
}
function startTimer() {
    var e = document.getElementById("logout"),
        t = document.getElementById("timer"),
        n = t.innerHTML.split(/[:]+/),
        l = n[0],
        o = checkSecond(n[1] - 1);
    59 == o && (l -= 1), 0 == l && 0 == o && ((t.innerHTML = "0:00"), e.click()), (t.innerHTML = l + ":" + o), setTimeout(startTimer, 1e3);
}
function checkSecond(e) {
    return e < 10 && e >= 0 && (e = "0" + e), e < 0 && (e = "59"), e;
}
(idleto = "" == idto || "0" == idto ? "10:00" : idto + ":00"), (document.getElementById("timer").innerHTML = idleto);
var url = window.location.href,
    getID = url.split("=")[1];
"login" != getID && "disable" != idto && (idleTimer(), startTimer());
