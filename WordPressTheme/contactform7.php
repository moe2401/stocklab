<dl class="contact-form__wrap">
    <div class="contact-form__label-wrap">
        <dt class="contact-form__label">
            <div class="contact-form__label-info">面接形式<span>必須</span></div>
        </dt>
        <dd class="contact-form__radio">
            [radio radio-519 use_label_element default:1"通常面接" "カジュアル面談"]
        </dd>
    </div>
</dl>
<dl class="contact-form__wrap">
    <div class="contact-form__label-wrap">
        <dt class="contact-form__label">
            <div class="contact-form__label-info">お名前<span>必須</span></div>
        </dt>
        <dd class="contact-form__input">
            [text* name1]
        </dd>
    </div>
</dl>
<dl class="contact-form__wrap">
    <div class="contact-form__label-wrap">
        <dt class="contact-form__label">
            <div class="contact-form__label-info">ふりがな<span>必須</span></div>
        </dt>
        <dd class="contact-form__input">
            [text* name2]
        </dd>
    </div>
</dl>
<dl class="contact-form__wrap">
    <div class="contact-form__label-wrap">
        <dt class="contact-form__label">
            <div class="contact-form__label-info">メールアドレス<span>必須</span></div>
        </dt>
        <dd class="contact-form__input">
            [email* email-980]
        </dd>
    </div>
</dl>
<dl class="contact-form__wrap">
    <div class="contact-form__label-wrap">
        <dt class="contact-form__label">
            <div class="contact-form__label-info">お電話番号<span>必須</span></div>
        </dt>
        <dd class="contact-form__input">
            [tel* tel-514]
        </dd>
    </div>
</dl>
<dl class="contact-form__wrap">
    <div class="contact-form__label-wrap">
        <dt class="contact-form__label">
            <div class="contact-form__label-info">ご住所<span>必須</span></div>
        </dt>
        <dd class="contact-form__input contact-form__input--address">
            <div class="contact-form__yubin">
                <span class="p-country-name" style="display:none;">Japan</span>
                <span>&#12306;</span>
                [text* text-address class:contact-form__input-data class:p-postal-code maxlength:8 size:8 id:your-zip]
            </div>
            <div class="contact-form__address contact-form__input--address2">
                [text* text-address2 class:p-region class:p-locality class:p-street-address class:p-extended-address id:your-address]</div>
        </dd>
    </div>
</dl>
<dl class=" contact-form__wrap">
    <div class="contact-form__label-wrap">
        <dt class="contact-form__label">
            <div class="contact-form__label-info">年齢<span>必須</span></div>
        </dt>
        <dd class="contact-form__input">
            [text* text-age]
        </dd>
    </div>
</dl>
<dl class="contact-form__wrap">
    <div class="contact-form__label-wrap">
        <dt class="contact-form__label">
            <div class="contact-form__label-info">希望職種</div>
        </dt>
        <dd class="contact-form__radio">
            [radio radio-771 use_label_element default:1"業務アプリケーション上級プログラマー" "業務アプリケーション未経験プログラマー"]
        </dd>
    </div>
</dl>
<dl class="contact-form__wrap">
    <div class="contact-form__label-wrap">
        <dt class="contact-form__label">
            <div class="contact-form__label-info">資格・免許</div>
        </dt>
        <dd class="contact-form__input">
            [textarea textarea-license]
        </dd>
    </div>
</dl>
<dl class="contact-form__wrap">
    <div class="contact-form__label-wrap">
        <dt class="contact-form__label">
            <div class="contact-form__label-info">志望動機</div>
        </dt>
        <dd class="contact-form__input">
            [textarea textarea-reason]
        </dd>
    </div>
</dl>
<dl class="contact-form__wrap">
    <div class="contact-form__label-wrap">
        <dt class="contact-form__label">
            <div class="contact-form__label-info">就業状況</div>
        </dt>
        <dd class="contact-form__radio">
            [radio radio-430 use_label_element default:1"在職中" "無職"]
        </dd>
    </div>
</dl>
<dl class="contact-form__wrap">
    <div class="contact-form__label-wrap">
        <dt class="contact-form__label">
            <div class="contact-form__label-info">実務経験</div>
        </dt>
        <dd class="contact-form__input">
            [textarea textarea-experience]
        </dd>
    </div>
</dl>
<div class="contact-confirm contact-confirm__button-wrap">
    <button class="contact-confirm__link" disabled>確認画面へ</button>
