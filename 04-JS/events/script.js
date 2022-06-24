function attachBuyEvents() {
    const buttons = document.querySelectorAll('#products button');

    for (const button of buttons) {
        button.addEventListener('click', function(e) {
            console.log('BUY!');
            console.log(e.currentTarget);
            console.log(this);
        })
    }
}

attachBuyEvents()