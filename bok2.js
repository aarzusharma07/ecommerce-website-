function addToCart(itemName, price) {
    const cartItems = document.getElementById('cart-items');
    const total = document.getElementById('total');
    const li = document.createElement('li');
    li.textContent = `${itemName}: $${price.toFixed(2)}`;
    cartItems.appendChild(li);
    total.textContent = (parseFloat(total.textContent) + price).toFixed(2);
}
document.querySelector('.buynow').addEventListener('click', function() {
    const total = document.getElementById('total').textContent;
    alert(`Your total is ${total}. Thank you for your purchase!`);
    // Here you can add additional functionality like redirecting to a payment page
});