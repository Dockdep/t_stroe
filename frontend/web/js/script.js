$(document).ready(function(){
    footerBottom();
    callMobile();
    openMobMenu();
    closeCallMobileHide();
    closeMobMenu();
    addArrowMobMenuAndOpen();
    modalForms();
    hoverMainMenu();
    scrollUp();
    sortList();
    pagination();
    filters();
    menuAllPage();
    filtersShowMobil();
    openCardParams();
    checkedFilter();
    phoneMask();
    basketTabs();
    searchAll();
    sliderBrands();
    cardNum();
    searchMob();

    footerBottom();
    function footerBottom(){
        var heightHeader = document.getElementById('header_').offsetHeight
        var heightFooter = document.getElementById('footer_').offsetHeight
        var windowHeight = window.innerHeight
        document.getElementById('content_').style.minHeight = windowHeight-heightHeader-heightFooter+'px';
    }

    function mobOverlayAdd() {
        $('body').append('<div class="mob-overlay visible-xs visible-sm"></div>')
    }
    function mobOverlayRemove() {
        $('.mob-overlay').remove()
    }

    function openMobMenu() {
        $('.menu_mob').click(function () {
            mobOverlayAdd()
            $('body').addClass('off-scroll')
            $('#menu-mob-hidden').addClass('opens')
            setTimeout(function () {
                $('#menu-mob-hidden').addClass('visible')
            },10)
        })
    }

    function closeCallMobileHide() {
        $('.call-mobile-wr').removeClass('visible')
        setTimeout(function () {
            $('.call-mobile-wr').removeClass('open')
        },200)
    }

    function closeMobMenu() {
        $('body').on('click','.mob-overlay',function () {
            mobOverlayRemove()
            if($('#menu-mob-hidden').hasClass('visible')) {
                $('#menu-mob-hidden').removeClass('visible')
                setTimeout(function () {
                    $('#menu-mob-hidden').removeClass('opens')
                },200)
                $('body').removeClass('off-scroll')
            }
            if($('.btn_call').hasClass('close')) {
                $('.btn_call').removeClass('close')
                closeCallMobileHide()
            }

        })
        $('.close-menu-mob .close_mob').click(function () {
            mobOverlayRemove()
            $('#menu-mob-hidden').removeClass('visible')
            setTimeout(function () {
                $('#menu-mob-hidden').removeClass('opens')
            },200)
            $('body').removeClass('off-scroll')
            $('#menu-mob-hidden ul li.has_ul').removeClass('open')
        })
    }

    function addArrowMobMenuAndOpen() {
        $('#menu-mob-hidden ul li').each(function () {
            if($(this).find('ul').length>0){
                $(this).addClass('has_ul')
                $(this).parent().addClass('sub_m')
                $('#menu-mob-hidden>ul').removeClass('sub_m').addClass('sub_m-first');
            }
        })



        $('body').on('click','#menu-mob-hidden ul li.has_ul a',function () {
            if($(this).parent().parent().hasClass('sub_m')){  //если li элемент вложженый
                if($(this).parent().hasClass('open')){
                    $(this).parent().removeClass('open')
                } else {
                    $('.sub_m').find('.has_ul').removeClass('open')
                    $(this).parent().addClass('open')
                }
            }

            if($(this).parent().parent().hasClass('sub_m-first')) {  //если ли родительский открываем/закрываем
                if($(this).parent().hasClass('open')) {
                    $(this).parent().removeClass('open')
                    $(this).parent().find('.open').removeClass('open')
                } else {
                    $(this).parent().addClass('open')
                }

            }

        })



    }












    window.onresize = function () {
        footerBottom();
        if(window.innerWidth>=992){
            mobOverlayRemove()
            $('#menu-mob-hidden').removeClass('visible')
            setTimeout(function () {
                $('#menu-mob-hidden').removeClass('opens')
            },200)
            $('body').removeClass('off-scroll')
            $('body').removeClass('hidden_scroll-y')
            $('.mob_filters_wr').attr('style','')
        }
        hoverMainMenu()
    }



    function callMobile() {
        $('.btn_call').click(function() {

            if(!($(this).hasClass('close'))){
                $('.btn_call').addClass('close')
                mobOverlayAdd()

                $('.call-mobile-wr').addClass('visible')
                setTimeout(
                    function() {
                        $('.call-mobile-wr').addClass('open')
                    }, 20
                )
            } else {
                mobOverlayRemove()
                closeCallMobileHide()
                $('.btn_call')
                    .removeClass('close')
                $('.call-mobile-wr')
                    .removeClass('open')
                $('body')
                    .removeClass('off-scroll')
            }

        })

    }






    function hoverMainMenu() {
        if(window.innerWidth>=992){
            var widthMenu = ($('.section-box-content .container').width())-($('.section-box-content .main-menu').width());
            // $('.main-menu').addClass('full');
            // $('.main-menu ul li ul').css({width:widthMenu});
        }
        $('.section-box-content .main-menu ul li').each(function () {
            if($(this).find('ul').length<=0){
                $(this).addClass('not-list')
            }
        })

        $('.main-menu ul li').hover(function () {
            $(this).find(' > a').addClass('hover-main-menu')
        }, function () {
            $(this).find(' > a').removeClass('hover-main-menu')
        })
    }



    function scrollUp() {
        $('.btn_up').click(function () {
            $('body, html').animate({scrollTop:0}, 500);
        })
        btnScroll()
        function btnScroll() {
            btnScrollPos()
            function btnScrollPos() {
                var containerPos = $('.container').offset().left - 4;
                $('.btn_up').css({right:containerPos})
            }

            btnScrollShowHide()
            function btnScrollShowHide() {
                var windowHeight = $(window).height()

                if($(this).scrollTop() < windowHeight)
                {
                    $('.btn_up').removeClass('visible')
                } else {
                    $('.btn_up').addClass('visible')
                }
                var scrpos = $(this).scrollTop()
                var documentHeight = $(document).height()
                var fHe = ($('.section-box-footer').height())-39
                var fPos = $('.section-box-footer').offset().top
                var docFooterHeight = documentHeight-fHe-windowHeight

                if(($(this).scrollTop())>=docFooterHeight){
                    $('.btn_up').css({bottom:(fHe+16)-((documentHeight-scrpos)-($(window).height()))})
                } else  {
                    $('.btn_up').css({bottom:16})
                }
            }

            $(window).resize(function () {
                btnScrollPos()
                btnScrollShowHide()
            })

            $(window).scroll(function () {
                btnScrollShowHide()
            })


            $('.btn_scroll').click(function () {
                $('body,html').animate( { scrollTop: 0 }, 500 );
            })

        }
    }





    function sortList() {
        $('body').on('click','.sort-cat>a',function (e) {
            if($(this).hasClass('category-sort')){
                e.preventDefault();
                $('.sort-cat').toggleClass('active')
            }
        })

        $('body').on('click','.sort-cat ul li a',function () {
            $('.category-sort').html($(this).text())
            $('.sort-cat ul li a').removeClass('desc')
            $(this).addClass('desc')
        })

        var timeoutSort
        $('.sort-cat').hover(function () {
            clearTimeout(timeoutSort)
        },function () {
            timeoutSort = setTimeout(function () {
                $('.sort-cat').removeClass('active')
            },320)

        })
    }

    function pagination() {
        $('body').on('click','.pagination li.active',function (e) {
            e.preventDefault();
        })
    }


    function filters() {
        //удаляем выбранне фильтра(серые кнопки)
        $('body').on('click','.wrapp_clear-link a',function () {
            var thisParents = $(this).parent().parent();
            $(this).remove();
            if($('.wrapp_clear-link a').length<=0){
                thisParents.remove();
            }
        })


        $('body').on('click','.buttonsSort a.active',function (e) {
            e.preventDefault();
        })
    }





    function  menuAllPage() {

        $('.catalog-link').click(function () {
            if ($(this).find('.arrow-catalog').length<1) {
                $('body,html').animate( { scrollTop: $(this).offset().top }, 300 );
            }
        })

        $('.arrow-catalog').click(function () {
            $(this).toggleClass('active')
            if($(this).hasClass('active')){
                $('.menu_all_page').addClass('show_menu_all')
                setTimeout(function () {
                    $('.menu_all_page').addClass('opacity_off')
                },100)
            } else {
                $('.menu_all_page').removeClass('show_menu_all opacity_off')
            }
        })


        var timeoutMenu
        $('.menu_all_page').hover(function () {
            clearTimeout(timeoutMenu)
        },function () {
            timeoutMenu = setTimeout(function () {
                $('.menu_all_page').removeClass('show_menu_all opacity_off')
                $('.arrow-catalog').removeClass('active')
            },320)

        })
    }

    function filtersShowMobil() {
        $('body').on('click','.filter_mobile_',function () {
            $('.mob_filters_wr').animate({left:0,opacity:1},300)
            $('body').addClass('hidden_scroll-y')
        })

        $('body').on('click','.close_mob_filters',function () {
            $('body').removeClass('hidden_scroll-y')
            $('.mob_filters_wr').animate({left:'-100%',opacity:0},300)
        })
    }



    function openCardParams() {
        $('.p_wrapp').click(function () {
            var windWidth = $(window).width();
            if(windWidth<768){
                if(($(this).hasClass('open_p'))){
                    $(this).removeClass('open_p')
                } else {
                    $('.p_wrapp').removeClass('open_p')
                    $(this).addClass('open_p')
                }
            }
        })
        $(window).resize(function () {
            if($(window).width()>=768) {
                $('.p_wrapp').removeClass('open_p')
            }

        })
    }



    function checkedFilter() {
        $('.sidebar_checks a').click(function () {
            $(this).parent().addClass('checked')
        })
    }



    function phoneMask() {
        var phoneInput = '.phones_mask input'

        if($('body').find(phoneInput).length>0){
            $(phoneInput).mask('+38(000)000-00-00',{placeholder:'+38(000)000-00-00'});
            $(phoneInput).focus(function () {
                if(($(this).val())== '') {$(this).val('+38(0')}
            })
            $(phoneInput).focusout(function () {
                var phoneVal = $(this).val()
                //if(phoneVal == '+38(0' || phoneVal == '+38(' || phoneVal == '+38' || phoneVal == '+3' || phoneVal == '+') {$(this).val('')}
                if(phoneVal.length <17) {$(this).val('')}
            })
        }
    }



    function basketTabs() {
        $('.basket-tabs_list-wr ul li').click(function (e) {
            e.preventDefault();
            var indexbasketTabs = $(this).index()
            $('.basket-tabs_list-wr ul li').removeClass('active');
            $(this).addClass('active');
            var mobTabsBasket = $('.tabs_basket-mobile');
            mobTabsBasket.removeClass('active-mobile')
            $(mobTabsBasket[indexbasketTabs]).addClass('active-mobile')
        })
        $('.btn_mobil_show_desk').click(function (e) {
            e.preventDefault();
            var indexbasketTabsMob = $(this).parent().index();
            $('.btn_mobil_show_desk').parent().removeClass('active-mobile');
            $(this).parent().addClass('active-mobile');
            var mobTabsBasket = $('.basket-tabs_list-wr ul li')
            mobTabsBasket.removeClass('active')
            $(mobTabsBasket[indexbasketTabsMob]).addClass('active')
        })

        if(($(window).width())<768) {
            $('.tabs_basket-mobile').removeClass("active-mobile");
        }
    }


    function searchAll() {
        $('.search-list span').click(function () {
            if($(this).parent().hasClass("focus")){
                $(this).parent().removeClass('focus')
                $('.overlay_search').remove()
            } else {
                $(this).parent().addClass('focus')
                $('body').append('<div class="overlay_search"></div>')
            }
        })

        $('.search-ul li').click(function () {
            var indexSearch = $(this).index();
            var textThis = $(this).find('i').text()
            $('.search-list').removeClass('focus')
            $('.search-menu form input').focus();
            $('.search-menu form input[type="hidden"]').val(indexSearch)

            $('.search-list').find('span').html(textThis)
        })


        var timeoutSearch
        $('.search-list').hover(function () {
            clearTimeout(timeoutSearch)
        },function () {


        })

        $('body').on('mouseover', '.overlay_search', function () {
            timeoutSearch = setTimeout(function () {
                $('.overlay_search').remove()
                $('.search-list').removeClass('focus')
            },320)

        })



    }

    function searchMob() {
        $('.search-btn-menu-mob').click(function () {
            $('.search-menu').toggleClass('mob-active-search').append('<div class="close-seach-mobiles"></div> ');
            $('.close-seach-mobiles').click(function () {
                $('.search-menu').removeClass('mob-active-search')
                $('.close-seach-mobiles').remove();
            })

        })
    }

    function sliderBrands() {
        //бренды
        var sliderBrand = $(".slider-brands");
        if (sliderBrand.length>0){
            sliderBrand.owlCarousel({
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 2,
                        slideBy: 1
                    },

                    370: {
                        items: 3,
                        slideBy: 1
                    },
                    500: {
                        items: 3,
                        slideBy: 1
                    },

                    660: {
                        items: 4,
                        slideBy: 1
                    },

                    768: {
                        items: 5,
                        slideBy: 1
                    },


                    920: {
                        items: 6,
                        slideBy: 1
                    },

                    1200: {
                        items: 7,
                        slideBy: 1
                    }
                },
                navSpeed:150,
                nav:false,
                dots:false,
                onInitialized: function(){
                    sliderBrand.next().addClass('vis_ lock');
                    sliderBrand.next().next().addClass('vis_');
                    sliderBrand.parent().addClass('fix-arrows-brands')
                }
            })


            $(".btn-r_ ").click(function(){
                if(!($(this).hasClass('lock'))){
                    $(this).parent().find(sliderBrand).trigger('next.owl.carousel');

                }

            })

            $(".btn-l_ ").click(function() {
                if(!($(this).hasClass('lock'))){
                    $(this).parent().find(sliderBrand).trigger('prev.owl.carousel');

                }
            })
            sliderBrand.on('changed.owl.carousel', function(event) {

                var index = event.item.index;
                var count = event.item.count;
                var size = event.page.size;
                if(index==(count-size)){
                    $(this).parent().find(".btn-r_ ").addClass('lock')

                } else {
                    $(this).parent().find(".btn-r_ ").removeClass('lock')
                }
                if (index==0){
                    $(this).parent().find(".btn-l_ ").addClass('lock')
                } else  {
                    $(this).parent().find(".btn-l_ ").removeClass('lock')

                }
            })


        }

    }

    function cardNum() {
        $('.card-num-wr input').keypress(function (e) {
            if (!(e.which == 8 || (e.which > 47 && e.which < 58))) return false;


        })

        $('.card-num-wr input').keyup(function (e) {
            if($(this).val()<=0){
                $(this).val(1)
            }
        })

        $('.card-num-wr i').click(function () {
            var input = $('.card-num-wr input');
            var oldVal = input.val();
            if($(this).hasClass('min')) {
                if(oldVal>1){
                    input.val(oldVal-1)
                } else {
                    input.val(1)
                }
            } else {
                oldVal++
                input.val(oldVal)
            }
        })


    }


    function modalForms() {
        $('body').on('click','.modal-link', function (e) {
            e.preventDefault();


            mobOverlayRemove()
            $('#menu-mob-hidden').removeClass('visible')
            setTimeout(function () {
                $('#menu-mob-hidden').removeClass('opens')
            },200)
            $('body').removeClass('off-scroll')

            mobOverlayRemove()
            closeCallMobileHide()
            $('.btn_call').removeClass('close')
            $('.call-mobile-wr').removeClass('open')
            $('body').removeClass('off-scroll')

            var idForm = $(this).data('form');
            var pos = ($(window).scrollTop()) + 30;
            if($(this).hasClass('fixed-modal')){
                pos = 30;
                $('#'+idForm).css({position:'fixed'})
            }
            if($(this).hasClass('pos-top')){
                pos = 30;
            }
            $('#overlay').removeClass('overlay_cloned');
            $('#overlay').fadeIn(400,
                function(){
                    $('#'+idForm)
                        .css('display', 'block')
                        .animate({opacity: 1, top: pos}, 200);
                });
        })
    }






    $(document).on('click', '.basket-modal-bg #modal_close, #modal_close-2, #overlay', closeHideBasket);


    function closeHideBasket() {
        $('#overlay').fadeOut(400);
        $('.basket_modal').animate({opacity: 0, top: '0'}, 200,function(){
            $(this).css('display', 'none');
            $('#overlay').fadeOut(400);
        });
    }

    closeForms();
    function closeForms() {
        $('#modal_close, #overlay').click( function(){
            $('.forms_, .basket_modal').animate({opacity: 0, top: '0'}, 200,function(){
                $(this).css('display', 'none');
                $('#overlay').fadeOut(400);
            });
            $('#success_form').animate({opacity: 0, top: '0'}, 200,function(){
                $(this).css('display', 'none');
                $(this).css({top:'50%'});
            });
        });
    }


    hiddenRadioBasket();
    function hiddenRadioBasket() {
        $('.delivery-wrapper input[type="radio"]').on( 'click', function () {
            if($(this).parents('.self-delivery-radio').hasClass('self-delivery-radio')){

                $('.hidden-radios_').addClass('active-show')
            } else {
                $('.hidden-radios_').removeClass('active-show')
            }
        });

    }

    window.onload = function () {
        initialize();
        function initialize() {
            console.log('start-map')
            var startPosLat = '50.4605103';
            var startPosLng = '30.6544418';
            var zooms = 10;
            var start_position  = new google.maps.LatLng(startPosLat, startPosLng);
            var styles = [{
                stylers: [
                    { saturation: -100 }
                ]
            }];
            var settings = {
                styles: styles,
                zoom: zooms,
                scrollwheel: false,
                center: start_position,
                mapTypeControl: true,
                mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
                navigationControl: false,
                navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
                scaleControl: true,
                streetViewControl: true,
                rotateControl: true,
                zoomControl: true,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("map_canvas"), settings);

            var markers = [];

            var image1 = new google.maps.MarkerImage('/images/markers/marker-we-1.png',
                new google.maps.Size(32, 48),
                new google.maps.Point(0,0),
                new google.maps.Point(16, 35)
            );

            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(50.451596, 30.6355071),
                map: map,
                // title: newName,
                icon: image1
            });
            markers.push(marker);


            var image1 = new google.maps.MarkerImage('/images/markers/marker-we-1.png',
                new google.maps.Size(32, 48),
                new google.maps.Point(0,0),
                new google.maps.Point(16, 35)
            );

            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(50.5286765, 30.7965036),
                map: map,
                // title: newName,
                icon: image1
            });
            markers.push(marker);



        }
    }

    $('.adress_shop_anchor a').click(function (e) {
        e.preventDefault();
        var firstCord = $(this).data('magaz-one');
        var secondCord = $(this).data('magaz-two');

        console.log(firstCord)
        console.log(secondCord)

        $('body, html').animate({scrollTop:$('#map_canvas').offset().top}, 500)


    })




});


function success() {
    var pos = ($(window).scrollTop()) + 30;
    $('.forms_').animate({opacity: 0, top: '0'}, 200,function(){
        $(this).css('display', 'none');
    });
    setTimeout(function () {
        $('#overlay').fadeIn(400);
        $('#success_form').css('display', 'block').animate({opacity: 1, top: pos}, 700);
    },400)
}

