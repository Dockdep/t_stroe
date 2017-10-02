var ArtboxBasket = (function () {
    function ArtboxBasket() {
        this.init(true, true);
    }
    Object.defineProperty(ArtboxBasket.prototype, "items", {
        get: function () {
            return this._items;
        },
        enumerable: true,
        configurable: true
    });
    Object.defineProperty(ArtboxBasket.prototype, "language", {
        get: function () {
            if (this._language === undefined) {
                var language_attr = $('html').attr('lang');
                console.log(language_attr);
                if (language_attr !== undefined) {
                    var language = language_attr.substr(0, 2);
                    if (language.length == 2) {
                        this._language = language;
                    }
                    else {
                        this._language = 'ru';
                    }
                }
                else {
                    this._language = 'ru';
                }
            }
            return this._language;
        },
        enumerable: true,
        configurable: true
    });
    ArtboxBasket.prototype.init = function (update_modal, update_cart) {
        $.get('/' + this.language + '/basket', function (data) {
            console.log('/' + this.language + '/basket');
            this._items = data.basket;
            if (update_modal) {
                this.updateModal(data.modal, false);
            }
            if (update_cart) {
                this.updateCart(data.cart);
            }
        }.bind(this), 'json').fail(function () {
            console.error('Basket cannot be init');
        });
    };
    ArtboxBasket.prototype.add = function (product_variant_id, count) {
        $.post('/' + this.language + '/basket/add?product_variant_id=' + product_variant_id + '&count=' + count, function (data) {
            this._items = data.basket;
            this.updateModal(data.modal, data.cart, true);
        }.bind(this), 'json').fail(function (xhr, status, error) {
            console.error(error);
        });
    };
    ArtboxBasket.prototype.set = function (product_variant_id, count) {
        $.post('/' + this.language + '/basket/set?product_variant_id=' + product_variant_id + '&count=' + count, function (data) {
            this._items = data.basket;
            this.updateModal(data.modal, data.cart, true);
        }.bind(this), 'json').fail(function (xhr, status, error) {
            console.error(error);
        });
    };
    ArtboxBasket.prototype.remove = function (product_variant_id) {
        $.post('/' + this.language + '/basket/remove?product_variant_id=' + product_variant_id, function (data) {
            this._items = data.basket;
            this.updateModal(data.modal, data.cart, true);
        }.bind(this), 'json').fail(function (xhr, status, error) {
            console.error(error);
        });
    };
    ArtboxBasket.prototype.updateModal = function (modal, cart_html, show) {
        if (show === void 0) { show = false; }
        var modalBox = $('.basket_modal');
        modalBox.html(modal);
        this.updatePage(modal);
        if (cart_html) {
            this.updateCart(cart_html);
        }
        if (this.count < 1) {
            this.hideBasket();
        }
        if (show) {
            return show;
        }
    };
    ArtboxBasket.prototype.updateCart = function (cart_html) {
        var cart = $('.basket-wrapper');
        cart.html(cart_html);
    };
    ArtboxBasket.prototype.updatePage = function (modal) {
        var table = $(modal).find('.basket-tb');
        var sum = $(modal).find('.price-total-wr');
        var target = $('.basket_page').find('.basket-tb');
        var sum_target = $('.basket_page').find('.price-total-wr');
        if (this.count < 1 && target.length > 0) {
            location.reload();
            return;
        }
        if (table.length > 0 && sum.length > 0) {
            $(target).html($(table).html());
            $(sum_target).html($(sum).html());
        }
    };
    ArtboxBasket.prototype.hideBasket = function () {
        $('.basket_modal')
            .animate({
            opacity: 0,
            top: '0'
        }, 200, function () {
            $(this)
                .css('display', 'none');
            $('#overlay')
                .fadeOut(400);
        });
    };
    Object.defineProperty(ArtboxBasket.prototype, "count", {
        get: function () {
            return Object.keys(this._items).length;
        },
        enumerable: true,
        configurable: true
    });
    return ArtboxBasket;
}());
var basket = new ArtboxBasket();
//
// $(document)
//     .on(
//         'click', '#modal_close, #overlay, #overlay_s, #modal_close-2', function(e) {
//             basket.hideBasket();
//             $('.forms_, .forms_reg')
//                 .animate(
//                     {
//                         opacity: 0,
//                         top: '0'
//                     }, 200, function() {
//                         $(this)
//                             .css('display', 'none');
//                         $('#overlay, #overlay_s')
//                             .fadeOut(400);
//                     }
//                 );
//             $('#success_form')
//                 .animate(
//                     {
//                         opacity: 0,
//                         top: '0'
//                     }, 200, function() {
//                         $(this)
//                             .css('display', 'none');
//                         $(this)
//                             .css({top: '50%'});
//                     }
//                 );
//         }
//     );
// //после удачной отправки формы запускать success()
// // success()
// function success() {
//     $('.forms_')
//         .animate(
//             {
//                 opacity: 0,
//                 top: '0'
//             }, 200, function() {
//                 $(this)
//                     .css('display', 'none');
//             }
//         );
//     setTimeout(
//         function() {
//             $('#success_form')
//                 .css('display', 'block')
//                 .animate({opacity: 1}, 700);
//         }, 400
//     )
// }
//
$(document)
    .on('click', '.remove_ico', confirmRemove);
