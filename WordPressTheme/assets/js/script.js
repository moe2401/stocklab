"use strict";

jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる
  jQuery(function ($) {
    var scrollableElement = $('.js-confirm__box'); // スクロール可能な要素
    var checkbox = $('.contact-confirm__agree input[type="checkbox"]'); // チェックボックス

    // チェックボックスを無効にする
    checkbox.attr('disabled', true);

    // スクロール時の処理
    scrollableElement.on('scroll', function () {
      var scrollTop = $(this).scrollTop();
      var scrollHeight = $(this)[0].scrollHeight;
      var clientHeight = $(this).innerHeight();

      // スクロールが下まで達したか判定
      console.log(scrollTop + clientHeight);
      console.log(scrollHeight);
      if (scrollTop + clientHeight >= scrollHeight * 0.9) {
        checkbox.attr('disabled', false); // チェックボックスを有効にする
      }
    });
  });

  // ----------------モーダル-------------------------
  // モーダルを開くためのリンク
  var openButton = document.querySelector('.contact-confirm__link'); // 確認画面へリンク
  var modal = document.querySelector('.js-modal'); // モーダルのクラス名

  // 必須項目のチェック
  $('[aria-required="true"]').on('input', function () {
    var form = $(this).closest('form'); // フォームを取得
    var isValid = true;
    $('[aria-required="true"]').each(function () {
      if (!$(this).val()) {
        isValid = false; // 入力がない場合は無効
        $(this).addClass('error'); // エラークラスを追加
      } else {
        $(this).removeClass('error'); // 入力があればエラークラスを削除
      }
    });

    if (isValid) {
      openButton.disabled = false;
    } else {
      // Contact Form 7のバリデーションメッセージを表示
      form.find('.wpcf7-form-control.wpcf7-not-valid').first().focus(); // 最初のエラー項目にフォーカス
      openButton.disabled = true;
    }
  });

  // リンクをクリックしたときの処理
  openButton.addEventListener('click', function (event) {
    event.preventDefault(); // デフォルトのリンク動作を防ぐ

    // フォームのバリデーションを実行
    var form = $(this).closest('form'); // フォームを取得
    var isValid = true; // バリデーションの結果を格納する変数

    // バリデーションが成功した場合のみモーダルを表示
    if (isValid) {
      modal.style.display = 'block'; // モーダルを表示
    } else {
      // Contact Form 7のバリデーションメッセージを表示
      form.find('.wpcf7-form-control.wpcf7-not-valid').first().focus(); // 最初のエラー項目にフォーカス
    }
  });

  // モーダルの外側をクリックしたときにモーダルを非表示
  window.addEventListener('click', function (event) {
    if (event.target === modal) {
      modal.style.display = 'none'; // モーダルを非表示
    }
  });
});