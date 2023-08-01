(function () {
    init();

    function init() {
        setStickyContainersSize();
        bindEvents();
    }

    function bindEvents() {
        // For desktop devices
        window.addEventListener("wheel", wheelHandler);

        // For mobile devices
        let touchStartY;
        window.addEventListener("touchstart", function (e) {
            touchStartY = e.touches[0].clientY;
        });

        window.addEventListener("touchmove", function (e) {
            e.preventDefault();
            let deltaY = touchStartY - e.touches[0].clientY;
            touchStartY = e.touches[0].clientY;
            wheelHandler({ deltaY: deltaY });
        });
    }

    function setStickyContainersSize() {
        document.querySelectorAll('.sticky-container').forEach(function (container) {
            if(window.innerWidth < 768) {
                container.setAttribute('style', 'height: 17000px');
            } else {
                container.setAttribute('style', 'height: 7000px');
            }
        });
    }

    function isElementInViewport(el) {
        const rect = el.getBoundingClientRect();
        return rect.top <= 0 && rect.bottom > document.documentElement.clientHeight;
    }

    function wheelHandler(evt) {
        const containerInViewPort = Array.from(document.querySelectorAll('.sticky-container')).filter(function (container) {
            return isElementInViewport(container);
        })[0];

        if (!containerInViewPort) {
            return;
        }

        var isPlaceHolderBelowTop = containerInViewPort.offsetTop < document.documentElement.scrollTop;
        var isPlaceHolderBelowBottom = containerInViewPort.offsetTop + containerInViewPort.offsetHeight > document.documentElement.scrollTop;
        let g_canScrollHorizontally = isPlaceHolderBelowTop && isPlaceHolderBelowBottom;

        if (g_canScrollHorizontally) {
            containerInViewPort.querySelector('main').scrollLeft += evt.deltaY;
        }
    }
})();


let headers = document.querySelectorAll('.homepage_hero h2');
setInterval(function () {
    for(let i = 0; i < headers.length; i++) {
        if(headers[i].classList.contains('active')) {
            headers[i].classList.remove('active');
            if(i === headers.length - 1) {
                headers[0].classList.add('active');
            } else {
                headers[i + 1].classList.add('active');
            }
            break;
        }
    }
}, 1000);
