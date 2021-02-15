import "../css/sfywishlist.css";
require('noty/src/noty.scss');
require('noty/src/themes/mint.scss');

window.Noty = require('noty');

var wishlistButton = document.querySelector('.sfywishlist-btn');
wishlistButton.addEventListener('click', function() {
    if(this.classList.contains('sfywishlist-active')) {
        this.classList.remove('sfywishlist-active');
        removeWishlist(customer, id);
    } else {
        this.classList.add('sfywishlist-active');
        let customer = this.dataset.customer;
        let id = this.dataset.product;
        addWishlist(customer, id);
    }

});

function addWishlist(customer, product_id) {
    new Noty({
        type: 'success',
        layout: 'topRight',
        text: 'Product added to wishlist',
        timeout: 5000
    }).show();
}

function removeWishlist(customer, id) {
    new Noty({
        type: 'warning',
        layout: 'topRight',
        text: 'Product removed from wishlist',
        timeout: 5000
    }).show();
}
