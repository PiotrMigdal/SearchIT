// On click on rebuild button or 'i' icon - show popover
$(function () {
    $('[data-toggle="popover"]').popover()
});

//Highlight searched text
(function (e) {
    let searched = document.getElementById("searchInput").value.trim().toUpperCase();
    if (searched !== "") {
        let text = document.getElementById("result").innerHTML;
        let re = new RegExp(searched,"g"); // search for all instances
        let newText = text.replace(re, `<b class="text-success">${searched}</b>`);
        document.getElementById("result").innerHTML = newText;
}})();

// Switch environment
document.querySelectorAll('.switch-btn').forEach(envBtn => {
    let serverClass = '.' + envBtn.id + '-server';
    let serverBtns = document.querySelectorAll(serverClass);

    // Onload check if buttons already selected and select environment
    (function () {
        if (serverBtns.length == document.querySelectorAll(serverClass + '.active').length) {
            envBtn.classList.add('active');
            envBtn.children[0].checked = true;
        }
    })();

    // Listen if environment buttons change
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

    // Listen if server buttons change
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

