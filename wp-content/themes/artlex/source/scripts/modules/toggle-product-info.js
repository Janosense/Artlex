const close_overlay = () => {
	const overlay = document.querySelector('.overlay--active');
	if (overlay) {
		const close_button = overlay.querySelector('.overlay__close');
		
		close_button.removeEventListener('click', close_overlay);
		
		overlay.classList.remove('overlay--active');
	}
}

const on_overlay_click = (evt) => {
	evt.stopPropagation();
}

const toggle_product_info = () => {
	const product_items = document.querySelectorAll('.products__item');
	
	if (product_items.length) {
		product_items.forEach((product_item) => {
			product_item.addEventListener('click', () => {
				const overlay = product_item.querySelector('.overlay');
				if (overlay) {
					overlay.addEventListener('click', on_overlay_click);
					const close_button = overlay.querySelector('.overlay__close');
					
					close_button.addEventListener('click', close_overlay);
					
					overlay.classList.add('overlay--active');
				}
			});
		});
	}
}

export default toggle_product_info;
