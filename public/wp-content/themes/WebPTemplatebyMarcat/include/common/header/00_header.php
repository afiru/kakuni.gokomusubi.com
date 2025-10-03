<?php
if (is_home() or is_front_page()) {
    $homeurl = "";
} else {
    $homeurl = home_url('/');
}

?>
<header class="headerBase">
    <section class="bg_fff headerBaseLx">
        <h1 class="t_center kaisei fw_700 h1HeaderBasae">垂水で二次会でオススメのお店｜歌って踊れるお店角煮</h1>
        <div class="d_flex j_between ali_center headerBaseFx">
            <a class="logoHeaderBase" href="<?php echo home_url('/'); ?>">
                <img loading="lazy" src="img/logoHeaderBase.png" alt="垂水で二次会でオススメのお店｜歌って踊れるお店角煮 ロゴ画像" width="250" height="36">
            </a>

            <div class="menuHeaderPc jsmenuHeaderPc off">
                <img class="off" src="img/btnMenuHeaderOff.svg" alt="" width="40" height="36">
                <img class="on" src="img/btnMenuHeaderOn.svg" alt="" width="40" height="36">
            </div>
        </div>
    </section>
    <nav class="bg_C39A86 navHeaderBase">
        <ul class="ulNavHeaderBase">
            <li class="liNavHeaderBase">
                <a class="d_flex j_between ali_center undernone btnNavHeaderBase" href="<?php echo $homeurl; ?>#scrolltop">
                    <section class="secNavHeaderBase">
                        <h2 class="cl_fff kaisei fw_500 h2NavHeaderBase">ホーム</h2>
                        <p class="cl_fff fw_500 rubyNavHeaderBase">HOME</p>
                    </section>
                    <figure class="iconNavHeaderBase">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.5289 6.52858C10.2373 6.23705 9.76417 6.23821 9.47397 6.53118C9.18585 6.82205 9.18678 7.29103 9.47605 7.58076L13.2392 11.3499C13.6291 11.7405 13.6289 12.3732 13.2386 12.7635L9.50212 16.5C9.22598 16.7761 9.22598 17.2239 9.50212 17.5C9.77827 17.7761 10.226 17.7761 10.5021 17.5L15.2949 12.7072C15.6855 12.3167 15.6854 11.6834 15.2948 11.2929L10.5289 6.52858Z" fill="white" />
                        </svg>
                    </figure>
                </a>
            </li>

            <li class="liNavHeaderBase">
                <a class="d_flex j_between ali_center undernone btnNavHeaderBase" href="<?php echo $homeurl; ?>#about">
                    <section class="secNavHeaderBase">
                        <h2 class="cl_fff kaisei fw_500 h2NavHeaderBase">お店について</h2>
                        <p class="cl_fff fw_500 rubyNavHeaderBase">About</p>
                    </section>
                    <figure class="iconNavHeaderBase">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.5289 6.52858C10.2373 6.23705 9.76417 6.23821 9.47397 6.53118C9.18585 6.82205 9.18678 7.29103 9.47605 7.58076L13.2392 11.3499C13.6291 11.7405 13.6289 12.3732 13.2386 12.7635L9.50212 16.5C9.22598 16.7761 9.22598 17.2239 9.50212 17.5C9.77827 17.7761 10.226 17.7761 10.5021 17.5L15.2949 12.7072C15.6855 12.3167 15.6854 11.6834 15.2948 11.2929L10.5289 6.52858Z" fill="white" />
                        </svg>
                    </figure>
                </a>
            </li>

            <li class="liNavHeaderBase">
                <a class="d_flex j_between ali_center undernone btnNavHeaderBase" href="<?php echo $homeurl; ?>#event">
                    <section class="secNavHeaderBase">
                        <h2 class="cl_fff kaisei fw_500 h2NavHeaderBase">イベント</h2>
                        <p class="cl_fff fw_500 rubyNavHeaderBase">Event</p>
                    </section>
                    <figure class="iconNavHeaderBase">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.5289 6.52858C10.2373 6.23705 9.76417 6.23821 9.47397 6.53118C9.18585 6.82205 9.18678 7.29103 9.47605 7.58076L13.2392 11.3499C13.6291 11.7405 13.6289 12.3732 13.2386 12.7635L9.50212 16.5C9.22598 16.7761 9.22598 17.2239 9.50212 17.5C9.77827 17.7761 10.226 17.7761 10.5021 17.5L15.2949 12.7072C15.6855 12.3167 15.6854 11.6834 15.2948 11.2929L10.5289 6.52858Z" fill="white" />
                        </svg>
                    </figure>
                </a>
            </li>

            <li class="liNavHeaderBase">
                <a class="d_flex j_between ali_center undernone btnNavHeaderBase" href="<?php echo $homeurl; ?>#price">
                    <section class="secNavHeaderBase">
                        <h2 class="cl_fff kaisei fw_500 h2NavHeaderBase">料金システム</h2>
                        <p class="cl_fff fw_500 rubyNavHeaderBase">Price</p>
                    </section>
                    <figure class="iconNavHeaderBase">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.5289 6.52858C10.2373 6.23705 9.76417 6.23821 9.47397 6.53118C9.18585 6.82205 9.18678 7.29103 9.47605 7.58076L13.2392 11.3499C13.6291 11.7405 13.6289 12.3732 13.2386 12.7635L9.50212 16.5C9.22598 16.7761 9.22598 17.2239 9.50212 17.5C9.77827 17.7761 10.226 17.7761 10.5021 17.5L15.2949 12.7072C15.6855 12.3167 15.6854 11.6834 15.2948 11.2929L10.5289 6.52858Z" fill="white" />
                        </svg>
                    </figure>
                </a>
            </li>

            <li class="liNavHeaderBase">
                <a class="d_flex j_between ali_center undernone btnNavHeaderBase" href="<?php echo $homeurl; ?>#access">
                    <section class="secNavHeaderBase">
                        <h2 class="cl_fff kaisei fw_500 h2NavHeaderBase">アクセス</h2>
                        <p class="cl_fff fw_500 rubyNavHeaderBase">Access</p>
                    </section>
                    <figure class="iconNavHeaderBase">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.5289 6.52858C10.2373 6.23705 9.76417 6.23821 9.47397 6.53118C9.18585 6.82205 9.18678 7.29103 9.47605 7.58076L13.2392 11.3499C13.6291 11.7405 13.6289 12.3732 13.2386 12.7635L9.50212 16.5C9.22598 16.7761 9.22598 17.2239 9.50212 17.5C9.77827 17.7761 10.226 17.7761 10.5021 17.5L15.2949 12.7072C15.6855 12.3167 15.6854 11.6834 15.2948 11.2929L10.5289 6.52858Z" fill="white" />
                        </svg>
                    </figure>
                </a>
            </li>
        </ul>


        <section class="secBtmNavHeader">
            <h2 class="kaisei cl_fff h2BtmNavHeader">Yusei Magic</h2>
            <ul class="addressBtmNavHeader">
                <li class="d_flex j_between liAddressBtmNavHeader">
                    <h3 class="cl_fff fw_500 maru h3LiAddressBtmNavHeader">住所</h3>
                    <div class="cl_fff fw_500 maru dottoLiAddressBtmNavHeader">：</div>
                    <p class="cl_fff fw_500 maru txtLiAddressBtmNavHeader">垂水区平磯4−4-14みふねビル1階</p>
                </li>
                <li class="d_flex j_between liAddressBtmNavHeader">
                    <h3 class="cl_fff fw_500 maru h3LiAddressBtmNavHeader">営業時間</h3>
                    <div class="cl_fff fw_500 maru dottoLiAddressBtmNavHeader">：</div>
                    <p class="cl_fff fw_500 maru txtLiAddressBtmNavHeader">
                        金/土　19〜翌3時<br>火/水/木　19〜翌1時
                    </p>
                </li>
            </ul>

            <div class="mapAddressBtmNavHeader">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.026446088867!2d135.05274647574132!3d34.62877197294538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600083bd4ddc1f13%3A0xc432e2266cbe1fcc!2z44CSNjU1LTA4OTIg5YW15bqr55yM56We5oi45biC5Z6C5rC05Yy65bmz56Ov77yU5LiB55uu77yU4oiS77yR77yUIDHpmo4!5e0!3m2!1sja!2sjp!4v1759401053695!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="btnAddressBtmNavHeadeLxn">
                <a class="d_flex j_center ali_center bg_241A08 cl_fff fw_700 kaisei btnAddressBtmNavHeade" href="" target="_blank">
                    <span class="iconBtnAddressBtmNavHeade">行き方を見る</span>
                </a>
            </div>
        </section>
    </nav>
</header>