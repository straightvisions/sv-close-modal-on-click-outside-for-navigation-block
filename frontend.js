window.addEventListener('load', function() {
	document.addEventListener('click', (e) => {
		document.querySelectorAll('.wp-block-navigation__responsive-container.has-modal-open').forEach(menuContainer => {
			if(!menuContainer){
				return
			}
			if(e.target.classList.contains('wp-block-navigation__responsive-container-open')){
				return
			}
			if(e.target.classList.contains('wp-block-navigation__responsive-container-close')){
				return
			}
			if (!menuContainer.contains(e.target)) {
				document.querySelector('html').classList.remove('has-modal-open')
				menuContainer.classList.remove('is-menu-open', 'has-modal-open')
				menuContainer.setAttribute('aria-hidden', 'true');
			}
		})
	})
})