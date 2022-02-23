const slider = document.getElementById('slider');
const color = document.getElementById('inputColor');

slider.addEventListener('input', () => {
    var sliders = document.getElementsByClassName('slider');
    Object.keys(sliders).forEach(function(key) {
        console.log(sliders[key]);
        sliders[key].style.width = `${slider.value / 100 * 250}px`;
    });
    console.log(slider.value);
    document.getElementById("slidervalue").innerHTML = slider.value;

});

color.addEventListener('input', () => {
    document.getElementById('couleurs').style.backgroundColor = color.value;
})