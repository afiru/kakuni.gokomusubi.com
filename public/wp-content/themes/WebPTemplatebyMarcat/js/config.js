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

//カレンダー
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

//緊急お知らせ
$(function () {
    let counterText;
    let table2Text;
    let table4Text;

    function nl2br(str) {
        if (!str) return "";
        return String(str).replace(/\r\n|\r|\n/g, "<br>");
    }
    //初期
    setRestCnt();

    function setRestCnt() {
        $('.jsnowNewsCnt').empty();
        nowurl = home_url + '/wp-json/gokomusubi/v1/status';

        $.getJSON(nowurl, function (results) {
            counterText = results.counter == 0 ? "満席" : `残り<span class="fw_700">${results.counter}</span>席`;
            table2Text = results.table2 == 0 ? "満席" : `残り<span class="fw_700">${results.table2}</span>卓`;
            table4Text = results.table4 == 0 ? "満席" : `残り<span class="fw_700">${results.table4}</span>卓`;
            $('.jsnowNewsCnt').append('\
            <h2 class="t_center cl_fff fw_700 h2NowNewsCnt">今日のおすすめメニュー</h2>\n\
            <p class="t_center cl_fff fw_400 txtNowNewsCntTop">' + nl2br(results['menu']) + '</p>\n\
            <h2 class="t_center cl_fff fw_700 h2NowNewsCnt h2NowNewsCnt02">現在のお店の状況</h2>\n\
            <time class="d_block t_center cl_fff fw_400 txtNowNewsCnt">' + results['updated'] + '現在　' + results['status'] + 'です！</time>\n\
            <ul class="d_flex j_center ali_center ulNowNewsCnt">\n\
            <li class="d_flex j_start ali_center liNowNewsCnt">\n\
            <h3 class="cl_fff fw_600 h3liNowNewsCnt">カウンター：</h3>\n\
            <p class="cl_fff fw_400 txtliNowNewsCnt">' + counterText + '</p>\n\
            </li>\n\
            <li class="d_flex j_start ali_center liNowNewsCnt">\n\
            <h3 class="cl_fff fw_600 h3liNowNewsCnt">2人テーブル：</h3>\n\
            <p class="cl_fff fw_400 txtliNowNewsCnt">' + table2Text + '</p>\n\
            </li>\n\
            <li class="d_flex j_start ali_center liNowNewsCnt">\n\
            <h3 class="cl_fff fw_600 h3liNowNewsCnt">4人テーブル：</h3>\n\
            <p class="cl_fff fw_400 txtliNowNewsCnt">' + table4Text + '</p>\n\
            </li>\n\
            </ul>\n\
            ');
        });
    }

    setInterval(function () {
        setNowNews();
    }, 30000);

    function setNowNews() {
        setRestCnt();
    }
});

$(function () {

   $('#date').datepicker({
       beforeShowDay: function (date) {
		//定休日の中に､選ばれた日付が含まれているとき
		if (holiday.indexOf(formatDay(date)) !== -1) {
			return [false, "ui-state-disabled"];
		}else{
			return [true, ""];
		}
	}
    });
    $("#date").on("change", function () {
        console.log(holiday);
       //内容を取得
        let val = $(this).val();
        //整形
        let date = new Date(val);
        //定休日の中に､選ばれた日付が含まれているとき
        if(holiday.indexOf(formatDay(date)) !== -1){
            //アラート
            alert("その日は選択できません｡");
            //inputを空に
            $(this).val("");
        }
    });

    function formatDay(dt) {
        var m = ('0' + (dt.getMonth()+1)).slice(-2);
        var d = ('0' + dt.getDate()).slice(-2);
        return (m + d);
    }
});