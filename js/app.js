// $('.switch').click(()=>{
//     $([".light [class*='-light']", ".dark [class*='-dark']"]).each((i,ele)=>{
//         $(ele).toggleClass('bg-light bg-dark')
//         $(ele).toggleClass('text-light text-dark')
//         $(ele).toggleClass('navbar-light navbar-dark')
//     })
//     // toggle body class selector
//     $('body').toggleClass('light dark')
// })

//On click on rebuild show the loader
$("#rebuild").click(function() {
    $(".loader-box").show();
    $('#rebuild').removeClass("btn-outline-primary");
    $('#rebuild').addClass("btn-primary");
});
$("#SettingsButton").click(function() {
    $('#SettingsContent').toggleClass("show");
    $('#SettingsButton').toggleClass("btn-primary");
});
$(function () {
    $('[data-toggle="popover"]').popover()
});
