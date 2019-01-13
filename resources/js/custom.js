const title = document.getElementById('title')
title.value = localStorage.getItem("title") // get and assign the value outside
title.onchange = function () {
    const new_title = title.value
    localStorage.setItem('title', new_title)
}

const submitButton = document.getElementsByClassName('btn btn-primary')
submitButton.onclick = function () {
    localStorage.setItem('title_content', "")
}