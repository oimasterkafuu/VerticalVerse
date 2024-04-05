const punctuations = /[，。？！、；：]/g

const markPunctuation = (element) => {
    const html = element.innerHTML;
    if (html.match(punctuations)) {
        element.innerHTML = html.replace(punctuations, '<span class="punctuation">$&</span>');
    }
};

document.addEventListener('DOMContentLoaded', () => {
    markPunctuation(document.body);
});
