<?php if ( date('Y-m-d') >= '2019-04-09') { ?>
<?php } else { ?>
<style media="screen">
  .stretch {
    background-color: #1d4db1;
    border-bottom-left-radius: 4px;
    border-bottom-right-radius: 4px;
    box-shadow: inset 0 -1px 0 #15316b;
  }

  .stretch_wrap {
    max-width: 1200px;
    margin: 0 auto;
    padding: 15px 0;
  }

  .stretch_wrap p {
    display: inline;
    margin: 0;
    padding: 0;
    border-bottom: 1px solid transparent;
    transition: all .2s ease;
    line-height: 24px;
  }

  .stretch_content {
    display: -webkit-flex;
    display: -moz-flex;
    display: -ms-flex;
    display: -o-flex;
    display: flex;
    -ms-align-items: center;
    align-items: center;
    align-content: center;
    justify-content: space-between;
    color: #fff;
    text-decoration: none;
    line-height: 1;
    font-size: 18px;
    transition: all .2s ease;
  }

  .stretch_logo {
    margin-right: 15px;
  }

  .stretch_logo img {
    vertical-align: bottom;
  }

  .stretch_message {
    margin-left: 25px;
    margin-right: 25px;
    flex: 1;
  }

  .stretch_content:hover {
    color: #ffffff;
  }

  .stretch_content:hover p {
    border-bottom-color: rgba(255, 255, 255, .35);
  }

  .stretch_content:hover .stretch-btn {
    background-color: #fff;
    color: #1d4db1;
  }

  .stretch-btn {
    border: 2px solid #fff;
    border-radius: 6px;
    padding: 16px 25px 13px 25px;
    line-height: 1;
    font-size: 14px;
    display: block;
    text-transform: uppercase;
    font-weight: bold;
    transition: all .2s ease;
  }

  @media only screen and (max-width: 575px) {

    .stretch {
      border-bottom-left-radius: 5px;
      border-bottom-right-radius: 5px;
    }

    .stretch_wrap {
      width: 100%;
      padding: 10px 20px 15px 20px;
    }

    .stretch_content {
      -webkit-flex-direction: column;
      -moz-flex-direction: column;
      -ms-flex-direction: column;
      -o-flex-direction: column;
      flex-direction: column;
      -ms-align-items: flex-start;
      align-items: flex-start;
      align-content: flex-start;

      font-size: 14px;
      line-height: 1.42857143;
    }

    .stretch-btn {
      font-size: 13px;
      padding: 11px 15px 8px 15px;
      font-weight: normal;
      border-width: 1px;
      text-transform: none;
      border-radius: 4px;

      background-color: #fff;
      color: #000;
      min-width: 200px;
      text-align: center;
      display: -webkit-flex;
      display: -moz-flex;
      display: -ms-flex;
      display: -o-flex;
      display: flex;
      -ms-align-items: center;
      align-items: center;
      align-content: center;
      justify-content: center;
    }

    .stretch_action {
      align-self: center;
    }

    .stretch_logo {
      margin-bottom: 10px;
      align-self: center;
    }

    .stretch_message {
      margin-right: 0;
      margin-left: 0;
      margin-bottom: 10px;
    }

    .stretch_message p {
      line-height: 1.42857143;
    }
  }
</style>

<!-- begin .stretch -->
<div class="stretch">
  <!-- begin .stretch_wrap -->
  <div class="stretch_wrap">
    <!-- begin .stretch_content -->
    <a class="stretch_content" href="https://potokconf.ru/?utm_source=alfa-content&utm_medium=banner&utm_campaign=open" target="_blank">

      <!-- begin .stretch_logo -->
      <div class="stretch_logo">
        <img src="/assets/images/logopotok.png" alt="Получить билет на ПОТОК — крупнейшее мероприятие про инновации, маркетинг и бизнес" width="148" height="22">
      </div>
      <!-- end .stretch_logo -->

      <!-- begin .stretch_message -->
      <div class="stretch_message">
        <p>Получите билет на&nbsp;ПОТОК&nbsp;&mdash; крупнейшее мероприятие про инновации, маркетинг и&nbsp;бизнес, уже 9&nbsp;и&nbsp;10&nbsp;апреля в&nbsp;Москве!</p>
      </div>
      <!-- end .stretch_message -->

      <!-- begin .stretch_action -->
      <div class="stretch_action">
        <span class="stretch-btn">Получить билет</span>
      </div>
      <!-- end .stretch_action -->

    </a>
    <!-- end .stretch_content -->
  </div>
  <!-- end .stretch_wrap -->
</div>
<!-- end .stretch -->
<?php } ?>
