<ul class="formCnt">
    <li class="d_flex j_between liFormCnt">
        <h3 class="cl_000 fw_600 h3liFormCnt">お名前</h3>
        <div class="formInputCnt">
            [mwform_text name="お名前" class="inputW100" id="name" size="50" required="true"]
        </div>
    </li>

    <li class="d_flex j_between liFormCnt">
        <h3 class="cl_000 fw_600 h3liFormCnt">ふりがな</h3>
        <div class="formInputCnt">
            [mwform_text name="ふりがな" class="inputW100" id="furigana" size="50" required="true"]
        </div>
    </li>

    <li class="d_flex j_between liFormCnt">
        <h3 class="cl_000 fw_600 h3liFormCnt">電話番号</h3>
        <div class="formInputCnt">
            [mwform_text name="電話番号" class="inputW100" id="tel" size="20" required="true"]
        </div>
    </li>

    <li class="d_flex j_between liFormCnt">
        <h3 class="cl_000 fw_600 h3liFormCnt">ラインID</h3>
        <div class="formInputCnt">
            [mwform_text name="ラインID" class="inputW100" id="line_id" size="30" required="true"]
        </div>
    </li>

    <li class="d_flex j_between liFormCnt">
        <h3 class="cl_000 fw_600 h3liFormCnt">メールアドレス</h3>
        <div class="formInputCnt">
            [mwform_email name="メールアドレス" id="mail" class="inputW100" size="60"]
        </div>
    </li>

    <li class="d_flex j_between liFormCnt">
        <h3 class="cl_000 fw_600 h3liFormCnt">予約日</h3>
        <div class="formInputCnt">
            [mwform_text name="予約日" class="inputW100" id="date" required="true"]
        </div>
    </li>

    <li class="d_flex j_between liFormCnt">
        <h3 class="cl_000 fw_600 h3liFormCnt">予約時間</h3>
        <div class="formInputCnt">
            [mwform_select name="予約時間" id="bookingtime" class="selectW100" children="20::00～,21::00～,22::00～,23::00～,24::00～,25::00～,26::00～"]
        </div>
    </li>

    <li class="d_flex j_between liFormCnt">
        <h3 class="cl_000 fw_600 h3liFormCnt">予約人数</h3>
        <div class="formInputCnt">
            [mwform_number name="予約人数" class="inputW100" id="people" min="1" max="20" required="true"]
        </div>
    </li>

    <li class="d_flex j_between row liFormCnt">
        <h3 class="cl_000 fw_600 h3liFormCnt">備考</h3>
        <div class="formInputCnt formInputCnt100">
            [mwform_textarea class="txtw100" name="備考" id="note"]
        </div>
    </li>
</ul>
[mwform_hidden name="hp_check" id="hp_check"]
<div class="btnToConfirmLxn">[mwform_bconfirm class="btnToConfirm" value="confirm"]入力内容を確認する[/mwform_bconfirm]</div>
<div class="toThankBackLxn">
    <ul class="d_flex j_between ali_center row toThankBackFx">
        <li class="btnBackLxn">[mwform_bback class="d_flex j_center ali_center fw_500 bg_2F99F0 cl_fff btnBack" value="back"]入力画面にもどる[/mwform_bback]</li>
        <li class="btnToThanksLxn">[mwform_bsubmit name="送信する" class="d_flex j_center ali_center fw_500 bg_FDE351 cl_fff btnToThanks" value="send"]内容を確認して送信[/mwform_bsubmit]</li>
    </ul>
</div>