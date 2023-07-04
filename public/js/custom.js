// Portfolio filter starts

const projectButtons = [...document.querySelectorAll('.works__isotope-button')];
const projects = [...document.querySelectorAll('.works__card')];

projectButtons.forEach((projectButton) => {
    projectButton.addEventListener("click", function () {
        for (let i = 0; i < projectButtons.length; i++) {
            projectButtons[i].classList.remove('works__isotope-button--active');
        }
        projectButton.classList.add('works__isotope-button--active');
    })
})


function hide(element) {
    element.classList.remove('works__card--visible')
    element.classList.remove('works__card--hide');
}

function show(element) {
    element.classList.add('works__card--visible');
    element.classList.add('works__card--faded-in');
}


projectButtons.forEach((projectButton) => {
    projectButton.addEventListener("click", function () {
        if (projectButton.getAttribute("data-filter") === "front-end") {
            projects.forEach((project) => {
                if (project.getAttribute('data-filter') !== "front-end") {
                    project.classList.add('works__card--hide');
                    project.classList.remove('works__card--faded-in');

                    setTimeout(hide, 500, project);

                } else {
                    setTimeout(show, 501, project);
                }
            })

        } else if (projectButton.getAttribute("data-filter") === "back-end") {
            projects.forEach((project) => {
                if (project.getAttribute('data-filter') !== "back-end") {
                    project.classList.add('works__card--hide');
                    project.classList.remove('works__card--faded-in');

                    setTimeout(hide, 500, project);

                } else {
                    setTimeout(show, 501, project);

                }
            })
        } else if (projectButton.getAttribute("data-filter") === "full-stack") {
            projects.forEach((project) => {
                if (project.getAttribute('data-filter') !== "full-stack") {
                    project.classList.add('works__card--hide');
                    project.classList.remove('works__card--faded-in');

                    setTimeout(hide, 500, project);

                } else {
                    setTimeout(show, 501, project);

                }
            })
        } else if (projectButton.getAttribute("data-filter") === "cms") {
            projects.forEach((project) => {
                if (project.getAttribute('data-filter') !== "cms") {
                    project.classList.add('works__card--hide');
                    project.classList.remove('works__card--faded-in');

                    setTimeout(hide, 500, project);

                } else {
                    setTimeout(show, 501, project);

                }
            })
        }
    })
})

// Portfolio filter ends


// Scroll to sections starts

const worksBtn = document.querySelector('.hero__button--works');
const contactBtn = document.querySelector('.hero__button--contact');

const desktopAboutBtn = document.querySelector('.nav__option--about');
const desktopSkillBtn = document.querySelector('.nav__option--skills');
const desktopWizardBtn = document.querySelector('.nav__option--panel');
const desktopWorksBtn = document.querySelector('.nav__option--works');
const desktopContactBtn = document.querySelector('.nav__option--contact');

const mobileAboutBtn = document.querySelector('.nav-mobile__option--about');
const mobileSkillBtn = document.querySelector('.nav-mobile__option--skills');
const mobileWizardBtn = document.querySelector('.nav-mobile__option--panel');
const mobileWorksBtn = document.querySelector('.nav-mobile__option--works');
const mobileContactBtn = document.querySelector('.nav-mobile__option--contact');

const worksSection = document.querySelector('.works');
const contactSection = document.querySelector('.contact');
const aboutSection = document.querySelector('.about');
const skillSection = document.querySelector('.skills');
const wizardSection = document.querySelector('.panel');
const heroWizardBtn = document.querySelector('.hero__link');

desktopAboutBtn.addEventListener("click", function () {
    aboutSection.scrollIntoView({
        behavior: "smooth"
    });
});

heroWizardBtn.addEventListener("click", function () {
    wizardSection.scrollIntoView({
        behavior: "smooth"
    });
});

desktopSkillBtn.addEventListener("click", function () {
    skillSection.scrollIntoView({
        behavior: "smooth"
    });
});

desktopWizardBtn.addEventListener("click", function () {
    wizardSection.scrollIntoView({
        behavior: "smooth"
    });
});

desktopWorksBtn.addEventListener("click", function () {
    worksSection.scrollIntoView({
        behavior: "smooth"
    });
});

desktopContactBtn.addEventListener("click", function () {
    contactSection.scrollIntoView({
        behavior: "smooth"
    });
});

mobileAboutBtn.addEventListener("click", function () {
    aboutSection.scrollIntoView({
        behavior: "smooth"
    });
});

mobileSkillBtn.addEventListener("click", function () {
    skillSection.scrollIntoView({
        behavior: "smooth"
    });
});

mobileWizardBtn.addEventListener("click", function () {
    wizardSection.scrollIntoView({
        behavior: "smooth"
    });
});

mobileWorksBtn.addEventListener("click", function () {
    worksSection.scrollIntoView({
        behavior: "smooth"
    });
});

mobileContactBtn.addEventListener("click", function () {
    contactSection.scrollIntoView({
        behavior: "smooth"
    });
});

worksBtn.addEventListener("click", function () {
    worksSection.scrollIntoView({
        behavior: "smooth"
    });
});

contactBtn.addEventListener("click", function () {
    contactSection.scrollIntoView({
        behavior: "smooth"
    });
});

// Mobile menu starts

const menuBtn = document.querySelector('.nav-mobile__hamburger');
const mobileNav = document.querySelector('.nav-mobile__menu');

menuBtn.addEventListener("click", function () {
    mobileNav.classList.add('nav-mobile__menu--visible');
});
