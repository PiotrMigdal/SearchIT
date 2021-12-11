// $('.switch').click(()=>{
//     $([".light [class*='-light']", ".dark [class*='-dark']"]).each((i,ele)=>{
//         $(ele).toggleClass('bg-light bg-dark')
//         $(ele).toggleClass('text-light text-dark')
//         $(ele).toggleClass('navbar-light navbar-dark')
//     })
//     // toggle body class selector
//     $('body').toggleClass('light dark')
// })

// On click on rebuild button or 'i' icon - show popover
$(function () {
    $('[data-toggle="popover"]').popover()
});

// Switch environment

// create variable which has content of clicked button
// Check what is the status of the button
// then use variable to specify which server buttons need to be disabled and removed checked/active


// .disabledbutton {
//     pointer-events: none;
//     opacity: 0.4;
// }