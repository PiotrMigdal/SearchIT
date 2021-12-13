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
document.querySelectorAll('.switch-btn').forEach(btn => {
    let env = btn.id;
    let switchedClass = '.' + env + '-server';

    document.querySelectorAll(switchedClass).forEach(serverBtn => {
            serverBtn.addEventListener('click', function (){
                if(btn.classList.contains("active")) {
                    btn.classList.remove('active');
                    btn.children.checked = false;
                    console.log(btn);
                }
            });
    });
    btn.addEventListener('click', function(event) {
        if(event.target.classList.contains("active")) {
            document.querySelectorAll(switchedClass).forEach(item => {
                item.classList.remove('active');
                item.children.checked = false;
            });
        } else {
            document.querySelectorAll(switchedClass).forEach(item => {
                item.classList.add('active');
                item.children.checked = true;
            });
        }
    })
});