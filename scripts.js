function loadPage(page) {
    fetch(page)
        .then(response => response.text())
        .then(html => {
            document.getElementById('content').innerHTML = html;
            window.history.pushState({page: page}, "", `#${page}`);
        })
        .catch(error => {
            console.error('Error loading the page:', error);
        });
}

window.addEventListener('popstate', (event) => {
    if (event.state && event.state.page) {
        loadPage(event.state.page);
    }
});