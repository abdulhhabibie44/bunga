function bs_input_file() {
	$(".input-file").before(
		function () {
			if (!$(this).prev().hasClass('input-ghost')) {
				var element = $("<input type='file' name='nama_foto' class='input-ghost' style='visibility:hidden; height:0'>");
				element.attr("nama_foto", $(this).attr("nama_foto"));
				element.change(function () {
					element.next(element).find('input').val((element.val()).split('\\').pop());
				});
				$(this).find("button.btn-choose").click(function () {
					element.click();
				});
				$(this).find('input').css("cursor", "pointer");
				$(this).find('input').mousedown(function () {
					$(this).parents('.input-file').prev().click();
					return false;
				});
				return element;
			}
		}
	);
}
$(function () {
	bs_input_file();
});
