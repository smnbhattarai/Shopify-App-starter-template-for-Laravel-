import "../css/sfywishlist.css";

require('noty/src/noty.scss');
require('noty/src/themes/mint.scss');

window.Noty = require('noty');
window.axios = require('axios');

const appDomain = 'https://sfywishlist.test';

const wishlistButton = document.querySelector('.sfywishlist-btn');

wishlistButton.addEventListener('click', function () {

    let customer_id = this.dataset.customer;
    let product_id = this.dataset.product;
    if (this.classList.contains('sfywishlist-active')) {
        this.classList.remove('sfywishlist-active');
        removeWishlist(customer_id, product_id);
    } else {
        this.classList.add('sfywishlist-active');
        addWishlist(customer_id, product_id);
    }

});

function addWishlist(customer_id, product_id) {
    let shop_id = Shopify.shop;
    axios.post(appDomain + '/api/addToWishlist', {shop_id, customer_id, product_id})
        .then(res => {
            notify('success', 'Product added to wishlist');
        })
        .catch(err => {
            notify('error', 'Oops! Something went wrong. Please try again later.');
        });

}

function removeWishlist(customer_id, product_id) {
    let shop_id = Shopify.shop;
    axios.post(appDomain + '/api/removeFromWishlist', {shop_id, customer_id, product_id})
        .then(res => {
            notify('success', 'Product removed from wishlist');
        })
        .catch(err => {
            notify('error', 'Oops! Something went wrong. Please try again later.');
        });
    notify('warning', 'Product removed from wishlist');
}

function checkWishlist(customer_id, product_id) {
    let shop_id = Shopify.shop;
    axios.post(appDomain + '/api/checkWishlist', {shop_id, customer_id, product_id})
        .then(res => {
            if(res.data !== '') {
                wishlistButton.classList.add('sfywishlist-active');
            }
        })
        .catch(err => {

        });
}

if(wishlistButton) {
    let customer_id = wishlistButton.dataset.customer;
    let product_id = wishlistButton.dataset.product;
    checkWishlist(customer_id, product_id);
}

function notify(type = 'success', text = '', position = 'topRight') {
    if (text !== '') {
        new Noty({
            type: type,
            layout: position,
            text: text,
            timeout: 3000
        }).show();
    }
}