$(document)
    .on('click', '.remove_confirm a', removeBasket);
$(document)
    .on('click', '.quantity-wr span', changeBasket);
$(document)
    .on('change', '.quantity-wr input', setBasket);
$(document)
    .on('keypress', '.quantity-wr input', setControl);
$(document)
    .on('click', 'a.btn_buy_cat', addBasket);
//
// // Delivery to payment custom manipulation
// $(document)
//     .on(
//         'change', '[name="OrderFrontend[delivery]"]', function(e) {
//             if ($(this)
//                     .val() == 3) {
//                 $('#payment-wrapper-8')
//                     .removeClass('hidden');
//                 $('#payment-wrapper-3')
//                     .addClass('hidden');
//             } else {
//                 $('#payment-wrapper-8')
//                     .addClass('hidden');
//                 $('#payment-wrapper-3')
//                     .removeClass('hidden');
//             }
//             if ($('.field-orderfrontend-payment.hidden input:checked').length) {
//                 $('.field-orderfrontend-payment:not(.hidden) a')
//                     .first()
//                     .trigger('click');
//             }
//         }
//     );
//
// $(document)
//     .on(
//         'change', '[name="OrderFrontend[payment]"]', function(e) {
//             console.log('hello');
//             $('.field-orderfrontend-payment .hint_block')
//                 .addClass('hidden_form_txt');
//             $(this)
//                 .parents('.field-orderfrontend-payment')
//                 .find('.hint_block')
//                 .removeClass('hidden_form_txt');
//         }
//     );
//
// $(document).on('click', '.card_delivery_link', function(e) {
//     $('#card_deliveries').trigger('click');
// });
//
// var checked_delvery = $('[name="OrderFrontend[delivery]"]:checked');
// if(checked_delvery.length && !checked_delvery.hasClass('root-radio')) {
//     var parent = checked_delvery.parents('.check-box-form');
//     parent.find('.parent_radio + label a').trigger('click');
//     parent.find('.parent_radio').prop('checked', true);
// }
//
// $('#feedback-header').on('afterValidate', function(event, messages, errorAttributes) {
//     if(!errorAttributes.length) {
//         $.post('/site/feedback', $(this).serialize()).always(function() {
//             location.reload();
//         });
//     }
// });
//
// $('#basket-form').on('beforeValidate', function(event, attribute, messages) {
//     var delivery_valid = ($('[name="OrderFrontend[delivery]"]:checked').length > 0);
//     var payment_valid = ($('[name="OrderFrontend[payment]"]:checked').length > 0);
//     if(!delivery_valid || !payment_valid) {
//         if(!delivery_valid) {
//             $('.delivery-wrapper').addClass('has-error');
//         }
//         if(!payment_valid) {
//             $('.payment-wrapper').addClass('has-error');
//         }
//         return false;
//     } else {
//         if(delivery_valid && payment_valid) {
//             $('.delivery-wrapper, .payment-wrapper').removeClass('has-error');
//         } else if(delivery_valid) {
//             $('.delivery-wrapper').removeClass('has-error');
//         } else if(payment_valid) {
//             $('.payment-wrapper').removeClass('has-error');
//         }
//     }
// });
//
// $('#feedback-header').on('submit', function(e) {
//     e.preventDefault();
// });
function confirmRemove(e) {
    e.preventDefault();
    $(this)
        .parent()
        .addClass('confirm');
}
function changeBasket(e) {
    var variant = $(this)
        .parents('tr.variant_tr')
        .data('variant');
    var input = $(this)
        .parent()
        .find('input');
    var oldVal = input.val();
    if ($(this)
        .hasClass('minus')) {
        if (oldVal > 1) {
            basket.add(variant, -1);
        }
    }
    else {
        basket.add(variant, 1);
    }
}
function removeBasket(e) {
    e.preventDefault();
    if ($(this)
        .hasClass('remove-yes')) {
        var variant = $(this)
            .parents('tr.variant_tr')
            .data('variant');
        //удаление ячейки "tr" в корзине
        basket.remove(variant);
        $(this)
            .parents('.confirm')
            .parent()
            .remove();
    }
    else {
        $(this)
            .parents('.confirm')
            .removeClass('confirm');
    }
}
function setBasket(e) {
    e.preventDefault();
    var variant = $(this)
        .parents('tr.variant_tr')
        .data('variant');
    var count = $(this)
        .val();
    basket.set(variant, count);
}
function setControl(e) {
    if (e.which == 13) {
        $(this)
            .trigger('change');
        return false;
    }
    else if (!(e.which == 8 || (e.which > 47 && e.which < 58))) {
        return false;
    }
}
function showBasket() {
    var pos = ($(window)
        .scrollTop()) + 30;
    $('#overlay')
        .fadeIn(400, function () {
        $('.basket_modal')
            .css('display', 'block')
            .animate({
            opacity: 1,
            top: pos
        }, 200);
    });
}
function addBasket(e) {
    e.preventDefault();
    var count = 1;
    var variant = $(this)
        .data('variant');
    var $item_Quantity = $('.card-num-wr input');
    if ($item_Quantity !== null) {
        count = $item_Quantity.val();
    }
    if ($item_Quantity.val() !== undefined) {
        count = $item_Quantity.val();
    }
    basket.add(variant, count);
    showBasket();
}
