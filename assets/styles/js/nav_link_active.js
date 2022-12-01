function removeQueryString(url) {
    return url.split('?')[0]
}
[].forEach.call(document.querySelectorAll('.navbar-nav a'), function(elem) {
    if (removeQueryString(elem.href) === removeQueryString(window.location.href))
    elem.classList.add('active')
    else
    elem.classList.remove('active')
})