</div>
<div class="contact-confirm modal js-modal">
    <div class="contact-confirm__inner inner">
        <div class="contact-confirm__wrap">
            <div class="contact-confirm__box js-confirm__box">
                <h2 class="contact-confirm__title">
                    個人情報の取扱いについて
                </h2>
                <p class="contact-confirm__text">
                    株式会社東横インIT集客ソリューション（以下「当社」といいます。）では、当社が印得し利用する個人情霰の取扱いについて下記のとおり規定します。
                </p>
                <div class="contact-confirm__form-wrap">
                    <div class="contact-confirm__form form-privacy">
                        <h3 class="form-privacy__title">1.利用目的</h3>
                        <p class="form-privacy__number">①当社が委託元からお預かりする個人情報</p>
                        <ul>
                            <li>ホテル宿泊予約システムサービス提供のため</li>
                            <li>ホテル宿泊予約システム管理のため</li>
                            <li>クレジットカード決済サービス提供のため</li>
                            <li>クレジットカード決済情報管理のため</li>
                            <li>サービスの利用状況調査、分析並びにマーケティングのため</li>
                        </ul>
                        <p class="form-privacy__number"> ②お取引先の個人情報</p>
                        <ul>
                            <li>商談、受発注集務及び契約履行のため</li>
                            <li>ホテル予杓システムの開発・運用のため</li>
                            <li>各種お問合わせ対応のたの</li>
                            <li>ホテル予約システムインフラ保守のため</li>
                            <li>ホテル予約システム改善のため</li>
                        </ul>
                        <p class="form-privacy__number"> ③株主の個人情報</p>
                        <ul>
                            <li>会社法、商法に基づく権利の行伎及び義務の履行のため</li>
                            <li>株主名簿作成のため</li>
                        </ul>

                        <p class="form-privacy__number"> ④採用応募の個人情報</p>
                        <ul>
                            <li>
                                採用、募集業務のため</li>
                            <li>採用選考結果通知のため</li>
                        </ul>

                        <p class="form-privacy__number"> ⑤従業員の個人情報</p>
                        <ul>
                            <li>人事、総務等の法律上要求される諸手続きに関わる雇用営理のため</li>
                            <li>給与、税務処理等、社会保険関連に関わる福利厚生提供のため</li>
                            <li>心身の健康維持管理のため</li>
                            <li>セキュリティ、安全管理装置のため</li>
                            <li>教育のため</li>
                        </ul>
                        <p class="form-privacy__number"> ⑥お問い合わせによる個人情報</p>
                        <ul>
                            <li> お問い合わせ内容の正確な把握のため</li>
                            <li> お問い合わせの対応、返答のため</li>
                        </ul>
                        <p class="form-privacy__number"> ⑦特定個人情報</p>
                        <ul>
                            <li> 社会保険、厚生年金保険、雇用保険、源泉徴収、支払調書等の法律上要求される諸手続きのため
                            </li>
                            <li> お問い合わせの対応、返答のため</li>
                        </ul>

                        <h3 class="form-privacy__title">2.保有個人データ</h3>
                        <p>当社が取り扱う保有個人データの利用目的は、前項②～②の個人情報御利用目的と差異はございません。</p>

                        <h3 class="form-privacy__title">3.保有個人データの取扱いに関する苦情の申出先</h3>
                        <p>後述11の♦個人情報お問合わせ窓口♦へご遷格ください。</p>

                        <h3 class="form-privacy__title"> 4.第三者提供</h3>
                        <p>当社は、次のいずれかに該当する場合を除いて、第三者へ開示・提供は致しません。尚、当社において個人情報を共同利用するために、グループ関連会社間での提供行為は、本項における第三者へ開示・提供には該当しないものとします。</p>
                        <p>①ご本人の同意がある場合</p>
                        <p>②ご本人を識別することが出来ないよう加工した情報を開示・提供する湯合</p>
                        <p>③法令等により提供を行う</p>
                        <p>④人命、身体又は財産保護のために必要であり、ご本人の同意を得る事が困難である場合</p>
                        <p>⑤公衆衛生の向上は児童の健全な育成権進のために必要であり、ご本人の同意を得ることが困難である場合</p>
                        <p>⑥国の機関若しくは地方公共団体又はその委託を受けた者が法令の定める事務を遂行することに対して協力する必要がある場合で、ご本人の同意を得る事により当該事務の遂行に支障を及ぼすおそれがある場合 </p>
                        <p>⑦合併、分社化、営業譲渡等、事業の継承に伴って提供する場合</p>

                        <h3 class="form-privacy__title">5.共同利用</h3>
                        <p>当社は．グループ関連会社間にて個人情報を共同利用することがあります。この場合には、あらかじめ利用目的等を通知または公表し、ご本人の同意を得ることと致します。
                        </p>

                        <h3 class="form-privacy__title">6.委託先への提供</h3>
                        <p>当社は、業務委託契約を締結した企業へ当社保有個人情報を提供することがあります。委託先の選定には当社の個人情報保護方針と同水準を満たしている企業とし、委託先への監督と必要かつ適切な安全管理装置を実施いたします。</p>

                        <h3 class="form-privacy__title">7.Cookie （クッキー）について</h3>
                        <p>当社は、お客様の利便性向上、サイト閲覧状況の統計的な把握、最遠なサイト表示を目的としてCookie （クッキー）を利用しています。Cookie とは、お客様がウェブサイトを訪問した際に、お客様のデバイスと当グループサーパーとの間で送受信したサイトの閲覧履歴、入力内容や統計的情報等を、お客様のデパイスに保存しておく仕組みで、この仕粗みはウェブ利用をさらに最適なものにする事ができます。ただし、このCookie により記録される情報は、お客様個人を特定するものではありません。</p>

                        <h3 class="form-privacy__title">8.Cookieの削除について</h3>
                        <p>お客様はご自身でCookieの設定を変更することで、Cookieの送受信を拒否することができます。設定方法はプラウザにより異なります。 Cookieに関する設定方法はご利用のブラウザのヘルプメニューなどからご確認ください。Cookieの受け取りを拒否した場合には、一部サイトのサーピスが利用できなくなる可能性があります。また、ブラウザの変更、Cookieの削除等を行った場合には、再度オプトアウト、オプトイン設定が必要になります。
                        </p>

                        <h3 class="form-privacy__title">9.安全管理措置</h3>
                        <p>当社で取得した個人データは不正アクセス、紛失、破棄、改さん、漏洩、滅失等の危険が無いよう、適切な安全措置のために、必要な安全対策を下記のとおり講じます。</p>
                        <ul>
                            <li>
                                <p>①組織的安全管理措置</p>
                                <p> 当社は、個人情報保護管理責任者及び管理者を設置し、個人データ取扱い従業者の取扱い範囲を明確化し、個人データに関する法令、国が定める指針、並びに当社規定個人情報保護方針に対する規則違反、背反行為、又は抵触する恐れがある場合、直ちに管理責任者へ報告・通達され、訓戒及び是正処置がとれる様、公平性の保たれた人材を個人情報監査責任者に置き、適宜内部監査を実施し、万全の体制を整備しています。</p>
                            </li>
                            <li>
                                <p>②人的安全管理措置</p>
                                <p> 当社は、個人データ取扱い従業者に関わらず、当社全従業者に対し、定期的に個人データ取扱いに関する教育、並びに外部主催の個人情報保護法に関する講習を研修の一環として実施しています。</p>
                            </li>
                            <li>
                                <p>③物理的安全管理措置</p>
                                <p> 当社は、執務室への入退室を管理し、外部の者に対し入室制限を実施しています。個人データ保有機器、電子・紙媒体・契約書面複写含め、執務室外への持ち出しを一切禁止し、遺失等の事故を未然に防ぐための措当を講じています。</p>
                            </li>
                            <li>
                                <p>④技術的安全管理措置</p>
                                <p> 当社は個人情報保護管理責任者より権限を与えられた従業者のみ、権限付与されたデータベースの範囲内において、個人データ取扱業務に従事し、当該従業員の専用ID及びパスワードが第三者へ漏洩流布しないよう徹底した管理を実施しています。個人データを取扱うことのできる機器等は毎日更新され、最新の状態で保持されており、当該機器を外部不正アクセスやマルウェア等から保護するための厳格な仕組みを導入及び高頻度の気弱性テストを実施し、個人データの漏洩などを未然に防止する措置を講じています。</p>
                            </li>
                            <li>
                                <p> ⑤外的環境の把握</p>
                                <p> 当社は、個人情報を保管している当該国における個人情報の保護に関する制度を把感した上で情報共有・周知のための情報セキュリティ委員会を毎月開催し、安全管理措置並びに継続的改善を実施しています。</p>
                            </li>
                        </ul>


                        <h3 class="form-privacy__title">10.開示等の求めに応じる手続</h3>
                        <ul>
                            <li>
                                <p> ①開示対象の個人情報について</p>
                                <p> 当社は、本人から求められる利用目的の通知、開示、内容の訂正、追加または削除、利用の停止、消去及び第三者提供の停止、第三者提供記録の開示、全てに応じます。</p>
                            </li>
                            <li>
                                <p> ②開示請求の申出先</p>
                                <p> 開示請求は、御述8の♦個人情報お問合せ窓口♦にお問合せの上、当社が保有するご自身の個人データの利用目的の通知、開示、内容の訂正、追加又は削除、利用の停止、消去及び第三者提供の停止、第三者提供記録の開示を求める場合には、当社所定の書面に必要事項をご記入の上、提出いただきます。</p>
                            </li>
                            <li>
                                <p> ③開示請求依頼</p>
                                <p>ご依碩に当たっては、本人確認をさせていただきます。その際、当社保有データをもとに、本人確認させていたださます。
                                </p>
                                <p>※代理人については、委任状を提出していただき確認を行います。なお、代理人を立てる場合には、ご本人と代理人両者の公的証明書のコピー提出が必要になります。また、電話やFAX、での開示などの請求を一切受け付けておりませんので、簡易書留郵便等の発送記録が取れる方法で請求をお願い致します。
                                </p>
                                <p> ※未成年名又は成年被後見人の法定代理人の場合は、法的な代理権を証明できる書類をご提出ください。</p>
                            </li>
                            <li>
                                <p> ④開示請求</p>
                                <p> 開示請求(『利用目的の通知』 『個人情報の開示』の請求)
                                    にあたり、手数料は2,200円（税込）を上限に徴収致します。これを超えることが明日な場合は別途、ご連絡致します。</p>
                            </li>
                        </ul>

                        <h3 class="form-privacy__title">11 .個人情報の取扱いに関するお問合せ、苦情及びご相談について</h3>
                        <p> 個人情報の取扱に関するお問合せ、苦情及びご相談につきましては、以下の当社♦個人情報お問合せ窓口◆もしくはお問合わせフォームよりご連絡ください。</p>

                        <div class="form-privacy__contact">
                            <p>♦個人情報お問合わせ窓口♦</p>
                            <p>株式会社東横インIT集客ソリューション</p>
                            <p>代表取締役 中崎拓真</p>
                            <p>個人情報保護管理責任者 取締役 武部 泰明</p>
                            <p>〒144-0054 東京都大</p>
                            <p>TEL: 03-5711-7400</p>
                        </div>
                    </div>

                    <div class="contact-confirm__info">
                        <p>◇認定個人情報保護団体の名称及び、苦情の解決の申出先◇
                        </p>
                        <p>一般社団法人日本情報システム・ユーザー協会(J UAS)</p>
                        <p>認定個人情報保護団体事務局 苦情相談室
                        </p>
                        <p>住所 東京都中央区日本橋堀留町2-4-3 日本堀留町2丁目ビル8階</p>
                        <p> 電話番号 03-3249-4104</p>
                        <p> 受付時間： 10:00~16:00 （土、日、祝日休み）</p>
                    </div>

                    <div class="contact-confirm__info">
                        <p>◇認定個人情報保護団体の名称及び苦情の解決の申出先◇
                        </p>
                        <p>一般社団法人日本情報経済社会推進協会</p>
                        <p>個人情報保護団体事務局 苦情相談室
                        </p>
                        <p>住所 〒106-0032東京都港区六本木1丁目9番9号六本木ファーストビル内</p>
                        <p> 電話番号： 03-5860-7565/0120-700-799</p>
                    </div>
                </div>
            </div>
            <div class="contact-confirm__checkbox">
                <p class="contact-confirm__checkbox-text">
                    お問い合わせに関する個人情報の取扱い・利用目的に同意する方は「同意します」にチェックしてください。
                </p>
                <label class="contact-confirm__checkbox-label js-checkbox-label">
                    <span class="contact-confirm__required">必須</span>
                    <span class="contact-confirm__agree">[acceptance acceptance-227 class:privacy-check] 個人情報の取り扱いについて同意する。 [/acceptance]</span>
                </label>
                <div class="contact-confirm__button">
                    <span class="button">
                        [submit class:submit-button "送信する"]
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajaxzip3.github.io/ajaxzip3.js"></script>
<script>
    jQuery(function($) {

        $('#your-zip').keyup(function() {
            AjaxZip3.zip2addr(this, '', 'text-address2', 'text-address2');
        });
    });
</script>