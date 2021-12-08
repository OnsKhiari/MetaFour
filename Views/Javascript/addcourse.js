const title = document.getElementById("course_title")
const price = document.getElementById("course_price")
const form = document.getElementById('form')
let file = document.getElementById("thumbnail")
const categ = document.getElementById('course_category')
const dur = document.getElementById('course_duration')
const title_error = document.getElementById('title_error')
document.getElementById("title_error").style.color = "red"
const price_error = document.getElementById('price_error')
document.getElementById("price_error").style.color = "red"
const photo_error = document.getElementById('photo_error')
document.getElementById("photo_error").style.color = "red"

const categ_error = document.getElementById('categ_error')
document.getElementById("categ_error").style.color = "red"

const dur_error = document.getElementById('dur_error')
document.getElementById("dur_error").style.color = "red"







form.addEventListener('submit', (e) => {
    let errors = []
    if (title.value === '' || title.value === null) {
        title_error.innerText = 'Title Field is Required'
        errors.push('Title is required')
    } else {
        title_error.innerText = ''
    }

    if (categ.value === '' || categ.value === null) {
        categ_error.innerText = 'Category Field is Required'
        errors.push('Title is required')
    } else {
        categ_error.innerText = ''
    }

    if (dur.value === '' || dur.value === null) {
        dur_error.innerText = 'Course Duration is Required'
        errors.push('Title is required')
    } else {
        dur_error.innerText = ''
    }


    if (price.value.length === 0 || price.value < 0) {
        if (price.value.length === 0) {
            price_error.innerText = 'Price Field is Required'
            errors.push('Price is required')
        }
        if (price.value < 0) {
            price_error.innerText = 'Price Cannot Be Negative'
            errors.push('Title is required')
        }
    } else {
        price_error.innerText = ''
    }

    //verify file tpye

    var fileName = file.value,
        idxDot = fileName.lastIndexOf(".") + 1,
        extFile = fileName.substr(idxDot, fileName.length).toLowerCase()
    if (!(extFile == "jpg" || extFile == "jpeg" || extFile == "png")) {
        photo_error.innerText = 'File Type Must Be JPG,JPEG or PNG !'
        errors.push('Title is required')
        file.value = "";
    } else {
        photo_error.style.display = "none";
    }

    if (errors.length > 0) {
        e.preventDefault()
        window.scrollTo(0, 0);
    }
})