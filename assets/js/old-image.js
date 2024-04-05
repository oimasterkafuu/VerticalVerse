const work = () => {
    const screenHeight = window.innerHeight;

    const images = document.querySelectorAll('img');
    images.forEach(image => {
        const src = image.src;
        image.src = '';
        const div = document.createElement('div');
        div.classList.add('article-image');
        fetch(src)
            .then(response => response.blob())
            .then(blob => {
                const objectURL = URL.createObjectURL(blob);
                div.style.backgroundImage = `url(${objectURL})`;

                const tmpImg = new Image();
                tmpImg.src = objectURL;
                tmpImg.onload = () => {
                    if(tmpImg.height <= screenHeight * 0.7) {
                        div.style.width = tmpImg.width + 'px';
                        div.style.height = tmpImg.height + 'px';
                    } else {
                        const r = tmpImg.width / tmpImg.height;
                        div.style.width = screenHeight * 0.7 * r + 'px';
                        div.style.height = screenHeight * 0.7 + 'px';
                    }
                };
            });
        image.parentNode.replaceChild(div, image);
    })
}

document.addEventListener('DOMContentLoaded', work);
