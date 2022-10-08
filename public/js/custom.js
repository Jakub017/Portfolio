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




// Services fadeIn end
