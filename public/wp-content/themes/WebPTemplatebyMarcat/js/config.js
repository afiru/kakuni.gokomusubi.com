//■慣性スクロール
const lenis = new Lenis({
    smooth: true
})

function raf(time) {
    lenis.raf(time)
    requestAnimationFrame(raf)
}

requestAnimationFrame(raf)

$(function () {
    $('.jsmenuHeaderPc').on('click', function () {
        $('.navHeaderBase').slideToggle();
        if ($(this).hasClass('off')) {
            $(this).removeClass('off').addClass('on');
            $(this).find('.txtMenuHeader').text('CLOSE');
        } else {
            $(this).removeClass('on').addClass('off');
            $(this).find('.txtMenuHeader').text('MENU');
        }
    });

    $('.navHeaderBase a').on('click', function () {

        $('.navHeaderBase').slideToggle();
        if ($('.jsmenuHeaderPc').hasClass('off')) {
            $('.jsmenuHeaderPc').removeClass('off').addClass('on');
            $('.jsmenuHeaderPc').find('.txtMenuHeader').text('CLOSE');
        } else {
            $('.jsmenuHeaderPc').removeClass('on').addClass('off');
            $('.jsmenuHeaderPc').find('.txtMenuHeader').text('MENU');
        }
    });

    //スムーススクロール
    // スムーススクロール（Lenis対応）
    $(window).on('load', function () {
        const headerHeight = $('.base_header').outerHeight() || 0;
        const urlHash = location.hash;

        // ページ読み込み時にハッシュがある場合
        if (urlHash && $(urlHash).length) {
            lenis.scrollTo($(urlHash).offset().top - headerHeight, {
                duration: 1.2
            });
        }

        // ページ内リンククリック時
        $('a[href^="#"]').on('click', function (e) {
            const href = $(this).attr('href');
            if (href === '#' || href === '') return;

            const target = $(href);
            if (target.length) {
                e.preventDefault();
                const position = target.offset().top - headerHeight;
                lenis.scrollTo(position, {
                    duration: 1.2
                });
            }
        });
    });

});


parseInt(calendar_y);
parseInt(calendar_m);
get_calendar(calendar_y, calendar_m);
$(function () {
    $('.js_prev_sidebar_eventcalendar').on('click', function () {
        calendar_m--;
        if (calendar_m < 1) {
            calendar_m = 12;
            calendar_y = calendar_y - 1;
        }
        calendar_m = ('00' + calendar_m).slice(-2);
        set_year_month(calendar_y, calendar_m);
        get_calendar(calendar_y, calendar_m);
    });
    $('.js_next_sidebar_eventcalendar').on('click', function () {
        calendar_m++;
        if (calendar_m > 12) {
            calendar_m = 1;
            calendar_y = parseInt(calendar_y) + 1;
        }
        calendar_m = ('00' + calendar_m).slice(-2);
        set_year_month(calendar_y, calendar_m);
        get_calendar(calendar_y, calendar_m);
    });
});

function set_year_month(calendar_y, calendar_m) {
    $('.js_eventcalendar_now_year').empty().append(calendar_y);
    $('.js_eventcalendar_now_month').empty().append(calendar_m);
}

function get_calendar(calendar_y, calendar_m) {
    urlname = rest_url + "MarcatCalendarsAPI/?year=" + calendar_y + '&month=' + calendar_m;
    $.getJSON(urlname, function (results) {
        $('.js_main_sidebar_eventcalendar').empty().append(results.html);
    });
}