// NAV
$(".btn-menu").click(function(){
    $(".menu-mobile").toggleClass("menuIn")
})
$(document).click(function(e){
    let menu = $(".menu-mobile");
    let btn = $(".btn-menu");
    if(!menu.is(e.target) && menu.has(e.target).length === 0 && !btn.is(e.target) && btn.has(e.target).length === 0){
        $(".menu-mobile").removeClass("menuIn")
    }
})
$(".menu-mobile .guia a").click(function(){
    $(".menu-mobile").removeClass("menuIn")
})