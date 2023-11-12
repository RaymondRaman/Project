// Li Ka Wai 1155175898
// I declare that the lab work here submitted is original
// except for source material explicitly acknowledged,
// and that the same or closely related material has not been
// previously submitted for another course.
// I also acknowledge that I am aware of University policy and
// regulations on honesty in academic work, and of the disciplinary
// guidelines and procedures applicable to breaches of such
// policy and regulations, as contained in the website.
// University Guideline on Academic Honesty:
// https://www.cuhk.edu.hk/policy/academichonesty/
// Student Name : Li Ka Wai
// Student ID : 1155175898
// Class/Section : CSCI2720
// Date : 14-10-2023 

// Closing the navbar menu after clicking on a link (when the screen is small)
const navItem = document.querySelectorAll('#navBarMenu .nav-link');

navItem.forEach(item => {
    item.addEventListener('click', () => {
        const navbarMenu = document.getElementById('navBarMenu');
        const collapseMenu = new bootstrap.Collapse(navbarMenu, {
            toggle: false
        });
        collapseMenu.hide();
    });
});


// Problem 3 Task 0: Hide/show button
const hideOrShowButton = document.getElementById("hideOrShow");
const secondNavBar = document.getElementById("SecondNavBar");

hideOrShowButton.addEventListener("click", function () {
    if (hideOrShowButton.innerHTML == "Show") {
        hideOrShowButton.innerHTML = "Hide";
        secondNavBar.style.display = "block";
    } else {
        hideOrShowButton.innerHTML = "Show";
        secondNavBar.style.display = "none";
    }
});

// Problem 3 Task 1: Align 
const alignButton = document.getElementById("task1");
alignButton.addEventListener("click", function () {
    const targetText = document.getElementById("targetText");
    if (targetText.classList.contains('text-start')) {
        targetText.classList.remove('text-start');
        targetText.classList.add('text-center');
    } else if (targetText.classList.contains('text-center')) {
        targetText.classList.remove('text-center');
        targetText.classList.add('text-end');
    } else {
        targetText.classList.remove('text-end');
        targetText.classList.add('text-start');
    }
});

// Problem 3 Task 2: Spotlight
let getRandomColor = () => {
    const r = Math.floor(Math.random() * 256);
    const g = Math.floor(Math.random() * 256);
    const b = Math.floor(Math.random() * 256);
    return `rgb(${r},${g},${b})`;
}

document.addEventListener('DOMContentLoaded', (event) => {
    const circles = document.querySelectorAll('circle');
    circles.forEach(circle => {
        circle.setAttribute('fill', getRandomColor());
    });
});

const spotlightButton = document.getElementById("task2");
spotlightButton.addEventListener("click", function () {
    const spotlightText = prompt("Enter a spotlight for LEE Chong Wei: ");
    if (spotlightText !== null && spotlightText !== "") {

        const newSpotlightDiv = document.createElement("div");
        newSpotlightDiv.classList.add("currSpotlightText", "d-flex");

        const circleDiv = document.createElement("div");
        circleDiv.classList.add("flex-shrink-0");
        circleDiv.innerHTML = `<svg height="30" width="50"><circle cx="10" cy="10" r="10" fill="${getRandomColor()}"></circle></svg>`;
        newSpotlightDiv.appendChild(circleDiv);

        const newSpotlightTextDiv = document.createElement("div");
        newSpotlightTextDiv.classList.add("flex-grow-1");

        const newSpotlightText = document.createElement("h6");
        newSpotlightText.innerHTML = spotlightText;

        newSpotlightTextDiv.appendChild(newSpotlightText);
        newSpotlightDiv.appendChild(newSpotlightTextDiv);

        document.getElementsByClassName("spotlight_detail")[0].appendChild(newSpotlightDiv);
    }
});

// Problem 3 Task 3: Scroll
const scrollButton = document.getElementById("task3");
const thirdNavBar = document.getElementById("thirdNavBar");

