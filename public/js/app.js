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