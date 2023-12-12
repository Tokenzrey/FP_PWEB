// Function to clear input fields
function clearInputFields() {
	$("input[type='text'], input[type='email'], input[type='password']").val("");
}

// Function to clear error message
function clearErrorMessage() {
	$(".error-msg p").text("");
	$(".error-msg").hide();
}

$(document).ready(function () {
	// Clear input fields on document ready
	clearInputFields();
	// Check the URL hash on page load
	var hash = window.location.hash;
	if (hash === "#login" || hash === "#register") {
		// Show the corresponding tab
		$(".tab a[href='" + hash + "']")
			.parent()
			.addClass("active");
		$(".tab a[href='" + hash + "']")
			.parent()
			.siblings()
			.removeClass("active");

		// Show the corresponding content
		$(".tab-content > div").not(hash).hide();
		$(hash).fadeIn(600);
	}

	$(".form")
		.find("input, textarea")
		.on("keyup blur focus", function (e) {
			var $this = $(this),
				label = $this.prev("label");

			if (e.type === "keyup") {
				if ($this.val() === "") {
					label.removeClass("active highlight");
				} else {
					label.addClass("active highlight");
				}
			} else if (e.type === "blur") {
				if ($this.val() === "") {
					label.removeClass("active highlight");
				} else {
					label.removeClass("highlight");
				}
			} else if (e.type === "focus") {
				if ($this.val() === "") {
					label.removeClass("highlight");
				} else if ($this.val() !== "") {
					label.addClass("highlight");
				}
			}
		});

	$(".tab a").on("click", function (e) {
		e.preventDefault();

		$(this).parent().addClass("active");
		$(this).parent().siblings().removeClass("active");

		target = $(this).attr("href");

		$(".tab-content > div").not(target).hide();
		$(target).fadeIn(600);

		// Clear input fields when switching tabs
		clearInputFields();
		clearErrorMessage();
	});

	$(".form input").on("input", function () {
		$(".error-msg").hide();
		clearErrorMessage();
	});
});
