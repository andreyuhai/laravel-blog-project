const title = document.getElementById('title')
title.value = localStorage.getItem("title_content"); // get and assign the value outside
title.onchange = function () {
    const new_title = title.value;
    localStorage.setItem('title_content', new_title);
}

const editor = document.getElementById('cke_article-ckeditor');
editor.value = localStorage.getItem("editor_content");
editor.onchange = function () {
    const new_editor_content = editor.value;
    localStorage.setItem('editor_content', new_editor_content);
}

// email = document.getElementById('email')
// email.value = localStorage.getItem("email"); // get and assign the value outside
// email.onchange = function () {
//     new_email = email.value;
//     localStorage.setItem('email', new_email);
// }