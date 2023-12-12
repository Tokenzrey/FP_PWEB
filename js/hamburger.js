document.addEventListener("DOMContentLoaded", function () {
	const mobileNavigation = document.querySelector(".navigation-mobile");
	const mobileNavigationIcon = document.querySelector(".fa-bars");
	const exitNavMobile = document.querySelector(".fa-xmark");
    const dropdownTitles = document.querySelectorAll('.navigation-mobile-menu .dropdown');

    dropdownTitles.forEach(function (title) {
        title.addEventListener('click', function () {
            title.classList.toggle('active');
        });
    });
	// Toggle active class on mobileNavigation when mobileNavigationIcon is clicked
	mobileNavigationIcon.addEventListener("click", function () {
		mobileNavigation.classList.toggle("active");
	});
	exitNavMobile.addEventListener("click", function () {
		mobileNavigation.classList.remove("active");
	});
	// Close mobileNavigation when clicking outside of it
	document.addEventListener("click", function (event) {
		if (
			!mobileNavigation.contains(event.target) &&
			event.target !== mobileNavigationIcon
		) {
			mobileNavigation.classList.remove("active");
		}
	});
});
