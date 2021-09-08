(function ($) {

	// Number varials for various needed px numbers. The scrolling is initialized after main hero which is setup to minScrollTop etc.
	var width = $(window).width(),
		lastScrollTop = 0,
		scrollTop = 0,
		scrollUpDelta = 100,
		mobScrollTop = 415,
		minScrollTop = 650,
		body = $(document.body),
		mobile = $('html, body'),
		win = $(window),
		maxWidth = 909,
		minWidth = 574,
		offset = 50;

	// Setup various classes which we are going to use
	var sidebar = $('#sidebar'),
		mobileMenu = $('.mobile__menu ul'),
		topMenu = $('#sidebar, .mobile__menu'),
		topMenuDesktop = $('#sidebar'),
		topMenuMobile = $('.mobile__menu'),
		topMenuDesktopHeight = topMenuDesktop.outerHeight() + offset,
		topMenuMobileHeight = topMenuMobile.outerHeight() + offset,
		menuItems = topMenu.find('a[href*="#"]');

	// This function adds position:fixed class after main hero is passed
	function setNavClass() {

		scrollTop = win.scrollTop();

		if (width > maxWidth) {

			if (scrollTop - lastScrollTop > 0 || Math.abs(lastScrollTop - scrollTop) >= scrollUpDelta) {

				if (scrollTop > lastScrollTop && scrollTop >= minScrollTop) {
					body.addClass('sidebar-fixed');
					sidebar.css('top', 35 + 'px');
				} else if (scrollTop < lastScrollTop && scrollTop <= minScrollTop) {
					body.removeClass('sidebar-fixed');
					sidebar.css('top', 0);
				}
				lastScrollTop = scrollTop;
			}
		}
		if (width <= minWidth && scrollTop > lastScrollTop && scrollTop >= mobScrollTop) {
			body.addClass('mobile-fixed');
		} else if (0 <= mobScrollTop) {
			body.removeClass('mobile-fixed');
			mobileMenu.css('bottom', 0 + 'px');
		}
	}

	$(window).scroll(setNavClass);

	// Standard mobilemenu functionality
	$('span.menu, .menu__shade').click(function () {
		mobile.toggleClass('mobile-open');
		mobileMenu.css('bottom', 0 + 'px');
	});

	// Hack to exit menu after clicking a link in mobile
	$('.mobile__menu ul li a').click(function () {
		mobile.removeClass('mobile-open');
		mobileMenu.css('bottom', 0 + 'px');
	});

	// Anchors corresponding to menu items
	scrollItems = menuItems.map(function () {
		var href = $(this).attr("href"),
			id = href.substring(href.indexOf('#')),
			item = $(id);
		if (item.length) {
			return item;
		}
	});

	$(document).ready(function () {

		$("#goTop a").click(function (e) {
			$('html, body').stop().animate({
				scrollTop: 0
			}, 800);
			e.preventDefault();
		});

		var lastScrollTop = 0;

		$(window).scroll(function (e) {
			var st = $(this).scrollTop();
			if (st > lastScrollTop || st < 450) {
				$('.jump-to-top').hide();
			} else {
				$('.jump-to-top').show();
			}
			lastScrollTop = st;
		});

	});

	// so we can get a fancy scroll animation
	menuItems.click(function (e) {

		var href = $(this).attr("href"),
			id = href.substring(href.indexOf('#')),
			offsetTop = href === "#" ? 0 : $(id).offset().top - topMenuDesktopHeight + 600;


		if (width < minWidth) {
			offsetTop = href === "#" ? 0 : $(id).offset().top - topMenuMobileHeight - 250;
		}

		$('html, body').stop().animate({
			scrollTop: offsetTop
		}, 1000);
		e.preventDefault();
	});

	// Bind to scroll
	$(window).scroll(function () {

		// FromTop gets container scroll position
		var fromTop = $(this).scrollTop() + topMenuDesktopHeight + 600,
			active = -1,
			scrollTarget = false,
			sidebarFixed = $('.sidebar-fixed #sidebar'),
			sidebarFixedMouse = $('.sidebar-fixed #sidebar .mouse'),
			mobileMenuFixed = $('.mobile-fixed .mobile__menu ul');

		if (width < minWidth) {
			fromTop = $(this).scrollTop() + topMenuMobileHeight - 250;
		}

		// Get id of current scroll item TODO: clean this
		if (scrollTarget === false) {
			cur = scrollItems.map(function () {
				if ($(this).offset().top - fromTop > 0) {
					return false
				}
				active++
			});
			cur = scrollItems.map(function () {
				if ($(this).offset().top < fromTop) {
					return this;
				}
			});
		} else {
			active = scrollTarget
		}


		// Get the id of the current element
		cur = cur[cur.length - 1];
		var id = cur && cur.length ? cur[0].id : "";

		// Check that ID exists and adds active class
		if (id) {
			sidebarFixedMouse.css('opacity', 1);
			menuItems.parent().removeClass('active');
			sidebarFixed.css('top', -1 * active * 10 + 45 + 'px');
			if (width > minWidth && !$(document.body).hasClass('mobile-open')) {
				sidebarFixedMouse.css('top', 1 * active * 25.2 + 0 + 'px');
				menuItems.parent().end().filter("[href*='#" + id + "']").parent().addClass('active');
			} else if (width <= minWidth && !$(document.body).hasClass('mobile-open') && id !== '2019') {
				mobileMenuFixed.css('bottom', 1 * active * 20 + 20 + 'px');
			}
		}
	});

	// Mobile navigation
	var mobilePanelVisible = false;
	$('.navbar-burger.burger').click(function(){
		if (mobilePanelVisible) {
			$('.mobile-menu-panel').hide();
		} else {
			$('.mobile-menu-panel').show();
		}
		mobilePanelVisible = !mobilePanelVisible;
	})

})(jQuery);

