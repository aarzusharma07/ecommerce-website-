document.addEventListener('DOMContentLoaded', function() {
  const addToCartButtons = document.querySelectorAll('.cart');

  addToCartButtons.forEach(button => {
      button.addEventListener('click', addToCart);
  });

  function addToCart(event) {
      const item = event.target.parentElement;
      const itemName = item.querySelector('.pname').textContent;
      const itemPrice = parseFloat(item.querySelector('.deal1dis').textContent.match(/\d+/)[0]); // Extracting the price from the text

      fetch('server.php', {
          method: 'POST',
          headers: {
              'Content-Type': 'application/x-www-form-urlencoded'
          },
          body: new URLSearchParams({
              productName: itemName,
              productPrice: itemPrice
          })
      })
      .then(response => {
          if (!response.ok) {
              throw new Error('Network response was not ok');
          }
          return response.text();
      })
      .then(data => {
          console.log(data);
      })
      .catch(error => {
          console.error('There was a problem with the fetch operation:', error);
      });

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
// 'DOMContentLoaded': This is the event type being listened for. It indicates that the initial HTML document has been completely loaded and parsed.

//function() { ... }: This is the event handler function that will be executed when the DOMContentLoaded event occurs. It contains the JavaScript code that needs to run once the DOM content is fully loaded.

$(document).ready(function() {
    $(".cart").click(function() {
        var productName = $(this).data("product-name");
        var productPrice = $(this).data("product-price");

        $.ajax({
            url: "server.php",
            method: "POST",
            data: {
                productName: productName,
                productPrice: productPrice,
                cart: 1
            },
            success: function(response) {
                alert(response); // Display response message
            }
        });
    });
});


    // Function to handle adding product to cart
    function addToCart(productName, productPrice) {
        // AJAX request to send product details to PHP script
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'deal.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    // Response from PHP script
                    console.log(xhr.responseText);
                } else {
                    console.error('Error adding product to cart');
                }
            }
        };
        // Send the product details to the PHP script
        xhr.send('cart=true&productName=' + encodeURIComponent(productName) + '&productPrice=' + encodeURIComponent(productPrice));
    }



