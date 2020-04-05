@extends('layouts.main-common')
@section('content')
<main>
  <div class="wrap grid">
    <section class="profile">
      <figure class="wrap_img" style="background-image: url({{ asset('img/shimizu.jpg') }})"></figure>
      <div class="detail">
        <h1 class="name">清水 康志 / Yasushi SHIMIZU</h1>
        <div class="job">Artist / Engineer / WebDesigner</div>
        <div class="career">
          ProgrammingLang => Arduino / C# - Unity / CSS - SASS(SCSS) / HTML - Pug / JavaScript - jQuery / PHP - Laravel, Selenium, WordPress / Processing / Python - OpenCV<br>
          Software => Abobe - AfterEffect, Illustrator, Photoshop, PremierePro, XD
        </div>
      </div>
    </section>
    @if (isset($works))
    @foreach($works as $work)
    <div id="{{ $work->slug }}" class="work">
      <a class="link-work" data-slug="{{ $work->slug }}"><figure class="wrap_img" style="background-image: url({{ asset('storage/img') }}/{{ $work->img }})"></figure></a>
      <div class="detail">
        <div class="date">{{ $work->period }}</div>
        <h2 class="title"><a data-slug="{{ $work->slug }}" class="link-work">{{ $work->name }}</a></h2>
        <div class="cat">{{ $work->cat }}</div>
        <p class="desc">{{ $work->description }}</p>
      </div>
    </div>
    @endforeach
    @endif
  </div>
</main>
<div class="modal" id="modal">
  <div class="cross"><img src="{{ asset('img/cross.svg') }}"></div>
  <div class="wrap_modal">
    <div class="wrap_video"></div>
    <dl class="wrap_detail">
      <dt>Name: </dt><dd class="title"></dd>
      <dt>Period: </dt><dd class="date"></dd>
      <dt>Category: </dt><dd class="cat"></dd>
      <dt>Description: </dt><dd class="description"></dd>
      <dt>Technology: </dt><dd class="technique"></dd>
    </dl>
  </div>
  <div class="pp-modal">
    <h2>プライバシーポリシー</h2>
    <p>清水康志（以下「私」といいます）は、以下のとおり個人情報保護方針を定め、個人情報保護の仕組みを構築し、全従業員に個人情報保護の重要性の認識と取組みを徹底させることにより、個人情報の保護を推進致します。</p>
    <h3>個人情報の管理</h3>
    <p>私は、お客さまの個人情報を正確かつ最新の状態に保ち、個人情報への不正アクセス・紛失・破損・改ざん・漏洩などを防止するため、セキュリティシステムの維持・管理体制の整備・社員教育の徹底等の必要な措置を講じ、安全対策を実施し個人情報の厳重な管理を行ないます。<p>
    <h3>個人情報の利用目的</h3>
    <p>お客さまからお預かりした個人情報は、私からのご連絡や業務のご案内やご質問に対する回答として、電子メールや資料のご送付に利用いたします。</p>
    <h3>個人情報の第三者への開示・提供の禁止</h3>
    <p>私は、お客さまよりお預かりした個人情報を適切に管理し、次のいずれかに該当する場合を除き、個人情報を第三者に開示いたしません。</p>
    <ul>
      <li>お客さまの同意がある場合</li>
      <li>お客さまが希望されるサービスを行なうために私が業務を委託する業者に対して開示する場合</li>
      <li>法令に基づき開示することが必要である場合</li>
    </ul>
    <h3>個人情報の安全対策</h3>
    <p>私は、個人情報の正確性及び安全性確保のために、セキュリティに万全の対策を講じています。</p>
    <h3>ご本人の照会</h3>
    <p>お客さまがご本人の個人情報の照会・修正・削除などをご希望される場合には、ご本人であることを確認の上、対応させていただきます。</p>
    <h3>法令、規範の遵守と見直し</h3>
    <p>私は、保有する個人情報に関して適用される日本の法令、その他規範を遵守するとともに、本ポリシーの内容を適宜見直し、その改善に努めます。</p>
  </div>
</div>
@endsection
