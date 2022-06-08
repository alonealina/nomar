function clickCourseButton() {
    document.forms.course_form.submit();
}

function clickCourseButtonSp() {
    document.forms.course_form_sp.submit();
}

function clickPracticeButton() {
    document.forms.practice_form.submit();
}

function clickPracticeButtonSp() {
    document.forms.practice_form_sp.submit();
}

function clickSearchButton() {
    document.forms.search_form.submit();
}

function clickSearchButtonSp() {
    document.forms.search_form_sp.submit();
}

$(function () {
    $('.more_view_btn').prev().hide();
		$('.more_view_btn').click(function () {
			var position = $(this).offset().top;
			if ($(this).prev().is(':hidden')) {
				$(this).prev().slideDown(500);
				$(this).children("img").attr("src", $(".more_view_btn img").attr("src").replace("_open", "_close"));
			} else {
				$(this).prev().slideUp({
					step: function() {
						$("html,body").animate({
							scrollTop: position - 500,
						},
						{
							queue: false, duration: 200,
						});
					}
				});
				$(this).children("img").attr("src", $(".more_view_btn img").attr("src").replace("_close", "_open"));
			}
		});
});

$(function () {
    $('.more_view_btn_sp').prev().hide();
		$('.more_view_btn_sp').click(function () {
			var position = $(this).offset().top;
			if ($(this).prev().is(':hidden')) {
				$(this).prev().slideDown(500);
				$(this).children("img").attr("src", $(".more_view_btn_sp img").attr("src").replace("_open", "_close"));
			} else {
				$(this).prev().slideUp({
					step: function() {
						$("html,body").animate({
							scrollTop: position - 500,
						},
						{
							queue: false, duration: 200,
						});
					}
				});
				$(this).children("img").attr("src", $(".more_view_btn_sp img").attr("src").replace("_close", "_open"));
			}
		});
});

const maxFilesAdmin = 8;
function fileCheckMain(){

    let file_btn = $("#file_btn_main");
  
    // addEventListener() の jQuery による略記
    file_btn.off('change');
    file_btn.on("change", function(evt){
  
      // 変数 $file_btn に格納済みのjQueryオブジェクトを使っても良い。
      let elm = file_btn[0];
      if( maxFilesAdmin < elm.files.length ) {
  
        alert(`添付できるのは ${maxFilesAdmin} 枚までです` );
  
        elm.value = null; // input[type=file] をリセット
  
        $('.img_tmb_main').html('');
  
        return false;// イベントリスナを抜ける。
      }
      // プレビュー処理など。
  
      $('.img_tmb_main').html('');
      var file = elm.files;
  
      var img_count = 1;
      $(file).each(function(i) {
      // 8枚まで
      if (img_count > 8) {
          return false;
      }
  
      if (! file[i].type.match('image.*')) {
          $(this).val('');
          elm.value = null;
          alert(`画像ファイルを選択してください` );
          $('.img_tmb_main').html('');
          return;
      }
  
      var reader = new FileReader();
      reader.onload = function() {
          var img_src = $('<img>').attr('src', reader.result);
          $('.img_tmb_main').append(img_src);
      }
      reader.readAsDataURL(file[i]);
  
      img_count = img_count + 1;
      });
  
  })
};

function clickRegistButton() {
    document.forms.regist_form.submit();
}
  
function clickEditButton() {
    document.forms.edit_form.submit();
}
