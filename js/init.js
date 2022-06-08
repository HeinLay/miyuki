//ローディングアニメーション
	window.onload = function() {
	const spinner = document.getElementById('loading');
	spinner.classList.add('loaded');
	}

//スクロールしたらヘッダーを非表示
	var _window = $(window),
	_header = $('header'),
	heroBottom,
	startPos,
	winScrollTop;

	_window.on('scroll',function(){
	winScrollTop = $(this).scrollTop();
	heroBottom = $('header').height();
	if (winScrollTop >= startPos) {
		if(winScrollTop >= heroBottom){
				_header.addClass('hide');
		}
	} else {
		_header.removeClass('hide');
	}
	startPos = winScrollTop;
	});

	_window.trigger('scroll');

//ページトップに戻るボタン
	jQuery(function() {
	var pagetop = $('#page_top');
	pagetop.hide();
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {  //100pxスクロールしたら表示
				pagetop.fadeIn();
		} else {
				pagetop.fadeOut();
		}
	});
	pagetop.click(function () {
		$('body,html').animate({
				scrollTop: 0
		}, 1000); //0.5秒かけてトップへ移動
		return false;
	});
	});

//アニメーションライブラリ
	AOS.init({
	easing: 'ease-in-out',
	once: 'true',
	});

//慣性スクロール
if(!navigator.userAgent.match(/(iPhone|iPad|iPod|Android|Edge)/)){
  $(window).on('load',function() {
    $('main').inertiaScroll({
      parent: $("#scroll__contents")
  });
  });
}
