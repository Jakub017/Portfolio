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





projectButtons.forEach((projectButton) => {
    projectButton.addEventListener("click", function () {
        if (projectButton.getAttribute("data-filter") === "html") {
            projects.forEach((project) => {
                if (project.getAttribute('data-filter') !== "html") {
                    project.classList.add('filter-hide');
                    project.classList.remove('filter-faded-in');

                    function hide() {
                        project.classList.remove('filter-visible')
                        project.classList.remove('filter-hide');
                    }
                    setTimeout(hide, 500);

                } else {
                    function show() {
                        project.classList.add('filter-visible');
                        project.classList.add('filter-faded-in');
                    }
                    setTimeout(show, 501);
                }
            })

        } else if (projectButton.getAttribute("data-filter") === "wordpress") {
            projects.forEach((project) => {
                if (project.getAttribute('data-filter') !== "wordpress") {
                    project.classList.add('filter-hide');
                    project.classList.remove('filter-faded-in');

                    function hide() {
                        project.classList.remove('filter-visible')
                        project.classList.remove('filter-hide');
                    }
                    setTimeout(hide, 500);

                } else {
                    function show() {

                        project.classList.add('filter-visible');
                        project.classList.add('filter-faded-in');
                    }
                    setTimeout(show, 501);

                }
            })
        } else if (projectButton.getAttribute("data-filter") === "prestashop") {
            projects.forEach((project) => {
                if (project.getAttribute('data-filter') !== "prestashop") {
                    project.classList.add('filter-hide');
                    project.classList.remove('filter-faded-in');

                    function hide() {
                        project.classList.remove('filter-visible')
                        project.classList.remove('filter-hide');
                    }
                    setTimeout(hide, 500);

                } else {
                    function show() {

                        project.classList.add('filter-visible');
                        project.classList.add('filter-faded-in');
                    }
                    setTimeout(show, 501);

                }
            })
        }
    })
})
