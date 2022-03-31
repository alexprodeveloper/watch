const url = new URL(window.location.href);
const id = url.searchParams.get('id');

document.getElementById('name').addEventListener('input', (event) => {
    fetch(`/api/change_product.php?id=${id}&field=name&value=${event.target.value}`);
});

document.getElementById('description').addEventListener('input', (event) => {
    fetch(`/api/change_product.php?id=${id}&field=description&value=${event.target.value}`);
});