function GetURLParameter(sParam){
    var sPageURL = window.location.search.substring(1);
    var sURLVariables = sPageURL.split('&');
    for (var i = 0; i < sURLVariables.length; i++){
        var sParameterName = sURLVariables[i].split('=');
        if (sParameterName[0] == sParam){
            return sParameterName[1];
        }
    }
}   
function scrollNav(){
    $('.gosection').each(function(){
        var nav = parseInt($('.scrollNav').offset().top) + 100;
        var sectionOffset = $(this).offset().top;
        var sectionHeight = parseInt(sectionOffset) + parseInt($(this).outerHeight());

        var sectionName = $(this).attr('data-name');

        if(nav > sectionOffset && nav < sectionHeight){
            if(sectionName !== 'heading'){
                $('.scrollNav').removeClass('scrollNav--hidden');
                $('.scrollNav__dot[data-name="' + sectionName + '"]').addClass('scrollNav__dot--active');
                $('.scrollNav__name').html(sectionName);
            }else{
                $('.scrollNav').addClass('scrollNav--hidden');
            }
        }else{
            $('.scrollNav__dot[data-name="' + sectionName + '"]').removeClass('scrollNav__dot--active');
        }
    });
}
$(window).scroll(function() {
    scrollNav();
});
$(document).ready(function(){
    scrollNav();
});

// Menu mobile
function scrollToAnchor(aid){
    var aTag = $('*[id="' + aid + '"]');
    $('html,body').animate({
        scrollTop: aTag.offset().top - 50
    }, 'slow');
}
$(document).ready(function(){
    $('.menuToggle').on('click', function(){
        $('body').toggleClass('noscroll');
        $(this).toggleClass('menuToggle--active');
        $('.siteHeader__menuMobile').toggleClass('siteHeader__menuMobile--ready');
        setTimeout(function(){
            $('.siteHeader__menuMobile').toggleClass('siteHeader__menuMobile--active');
        }, 500);
    });
    $('.mobileItem').on('click', function(e){
        e.preventDefault();
        var href = $(this).attr('href');

        $('body').removeClass('noscroll');
        $('.siteHeader__menuMobile').removeClass('siteHeader__menuMobile--active');
        setTimeout(function(){
            $('.siteHeader__menuMobile').removeClass('siteHeader__menuMobile--ready');
        }, 500);

        scrollToAnchor(href);
    });
});

$(document).ready(function (){
    $('.menu__item').on('click', function(e){
        e.preventDefault();
        var href = $(this).attr('href');
        scrollToAnchor(href);
    })
});

// Section parameter read
$(document).ready(function(){
    var section = GetURLParameter('section');

    if(typeof section !== 'undefined'){
        setTimeout(function(){
            scrollToAnchor(section);
        }, 300);
    }
});


// Contact form engine
$(document).ready(function(){
    var form = $('form[name="contactform"]');
    var textarea = $(form).find('textarea');

    function clearForm(){
        $(form).find('input').val('');
        $(textarea).val('');
    }
    function formNotice(notice, type){
        $('.form__notice').find('p').remove();
        $('.form__notice').html('<p class="notice notice--' + type + '">' + notice + '</p>');
    }

    $(textarea).on('keyup paste', function(){
        if($(this).val() !== ''){
            $(this).parent().removeClass('form__wrap--before');
        }else{
            $(this).parent().addClass('form__wrap--before');
        }
    });

    $(form).submit(function(e){
        e.preventDefault();

        var nameval = $(form).find('input[name="contactName"]').val();
        var mailval = $(form).find('input[name="contactMail"]').val();
        var subjectval = $(form).find('input[name="contactSubject"]').val();
        var messageval = $(form).find('textarea').val();

        $.ajax({
            type: 'POST',
            url: ajaxurl,
            data: {
                action: 'contact_form_engine',
                name: nameval,
                mail: mailval,
                subject: subjectval,
                message: messageval,
            },
            success: function(response){
                if(response == 'sent'){
                    clearForm();
                    if($('html').attr('lang') == 'pl-PL'){
                        formNotice('Twoja wiadomość została pomyślnie wysłana.', 'success');
                    }else{
                        formNotice('Your message has been sent.', 'success');
                    }
                }else{
                    if($('html').attr('lang') == 'pl-PL'){
                        formNotice('Wystąpił błąd podczas wysyłania wiadomości, spróbuj powonie później.', 'error');
                    }else{
                        formNotice('There was an error sending the form, please try again later.', 'error');
                    }
                }
            },
            error: function (response) {
                formNotice('There was an error sending the form, please try again later.', 'error');
                console.log('ajax error');
            }
        });
    });
});

// Client list
$(document).ready(function (){
    $('.mainClients__item').on('click', function(){
        var client = $(this).attr('data-client');

        $('body').addClass('noscroll');
        $('.clientPage').removeClass('clientPage--active');
        $('.clientPage[data-client="' + client + '"]').addClass('clientPage--active');

        $('.clientWrap').addClass('clientWrap--ready');
        setTimeout(function(){
            $('.clientWrap').addClass('clientWrap--active');
        }, 500);
    });
});

// Custom mouse
$(document).ready(function (){
    if($(window).width() > 992){
        $(document).bind('mousemove', function(e){
            $('.customMouse').css({
                top: e.pageY - $(".customMouse").height() / 2,
                left: e.pageX - $(".customMouse").width() / 2
            });
        });
    }
});

// Clutch widget
var clutch = $('.clutch-widget').find('iframe');
$(clutch).on('load', function(){
    console.log('loaded');
    let head = $(clutch).contents().find('head');
    let css = '<style>.logotype{filter: invert(1) grayscale(1) brightness(3);}</style>';
    $(head).append(css);
});