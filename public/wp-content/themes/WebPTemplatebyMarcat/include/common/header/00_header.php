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
                <img loading="lazy" src="<?php echo get_bloginfo('template_url'); ?>/img/logoHeaderBase.png" alt="垂水で二次会でオススメのお店｜歌って踊れるお店角煮 ロゴ画像" width="250" height="36">
            </a>
            <div class="menuHeaderPc jsmenuHeaderPc off">
                <div class="menuHeaderPcIn">
                    <span class="brdmenuHeaderPc brdmenuHeaderPc01"></span>
                    <span class="brdmenuHeaderPc brdmenuHeaderPc02"></span>
                    <span class="brdmenuHeaderPc brdmenuHeaderPc03"></span>
                </div>
                <span class="kaisei txtMenuHeader">MENU</span>
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
                <a class="d_flex j_between ali_center undernone btnNavHeaderBase" href="<?php echo $homeurl; ?>#booking">
                    <section class="secNavHeaderBase">
                        <h2 class="cl_fff kaisei fw_500 h2NavHeaderBase">ご予約</h2>
                        <p class="cl_fff fw_500 rubyNavHeaderBase">booking</p>
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
            <h2 class="kaisei cl_fff h2BtmNavHeader">歌って踊れるお店　角煮</h2>
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
                <a class="d_flex j_center ali_center bg_241A08 cl_fff fw_700 kaisei btnAddressBtmNavHeade" href="https://www.google.com/maps/dir/?api=1&destination=34.628725,135.0552711&z=10" target="_blank">
                    <span class="iconBtnAddressBtmNavHeade">行き方を見る</span>
                </a>
            </div>
        </section>

        <section class="secBtmNavHeader secBtmNavHeader02">
            <h2 class="kaisei cl_fff h2BtmNavHeader">最新の情報はインスタ・スレッズをチェック！</h2>
            <ul class="snSNavHeader">
                <li class="liSnSNavHeader">
                    <a class="undernone d_block btnSnSNavHeader" href="https://www.instagram.com/uta_odori_bar_kakuni/" target="_blank">
                        <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.35 42L34.65 42C38.7093 42 42 38.7093 42 34.65L42 7.35C42 3.29071 38.7093 0 34.65 0L7.35 0C3.29071 0 0 3.29071 0 7.35L0 34.65C0 38.7093 3.29071 42 7.35 42Z" fill="url(#paint0_radial_1266_1957)" />
                            <path d="M28.875 36.75H13.125C11.0364 36.75 9.03338 35.9203 7.55653 34.4435C6.07969 32.9666 5.25 30.9636 5.25 28.875V13.125C5.25 11.0364 6.07969 9.03338 7.55653 7.55653C9.03338 6.07969 11.0364 5.25 13.125 5.25H28.875C30.9636 5.25 32.9666 6.07969 34.4435 7.55653C35.9203 9.03338 36.75 11.0364 36.75 13.125V28.875C36.75 30.9636 35.9203 32.9666 34.4435 34.4435C32.9666 35.9203 30.9636 36.75 28.875 36.75ZM13.125 8.4C11.8724 8.40174 10.6716 8.9001 9.78584 9.78584C8.9001 10.6716 8.40174 11.8724 8.4 13.125V28.875C8.40174 30.1276 8.9001 31.3284 9.78584 32.2142C10.6716 33.0999 11.8724 33.5983 13.125 33.6H28.875C30.1276 33.5983 31.3284 33.0999 32.2142 32.2142C33.0999 31.3284 33.5983 30.1276 33.6 28.875V13.125C33.5983 11.8724 33.0999 10.6716 32.2142 9.78584C31.3284 8.9001 30.1276 8.40174 28.875 8.4H13.125Z" fill="white" />
                            <path d="M21.0012 29.9252C19.236 29.9252 17.5104 29.4018 16.0427 28.4211C14.575 27.4404 13.4311 26.0465 12.7556 24.4157C12.08 22.7848 11.9033 20.9903 12.2477 19.259C12.592 17.5277 13.4421 15.9375 14.6902 14.6893C15.9384 13.4411 17.5287 12.5911 19.26 12.2467C20.9913 11.9023 22.7858 12.0791 24.4166 12.7546C26.0475 13.4301 27.4414 14.574 28.422 16.0417C29.4027 17.5094 29.9262 19.235 29.9262 21.0002C29.9244 23.3667 28.9836 25.6358 27.3102 27.3092C25.6368 28.9826 23.3677 29.9235 21.0012 29.9252ZM21.0012 15.2252C19.859 15.2252 18.7425 15.5639 17.7928 16.1985C16.8431 16.833 16.1029 17.735 15.6658 18.7902C15.2287 19.8454 15.1143 21.0066 15.3371 22.1268C15.56 23.2471 16.11 24.2761 16.9176 25.0837C17.7253 25.8914 18.7543 26.4414 19.8745 26.6642C20.9948 26.8871 22.1559 26.7727 23.2112 26.3356C24.2664 25.8985 25.1683 25.1583 25.8029 24.2086C26.4375 23.2589 26.7762 22.1424 26.7762 21.0002C26.7744 19.4691 26.1654 18.0012 25.0828 16.9186C24.0002 15.8359 22.5323 15.2269 21.0012 15.2252Z" fill="white" />
                            <path d="M29.9266 14.1749C30.7964 14.1749 31.5016 13.4698 31.5016 12.5999C31.5016 11.7301 30.7964 11.0249 29.9266 11.0249C29.0567 11.0249 28.3516 11.7301 28.3516 12.5999C28.3516 13.4698 29.0567 14.1749 29.9266 14.1749Z" fill="white" />
                            <defs>
                                <radialGradient id="paint0_radial_1266_1957" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(-0.84492 41.1469) rotate(180) scale(96.9905)">
                                    <stop offset="1" stop-color="#D43377" />
                                </radialGradient>
                            </defs>
                        </svg>
                    </a>
                </li>

                <li class="liSnSNavHeader">
                    <a class="undernone d_block btnSnSNavHeader" href="https://www.threads.com/@uta_odori_bar_kakuni?hl=ja" target="_blank">
                        <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M37.1037 42H4.89679C2.19227 42 0 39.8078 0 37.1033V4.89673C0 2.19224 2.19227 0 4.89679 0H37.1032C39.8077 0 42 2.19224 42 4.89673V37.1028C42.0005 39.8078 39.8082 42 37.1037 42Z" fill="black" />
                            <g clip-path="url(#clip0_1266_1969)">
                                <path d="M28.5924 19.9455C28.4669 19.8856 28.3402 19.8282 28.2123 19.7735C27.9886 15.6669 25.736 13.3158 21.9536 13.2917C19.7713 13.2773 17.8179 14.1637 16.6003 16.0041L18.6805 17.4256C19.5456 16.1181 20.9034 15.8393 21.9033 15.8393C21.9149 15.8393 21.9264 15.8393 21.9379 15.8394C23.1833 15.8474 24.123 16.2081 24.7313 16.9114C25.1739 17.4236 25.47 18.1313 25.6166 19.0244C24.5124 18.8375 23.3182 18.78 22.0416 18.8529C18.4455 19.0593 16.1337 21.1486 16.289 24.0517C16.3678 25.5243 17.1042 26.7913 18.3626 27.6188C19.4265 28.3184 20.7968 28.6605 22.2209 28.5831C24.1016 28.4804 25.577 27.7656 26.6063 26.4585C27.3881 25.466 27.8825 24.1797 28.1008 22.559C28.9971 23.0978 29.6614 23.8069 30.0282 24.6592C30.6519 26.1083 30.6883 28.4894 28.738 30.4307C27.0292 32.1313 24.9751 32.867 21.8709 32.8897C18.4274 32.8643 15.8231 31.7642 14.1299 29.6199C12.5443 27.6121 11.7249 24.7119 11.6943 21C11.7249 17.288 12.5443 14.3878 14.1299 12.38C15.8231 10.2357 18.4273 9.13569 21.8708 9.11023C25.3392 9.13592 27.9889 10.2413 29.7469 12.3959C30.609 13.4524 31.2588 14.7812 31.6873 16.3304L34.125 15.6825C33.6057 13.7756 32.7885 12.1323 31.6764 10.7696C29.4226 8.00729 26.1264 6.5918 21.8793 6.5625H21.8623C17.6238 6.59175 14.3645 8.01255 12.1748 10.7854C10.2264 13.2529 9.22139 16.6861 9.18761 20.9898L9.1875 21L9.18761 21.0102C9.22139 25.3138 10.2264 28.7472 12.1748 31.2147C14.3645 33.9874 17.6238 35.4083 21.8623 35.4375H21.8793C25.6475 35.4114 28.3037 34.4287 30.4918 32.2508C33.3545 29.4017 33.2684 25.8304 32.3249 23.638C31.6479 22.0658 30.3573 20.7889 28.5924 19.9455ZM22.0863 26.0391C20.5102 26.1276 18.8728 25.4228 18.792 23.9134C18.7322 22.7942 19.5916 21.5453 22.183 21.3966C22.474 21.3797 22.7655 21.3712 23.0571 21.3712C23.9984 21.3712 24.8789 21.4622 25.6795 21.6366C25.3809 25.3515 23.6294 25.9548 22.0863 26.0391Z" fill="white" />
                            </g>
                            <defs>
                                <clipPath id="clip0_1266_1969">
                                    <rect width="24.9375" height="28.875" fill="white" transform="translate(9.1875 6.5625)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                </li>
            </ul>
        </section>
    </nav>
</header>