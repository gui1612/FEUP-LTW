function changeAllArticleColors() {
    const articles = document.querySelectorAll('#products article');

    for (const article of articles) {
        article.classList.add("sale");
    }
}

changeAllArticleColors();