export default new class ProductService {
    async update(productId, field, value) {
        await fetch('/api/change product.php', {
            method: 'POST',
            body: JSON.stringify({
                productId,
                field,
                value,
            }),
            headers: { 'Content-type': 'application/json' },
        })
    }
}