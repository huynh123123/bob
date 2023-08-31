
        let t0
      let t1
      const carousel = document.getElementById('carousel-example-generic')
      carousel.addEventListener('slid.bs.carousel', event => {
        t1 = performance.now()
        console.log(`transition-duration took ${t1 - t0}ms, slid at ${event.timeStamp}`)
      })
      carousel.addEventListener('slide.bs.carousel', () => {
        t0 = performance.now()
      })
