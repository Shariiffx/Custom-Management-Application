// js/search.js
document.getElementById('search-input').addEventListener('keyup', function() {
    let query = this.value;
    fetch('search.php?q=' + query)
        .then(response => response.json())
        .then(data => {
            // Update the product list based on the search
        });
});
