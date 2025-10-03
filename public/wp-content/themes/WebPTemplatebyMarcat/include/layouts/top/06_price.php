<div id="price" class="price">
    <!--
    bg:../img/price.jpg
    -->
    <div class="priceLxn">
        <div class="d_flex j_between priceCnt">
            <div class="order_2 d_flex j_between mainTitlePriceFx">
                <h2 class="order_2 h2PriceTitle">
                    <img loading="lazy" src="<?php echo get_bloginfo('template_url'); ?>/img/h2PriceCnt.svg" alt="料金システム" width="38.29" height="196.64">
                </h2>
                <p class="order_1 cl_fff fw_500 kaisei txtPriceTitle">
                    ※価格はすべて税込みです。<br>※ラインナップが変わります。
                </p>
            </div>
            <div class=" order_1 mainPriceLxn">
                <section class="systemPrice">
                    <h3 class="cl_fff fw_700 kaisei h3MainPrice">基本システム</h3>
                    <ul class="ulPriceCnt">
                        <?php foreach (scf::get('baseSystem') as $fields): ?>
                        <li class="d_flex j_between cl_fff maru liPriceCnt">
                            <h4 class="h4PriceCnt"><?php echo $fields['thBaseSystem']; ?></h4>
                            <span class="dottoPriceCnt">：</span>
                            <p class="txtPriceCnt"><?php echo $fields['tdBaseSystem']; ?></p>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </section>

                <section class="systemPrice systemPrice02">
                    <h3 class="cl_fff fw_700 kaisei h3MainPrice">その他アルコール</h3>
                    <ul class="ulPriceCnt">
                        <?php foreach (scf::get('alcoholMenu') as $fields): ?>
                        <li class="d_flex j_between cl_fff maru liPriceCnt">
                            <h4 class="h4PriceCnt"><?php echo $fields['thAlcoholMenu']; ?></h4>
                            <span class="dottoPriceCnt">：</span>
                            <p class="txtPriceCnt"><?php echo $fields['tdAlcoholMenu']; ?></p>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </section>

                <section class="systemPrice systemPrice02">
                    <h3 class="cl_fff fw_700 kaisei h3MainPrice">その他フード</h3>
                    <ul class="ulPriceCnt">
                        <?php foreach (scf::get('foodMenu') as $fields): ?>
                        <li class="d_flex j_between cl_fff maru liPriceCnt">
                            <h4 class="h4PriceCnt"><?php echo $fields['thFoodMenu']; ?></h4>
                            <span class="dottoPriceCnt">：</span>
                            <p class="txtPriceCnt"><?php echo $fields['tdFoodMenu']; ?></p>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </section>
            </div>
        </div>
    </div>
</div>