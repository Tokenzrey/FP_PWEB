document.addEventListener("DOMContentLoaded", function () {
	const topBarDropdowns = document.querySelectorAll(".topbar-click-dropdown");

	// Function to check if an element is a descendant of another
	const isDescendant = (parent, child) => {
		let node = child.parentNode;
		while (node !== null) {
			if (node === parent) {
				return true;
			}
			node = node.parentNode;
		}
		return false;
	};

	document.addEventListener("click", function (event) {
		// Check if the clicked element is outside topbar-dropdown
		const isOutsideTopbarDropdown = Array.from(topBarDropdowns).every(
			(dropdown) => {
				return !isDescendant(dropdown, event.target);
			}
		);

		// Remove active class from all topbar-dropdown if outside is clicked
		if (isOutsideTopbarDropdown) {
			topBarDropdowns.forEach(function (dropdown) {
				dropdown.classList.remove("active");
			});
		}
	});

	topBarDropdowns.forEach(function (dropdown) {
		dropdown.addEventListener("click", function (event) {
			// Stop the click event from reaching the document body
			event.stopPropagation();

			// Remove active class from all other dropdowns
			topBarDropdowns.forEach(function (otherDropdown) {
				if (otherDropdown !== dropdown) {
					otherDropdown.classList.remove("active");
				}
			});

			// Toggle active class for the clicked dropdown
			dropdown.classList.toggle("active");
		});
	});
});
