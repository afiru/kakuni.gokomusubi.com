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