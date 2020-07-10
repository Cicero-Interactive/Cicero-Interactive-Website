function toggleCollapsible(btn) {
	var content = btn.nextElementSibling;
    if (content.style.maxHeight) {
        // Is extended
        content.style.maxHeight = null;
        if (btn.dataset.contentCollapsed) {
            btn.innerHTML = btn.dataset.contentCollapsed;
        }
    } else {
        // Is collapsed
        content.style.maxHeight = content.scrollHeight + "px";
        if (btn.dataset.contentExpanded) {
            btn.innerHTML = btn.dataset.contentExpanded;
        }
    }
}