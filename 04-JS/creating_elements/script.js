function changeAllArticleColors() {
    const buttons = document.querySelectorAll('#products button');


    for (const button of buttons) {
        button.addEventListener('click', function(e) {
            article = this.parentElement;

            article.classList.add("sale");

            const id = article.getAttribute('data-id');

            const row = document.querySelector(`#cart table tr[data-id="${id}"]`);

            const name = article.querySelector('h2').textContent;
            const quantity = article.querySelector('.quantity').value;
            const price = article.querySelector('.price').textContent;

            if (quantity > 0) {
                if (row)
                    updateRow(row, quantity);
                else 
                    addRow(id, name, quantity, price)

                updateTotalCartValue();
            }
        })
    }
}

function addRow(id, name, quantity, price) {
    const table = document.querySelector('#cart table');

    const row = document.createElement('tr');
    row.setAttribute('data-id', id);

    const idCell = document.createElement('td');
    idCell.textContent = id;

    const nameCell = document.createElement('td');
    nameCell.textContent = name;

    const quantityCell = document.createElement('td');
    quantityCell.textContent = quantity;

    const priceCell = document.createElement('td');
    priceCell.textContent = price;

    const totalCell = document.createElement('td');
    totalCell.textContent = quantity * price;

    const cancelCell = document.createElement('td');
    const ref = document.createElement('a');
    ref.setAttribute('href', '');
    ref.textContent = 'X';
    cancelCell.appendChild(ref);

    cancelCell.addEventListener('click', function(ev) {
        ev.preventDefault();
        this.parentElement.remove();
    })

    row.appendChild(idCell);
    row.appendChild(nameCell);
    row.appendChild(quantityCell);
    row.appendChild(priceCell);
    row.appendChild(totalCell);
    row.appendChild(cancelCell);

    table.appendChild(row);

}

function updateRow(row, quantity) {
    const priceCell = row.querySelector('td:nth-child(4)');
    const quantityCell = row.querySelector('td:nth-child(3)');
    const totalCell = row.querySelector('td:nth-child(5)');

    quantityCell.textContent = parseInt(quantityCell.textContent, 10) + parseInt(quantity, 10);
    totalCell.textContent = parseInt(quantity.textContent, 10) * parseInt(priceCell.textContent, 10);
    console.log(priceCell.textContext);
}

function updateTotalCartValue() {
    const totalCell = document.querySelector('#cart tfoot th:last-child');
    const rows = document.querySelectorAll('#cart table > tr');
    let price = 0;
    rows.forEach(row => {
        price += parseInt(row.querySelector('td:nth-child(5)').textContent, 10);
    });

    totalCell.textContent = price;
}

changeAllArticleColors();