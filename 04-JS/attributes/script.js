function attachBuyEvents() {
    const buttons = document.querySelectorAll('#products button');

    for (const button of buttons) {
        button.addEventListener('click', function (e) {
            const article = this.parentElement;
            article.classList.toggle('sale');
            console.log('id:', article.getAttribute('data-id'));
            console.log('name:', article.firstElementChild.textContent);
            console.log('price:', article.querySelector('.price').textContent);
            console.log('quantity:', button.previousElementSibling.value);
            
        })
    }
}

attachBuyEvents()