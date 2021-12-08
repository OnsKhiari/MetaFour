form.addEventListener('submit', (e) => {
    const title = document.getElementById("lesson_title")
    const content = document.getElementById("content")
    let file = document.getElementById("lesson_vid")
    const title_error = document.getElementById('title_error')
    document.getElementById("title_error").style.color = "red"
    const content_error = document.getElementById('content_error')
    document.getElementById("content_error").style.color = "red"
    const video_error = document.getElementById('video_error')
    document.getElementById("video_error").style.color = "red"

    let errors = []
    if (title.value === '' || title.value === null) {
        title_error.innerText = 'Title Field is Required !'
        errors.push('Title is required')
    } else {
        title_error.innerText = ''
    }
    if (content.value === '' || content.value === null) {
        content_error.innerText = 'Content is Required !'
        errors.push('Title is required')
    } else {
        content_error.innerText = ''
    }


    var fileName = file.value,
        idxDot = fileName.lastIndexOf(".") + 1,
        extFile = fileName.substr(idxDot, fileName.length).toLowerCase()
    if (!(extFile == "mp4")) {
        video_error.innerText = 'File Type Must Be Of MP4 format !'
        errors.push('Title is required')
        file.value = "";
    } else {
        video_error.innerText = ''
    }

    if (errors.length > 0) {
        e.preventDefault()
        window.scrollTo(0, 0);
    }
})