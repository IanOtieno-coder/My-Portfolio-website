let buttonObjects = [];

// add read more button to the selected paragraphs
document.querySelectorAll('.js-read-more').forEach((p, i) => {
    let lessTextcontain = document.querySelector('.read-more-text');
    lessTextcontain.style.display ='none';
    let button = document.querySelector('.read-more-button');
    button.setAttribute('aria-label', 'read more');
    button.addEventListener('click', function () {
        let readMoreText =  document.querySelector('.read-more-text');

        if (readMoreText.style.display === 'none') {
            readMoreText.style.display = 'inline';
            button.innerHTML = 'Read less';
        } else {
            readMoreText.style.display = 'none';
            button.innerHTML = 'Read more';
        }
    });
});

// reset all read more/less states when clicked outside the buttons
document.addEventListener('click', function (event) {
    if (!event.target.closest('.read-more-button')) {
        buttonObjects.forEach(buttonObject => {
            buttonObject.moreText.style.display = 'none';
            buttonObject.lessText.style.display = 'inline';
            buttonObject.button.setAttribute('aria-label', 'read more');
        });
    }
});
// Function to add class to the clicked element and remove from the others
function changeActive(element) {
    var navLinks = document.getElementsByClassName('nav-link');

    for (var i = 0; i < navLinks.length; i++) {
        navLinks[i].classList.remove('active');
    }

    element.classList.add('active');
}

// Add event listeners to each of the nav links
var navLinks = document.getElementsByClassName('nav-link');

for (var i = 0; i < navLinks.length; i++) {
    navLinks[i].addEventListener('click', function(e) {
        changeActive(e.target);
    });
}

document.addEventListener('DOMContentLoaded', function () {
    const menuLinks = document.getElementsByClassName('nav-link');

    for (let i = 0; i < menuLinks.length; i++) {
        menuLinks[i].addEventListener('click', function () {
            for (let j = 0; j < menuLinks.length; j++) {
                menuLinks[j].classList.remove('active');
            }
            this.classList.add('active');
        });
    }

    window.addEventListener('scroll', function () {
        for (let i = 0; i < menuLinks.length; i++) {
            let section = document.getElementById(menuLinks[i].getAttribute('href').slice(1));
            if (section.getBoundingClientRect().top <= 0) {
                for (let j = 0; j < menuLinks.length; j++) {
                    menuLinks[j].classList.remove('active');
                }
                menuLinks[i].classList.add('active');
            }
        }
    });
});
const typing = document.getElementById('typing');
function typeChar(index, string) {
    typing.textContent = '';
    typing.textContent = string.substring(0, index + 1);
    if (index < string.length - 1) {
        setTimeout(() => typeChar(index + 1, string), 150);
    } else {
        setTimeout(() => typeChar(0, string), 1000);
    }
}
setTimeout(() => typeChar(0, typing.textContent), 2000);
const typing2 = document.getElementById('typing2');
function typeChar2(index, string) {
    typing2.textContent = '';
    typing2.textContent = string.substring(0, index + 1);
    if (index < string.length - 1) {
        setTimeout(() => typeChar2(index + 1, string), 250);
    } else {
        setTimeout(() => typeChar2(0, string), 1000);
    }
}
setTimeout(() => typeChar2(0, typing2.textContent), 2300);
function blink() {
    var elem = document.getElementById('typing3');
    elem.style.visibility = (elem.style.visibility == 'hidden' ? '' : 'hidden');
}

var intervalID = setInterval(blink, 1000);
function calculateAge(dateString) {
    let today = new Date();
    let birthDate = new Date(dateString);
    let age = today.getFullYear() - birthDate.getFullYear();
    let monthDiff = today.getMonth() - birthDate.getMonth();
   
    if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
       age--;
    }
   
    return age;
   }
var age = document.getElementById('age');
age.innerHTML = calculateAge('2002-10-05');
function sendEmail() {
    var link = "mailto:otienoian38@gmail.com";
    window.location.href = link;
}