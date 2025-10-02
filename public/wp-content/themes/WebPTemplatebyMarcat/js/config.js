//■慣性スクロール
const lenis = new Lenis({
    smooth: true
})

function raf(time) {
    lenis.raf(time)
    requestAnimationFrame(raf)
}

requestAnimationFrame(raf)