updateProgressBar = () => {
    const progressBar = document.querySelector('.progress-bar');
    const totalHeight = document.body.clientHeight - window.innerHeight;
    const currPosition = window.scrollY;
    const scrollPrecetage = Math.round(Math.min(100, (currPosition / totalHeight) * 100));

    progressBar.style.width = `${scrollPrecetage}%`;
    progressBar.textContent = `${scrollPrecetage}%`;

    progressBar.setAttribute('aria-valuenow', scrollPrecetage);
}

scrollButton.addEventListener("click", function () {
    if (thirdNavBar.style.display === "none" || thirdNavBar.style.display === "") {
        thirdNavBar.style.display = "block";
        window.addEventListener('scroll', function () {
            updateProgressBar();
        });
    } else {
        thirdNavBar.style.display = "none";
    }
});

// Problem 5: Form validation
const form = document.querySelector('form');

form.addEventListener('submit', async (event) => {
    event.preventDefault();
    const email = document.querySelector('#email');
    const comments = document.querySelector('#inputComment');
    const red = document.querySelector('#red').checked;
    const green = document.querySelector('#green').checked;
    const yellow = document.querySelector('#yellow').checked;
    const blue = document.querySelector('#blue').checked;

    if (email.value.trim() === '' || email.value.trim() == null || !email.checkValidity()) {
        email.classList.add('is-invalid');
        return;
    } else {
        email.classList.remove('is-invalid');
    }

    if (comments.value.trim() === '' || comments.value.trim() == null) {
        comments.classList.add('is-invalid');
        return;
    } else {
        comments.classList.remove('is-invalid');
    }

    if (!red && !green && !yellow && !blue) {
        alert('Please select your favorite color!');
        return;
    }
    form.reset();
});

// Problem 6: Loading new comments
const previousComment = document.querySelector('#previousComment');
if (previousComment.style.display === "none" || previousComment.style.display === "") {
    fetch('./public/comments.json')
        .then(response => response.json())
        .then(data => {
            const commentContainer = document.querySelector('#newCommentCards');
            data.forEach((newComment) => {
                const newCommentHTML = `
                    <div class="card text-dark row mt-4">
                        <div class="card-body p-4">
                            <div class="d-flex flex-start">
                                <div>
                                    <h5 class="fw-bold mb-1" style="color: ${newComment.color}">${newComment.email}</h5>
                                    <h6 class="mb-0" style="color: ${newComment.color}">${newComment.comments}</h6>
                                <   /div>
                            </div>
                        </div>
                    </div>`;
                commentContainer.insertAdjacentHTML("beforeend", newCommentHTML);
            })
        })
        .catch(error => {
            console.error("Error fetching data:", error);
            alert('An error occurred while loading the latest comments. Please try again later.');
        });
    previousComment.style.display = "block";
}

// Problem 6: Saving the comments
const saveButton = document.querySelector('#save');
saveButton.addEventListener('click', async (event) => {
    const email = document.querySelector('#email');
    const comments = document.querySelector('#inputComment');
    let selectedColor = '';
    try {
        const selectedColorInput = document.querySelector('input[name="selectColor"]:checked').value;
        if (selectedColorInput === 'option1') {
            selectedColor = 'red';
        } else if (selectedColorInput === 'option2') {
            selectedColor = 'green';
        } else if (selectedColorInput === 'option3') {
            selectedColor = 'yellow';
        } else {
            selectedColor = 'blue';
        }

        data = JSON.stringify(
            {
                email: email.value.trim(),
                comments: comments.value.trim(),
                color: selectedColor
            }
        )
        const response = await fetch('./public/savedComments.json', {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json',
            },
            body: data,
        });

        if (response.status == 201 || response.status == 200) {
            console.log(data)
            console.log(response);
            alert('Your comment is well received. Thanks.');
            form.reset();
        } else {
            alert('An error occurred while submitting your comment. Please make sure your input is valid.');
        }
    } catch (error) {
        alert('An error occurred while submitting your comment. Please make sure your input is valid.');
        console.error(error);
    }
});