<?php get_header(); ?>
<div class="contact">
  <div class="contact__inner inner">
    <p class="contact__text">求人のご応募はこちらのフォームからご連絡をお願いします。<br class="u-mobile">お申し込み内容の確認後に、担当より改めてご連絡させていただきます。</p>
    <div class="contact__attention">
      <h2 class="contact__attention-title">入力に関してのご注意</h2>
      <p class="contact__attention-text">
        カタカナは全て全角で入力してください。</br>
        電話番号欄には、必ず連絡の取れる電話番号（自宅もしくは携帯電話）をご入力ください。</br>
        入力が終わりましたら、フォーム下の「内容確認」をクリックしてください。</br>
        内容確認画面が開きますので、入力内容を確認後「送信」をクリックして完了です。</br>
        自動返信メールを送信しております。自動返信メールが届いてない場合、「迷惑メールに分類されてしまっている」「受信許可ドメインに（）が含まれていない」「記入いただいたメールアドレスが間違っている」などの原因が考えられます。</br>
        内容により返信できない場合や、返答までに日数を要する場合がありますので、あらかじめご了承ください。
      </p>
    </div>
    <div class="contact__content form">
      <?php echo do_shortcode('[contact-form-7 id="1eb8404" title="お問い合わせ"]'); ?>
    </div>
  </div>


</div>



<?php get_footer(); ?>