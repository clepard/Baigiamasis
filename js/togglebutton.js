const menuToggle = document.querySelector('.menu-button')
            const container = document.querySelector('.burger-menu')

            menuToggle.addEventListener('click',()=>{
                menuToggle.classList.toggle('active')
                container.classList.toggle('active')
            });