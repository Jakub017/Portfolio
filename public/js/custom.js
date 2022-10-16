// Portfolio filter start

const projectButtons = [...document.querySelectorAll('.isotope button')];
const projects = [...document.querySelectorAll('.projects .project-card')];

projectButtons.forEach((projectButton) => {
    projectButton.addEventListener("click", function () {
        for (let i = 0; i < projectButtons.length; i++) {
            projectButtons[i].classList.remove('active');
        }
        projectButton.classList.add('active');
    })
})


function hide(element) {
    element.classList.remove('filter-visible')
    element.classList.remove('filter-hide');
}

function show(element) {
    element.classList.add('filter-visible');
    element.classList.add('filter-faded-in');
}


projectButtons.forEach((projectButton) => {
    projectButton.addEventListener("click", function () {
        if (projectButton.getAttribute("data-filter") === "html") {
            projects.forEach((project) => {
                if (project.getAttribute('data-filter') !== "html") {
                    project.classList.add('filter-hide');
                    project.classList.remove('filter-faded-in');

                    setTimeout(hide, 500, project);

                } else {
                    setTimeout(show, 501, project);
                }
            })

        } else if (projectButton.getAttribute("data-filter") === "wordpress") {
            projects.forEach((project) => {
                if (project.getAttribute('data-filter') !== "wordpress") {
                    project.classList.add('filter-hide');
                    project.classList.remove('filter-faded-in');

                    setTimeout(hide, 500, project);

                } else {
                    setTimeout(show, 501, project);

                }
            })
        } else if (projectButton.getAttribute("data-filter") === "prestashop") {
            projects.forEach((project) => {
                if (project.getAttribute('data-filter') !== "prestashop") {
                    project.classList.add('filter-hide');
                    project.classList.remove('filter-faded-in');

                    setTimeout(hide, 500, project);

                } else {
                    setTimeout(show, 501, project);

                }
            })
        }
    })
})

// Portfolio filter end



// Services fadeIn start

let scrollValue = 0;
let viewportHeight = document.documentElement.clientHeight;
const servicesHeight = [6];
const servicesFromTop = [6];
const serviceItems = [...document.querySelectorAll('.services-wrapper .service')];

serviceItems.forEach((serviceItem, i) => {
    servicesHeight[i] = serviceItem.offsetHeight;
})

serviceItems.forEach((serviceItem, i) => {
    servicesFromTop[i] = serviceItem.offsetTop;
})

document.addEventListener('scroll', function () {
    scrollValue = document.body.scrollTop || document.documentElement.scrollTop;

    serviceItems.forEach((serviceItem, i) => {
        if (scrollValue >= servicesFromTop[i] - viewportHeight + servicesHeight[i]) {
            serviceItem.classList.add("active");
        }
    })

})

// Services fadeIn end

// Mobile menu start

const hamburgerBtn = document.querySelector('.hamburger-menu');
const menuContainer = document.querySelector('.menu-list');
const closeMenuBtn = document.querySelector('.close-menu');
const menuOptions = [...document.querySelectorAll('.menu-option')];

hamburgerBtn.addEventListener("click", function () {
    menuContainer.classList.add('active');
})

closeMenuBtn.addEventListener("click", function () {
    menuContainer.classList.remove('active');
})

menuOptions.forEach((menuOption) => {
    menuOption.addEventListener("click", function () {
        menuContainer.classList.remove('active');
    })
})

// Mobile menu end
