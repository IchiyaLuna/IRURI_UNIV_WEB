var dept = false;

function update_selected() {
    $("#detail").val(0);
    $("#detail").find("option[value!=-2]").detach();

    $("#detail").append(dept.filter("." + $(this).val()));
}

$(function () {
    $("#category").change(update_selected);
    $("#category").trigger("change");
});


function catchange() {

    const be = ['E-비즈니스', '글로벌 비즈니스'];
    const ad = [];
    const pr = [];

    const cu = [];
    const la = [];
    const en = [];
    const fo = [];

    const we = [];
    const me = [];

    const ed = [];

    const ma = [];
    const st = [];

    const sc = [];
    const co = [];
    const mc = [];
    const el = [];
    const as = [];
    const nm = [];
    const ca = [];
    const ar = [];

    const hi = [];
    const ph = [];
    const re = [];
    const at = [];

    const ng = [];
    const nw = [];
    const so = [];
    const ec = [];
    const ga = [];
    const fu = [];
    const fr = [];


}