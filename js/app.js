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
document.querySelectorAll('.switch-btn').forEach(envBtn => {
    let serverClass = '.' + envBtn.id + '-server';
    let serverBtns = document.querySelectorAll(serverClass);

    envBtn.addEventListener('click', function(event) {
        if(event.target.classList.contains("active")) {
            serverBtns.forEach(serverBtn => {
                serverBtn.classList.remove('active');
                serverBtn.children[0].checked = false;
            });
        } else {
            serverBtns.forEach(serverBtn => {
                serverBtn.classList.add('active');
                serverBtn.children[0].checked = true;
            });
        }
    });

    serverBtns.forEach(serverBtn => {
        serverBtn.addEventListener('click', function (){
            if(envBtn.classList.contains("active")) {
                envBtn.classList.remove('active');
                envBtn.children[0].checked = false;
            } else if (!serverBtn.classList.contains("active") && (serverBtns.length - 1) == document.querySelectorAll(serverClass + '.active').length) {
                envBtn.classList.add('active');
                envBtn.children[0].checked = true;
            }
        });
    });
});