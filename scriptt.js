document.addEventListener('DOMContentLoaded', function() {
    const deleteButtons = document.querySelectorAll('.delete-btn');
    const updateButtons = document.querySelectorAll('.update-btn');

    deleteButtons.forEach(button => {
        button.addEventListener('click', function() {
            const itemId = this.getAttribute('data-id');
            // Send AJAX request to delete item with itemId
            // Example: fetch('delete.php?id=' + itemId);
            // Reload the page after deletion or remove the item from DOM
        });
    });

    updateButtons.forEach(button => {
        button.addEventListener('click', function() {
            const itemId = this.getAttribute('data-id');
            // Redirect to update page or open a modal for updating item details
            // Example: window.location.href = 'update.php?id=' + itemId;
        });
    });
});
document.addEventListener('DOMContentLoaded', function() {
    const deleteButtons = document.querySelectorAll('.delete-btn');

    deleteButtons.forEach(button => {
        button.addEventListener('click', function() {
            const itemId = this.getAttribute('data-id');
            if (confirm('Are you sure you want to delete this item?')) {
                // Send AJAX request to delete item with itemId
                // Example: fetch('delete.php?id=' + itemId);
                // Remove the item from the table
                const tableRow = this.parentElement.parentElement;
                tableRow.parentNode.removeChild(tableRow);
            }
        });
    });
});
