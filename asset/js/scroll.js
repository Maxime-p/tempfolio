document.addEventListener('DOMContentLoaded', () => {
    /*
        Croll on clock
    */
    document.querySelectorAll('.actionscroll').forEach(elem => {
        elem.addEventListener('click', (evt) => {
            evt.preventDefault();
    
            const targetId = elem.getAttribute('href').split('#')[1];
            const target = document.getElementById(targetId);
            
            target.scrollIntoView({
              behavior: 'smooth'
            });
        });
    });
});

