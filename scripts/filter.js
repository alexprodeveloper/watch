const textContainer = document.querySelector('.filter__content');

document.getElementById('filter').addEventListener('change',  async (event) => {
    const response = await fetch(`/api/filter.php?pid=${event.target.value}`);
    const text = await response.text();
    textContainer.innerHTML  = text;
});

window.addEventListener('load', async () => {
    const response = await fetch(`/api/filter.php?pid=`);
    const text = await response.text();
    textContainer.innerHTML  = text;
});