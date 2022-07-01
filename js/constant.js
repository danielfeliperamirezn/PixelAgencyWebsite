const easeBoxes = []

// Create an animation for each ease box. Each with a different timing.
document.querySelectorAll('.easeBox').forEach((elem, i) => {

    // Get the timing from the data attribute.
    // You can also hard-code the timing, but for the demo it's easier this way.
    const timing = elem.getAttribute('data-timing')

    // Crate an instance for the current element and store the instance in an array.
    // We start the animation later using the instances from the array.
    easeBoxes.push(basicScroll.create({
        elem: elem,
        from: 'middle-bottom',
        to: 'bottom-top',
        direct: true,
        props: {
            '--ty': {
                from: '0',
                to: '100px',
                timing: timing
            }
        }
    }))

});

const fadeBox = basicScroll.create({
    elem: document.querySelector('.containerProducts'),
    from: 'bottom-bottom',
    to: 'top-middle',
    inside: (instance, percentage, props) => console.log('fadeBox is animating'),
    outside: (instance, percentage, props) => console.log('fadeBox is not animating'),
    props: {
        '--o': {
            from: .01,
            to: .99
        }
    }
});

fadeBox.start();