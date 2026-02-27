// ==========================
// DARK MODE
// ==========================

const btnTheme = document.getElementById('btn-theme');
const body = document.body;

if (localStorage.getItem('theme') === 'dark') {
    body.classList.add('dark-mode');
    btnTheme.innerText = "Mode Terang";
}

btnTheme.addEventListener('click', function () {
    body.classList.toggle('dark-mode');

    if (body.classList.contains('dark-mode')) {
        localStorage.setItem('theme', 'dark');
        btnTheme.innerText = "Mode Terang";
    } else {
        localStorage.removeItem('theme');
        btnTheme.innerText = "Mode Gelap";
    }
});

// ==========================
// FITUR BELI
// ==========================

const tombolBeli = document.querySelectorAll('.btn-detail');

tombolBeli.forEach(function (button) {
    button.addEventListener('click', function (e) {
        const cardBody = e.target.closest('.card-body');
        const stokElement = cardBody.querySelector('.stok-text');
        let stok = parseInt(stokElement.innerText.replace("Stok: ", ""));

        if (stok > 0) {
            stok--;
            stokElement.innerText = "Stok: " + stok;
            alert("Berhasil membeli: " + cardBody.querySelector('.card-title').innerText);
        } else {
            alert("Stok habis!");
            button.disabled = true;
            button.innerText = "Habis";
        }
    });
});