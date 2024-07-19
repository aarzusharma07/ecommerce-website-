// Get the login button
var loginBtn = document.getElementById("Login-btn");

// Get the modal
var modal = document.getElementById("modal");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the login button, open the modal
loginBtn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// Form submission - you can handle form submission logic here
var form = document.getElementById("loginForm");
form.addEventListener("submit", function(event) {
  // Prevent default form submission
  event.preventDefault();
  // Handle form submission logic here, e.g., validate inputs, send data to server, etc.
  // For now, let's just close the modal
  modal.style.display = "none";
});

//CART

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
//serach 
