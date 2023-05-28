function truncateText() {
    let text = document.querySelector("p.title");
    if (text) {
        let truncated = text.innerHTML.substring(0, 120) + "...";
        text.innerHTML = truncated;
    }
}

truncateText();
