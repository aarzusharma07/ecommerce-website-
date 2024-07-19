document.addEventListener('DOMContentLoaded', function() {
    const addToCartButtons = document.querySelectorAll('.cart');
  
    addToCartButtons.forEach(button => {
      button.addEventListener('click', addToCart);
    });
  
    function addToCart(event) {
      const item = event.target.parentElement;
      const itemName = item.querySelector('.pname').textContent;
      const itemPrice = parseFloat(item.querySelector('.deal1dis').textContent.match(/\d+/)[0]); // Extracting the price from the text
  
      const cartItem = document.createElement('li');
      cartItem.textContent = itemName + ' - ' + itemPrice + ' Rupees';
      document.getElementById('cart-list').appendChild(cartItem);
  
      updateTotal(itemPrice);
    }
  
    function updateTotal(price) {
      const totalAmount = document.getElementById('total-amount');
      totalAmount.textContent = parseFloat(totalAmount.textContent) + price;
    }
  });
  